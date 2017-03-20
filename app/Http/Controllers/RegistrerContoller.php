<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
//use App\Http\Controllers\Auth;


use App\Repositories\RolRepository;
use App\Repositories\NeedRepository;
use App\Repositories\UserRepository;
use App\Repositories\LearningStyleReposiroty;
use App\Repositories\PersonalizationRepository;
use App\Repositories\AplicationRepository;
use App\Repositories\RLSRepository;
use App\Repositories\FieldUserRepository;
use App\Http\Controllers\Base\FieldUserBaseController;


use App\Http\Requests\RegisterRequest;

class RegistrerContoller extends Controller
{
  public $rolRepository;
  public $needRepository;
  public $userRepository;
  public $learningStyleRepository;
  public $personalizationRepository;
  public $aplicationRepository;
  public $rLSRepository;
  public $fieldUserRepository;

  public $fieldUserBaseController;

  public function __construct(
    RolRepository $rolRepository,
    NeedRepository $needRepository,
    UserRepository $userRepository,
    LearningStyleReposiroty $learningStyleRepository,
    PersonalizationRepository $personalizationRepository,
    AplicationRepository $aplicationRepository,
    RLSRepository $rLSRepository,
    FieldUserRepository $fieldUserRepository,
    FieldUserBaseController $fieldUserBaseController
  )
  {
    $this->rolRepository = $rolRepository;
    $this->needRepository = $needRepository;
    $this->userRepository = $userRepository;
    $this->learningStyleRepository = $learningStyleRepository;
    $this->personalizationRepository = $personalizationRepository;
    $this->aplicationRepository = $aplicationRepository;
    $this->rLSRepository = $rLSRepository;
    $this->fieldUserRepository = $fieldUserRepository;
    $this->fieldUserBaseController = $fieldUserBaseController;
  }
    public function create()
    {
    	$rol = $this->rolRepository->listSinAdmin();
    	$aplications= $this->aplicationRepository->listRequareInfo();

      $needEtnica = $this->getneedEtnica();

      return view('public.register_user')
        			    ->with('rol', $rol)
        			    ->with('aplications',$aplications)
                  ->with('needEtnica',$needEtnica);
    }

    /**
     * @param RegisterRequest|Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createUser(RegisterRequest $request){

        dd($request);

    	$data = $request->all();
      $dataLearnindDeff = $data['inicial-Learning'];

      $user = $this->userRepository->getModel();
    	$learningStyle = $this->learningStyleRepository->getModel();
    	$personalization = $this->personalizationRepository->getModel();
    	$need = $this->needRepository->getModel();

      $bandera = 0;
    	$array_tem_aplication[]= null;
    	$array_tem_LeranindStyle[]=null;
    	$id_user = 0;

    	foreach ($data as $key => $value) {

    		switch ($bandera) {
    			case '0':
    				if ($this->termination($value)) {
                        $id_user = $this->storeUser($user->toArray());
    					$bandera++;
    				}else{
    					$user->$key= $value;
    				}
    				break;
    			case '1':
    				if ($this->termination($value)) {
    					$extraer = array_shift($array_tem_aplication);
    					$this->storeAll($array_tem_aplication,$id_user);
    					$bandera++;
    				}else{
    					array_push($array_tem_aplication,$value);
    				}
    				break;
                case '2':
                    if ($this->termination($value)) {
                        $extraer = array_shift($array_tem_LeranindStyle);
                        $this->storeLearningStyle($array_tem_LeranindStyle,$id_user);
                        $bandera++;
                    }else{
                        array_push($array_tem_LeranindStyle,$value);
                    }
                        break;
    			case '3':
    				if ($this->termination($value)) {
    					$need->user_id = $id_user;
              $need = $this->needRepository->store($need->toArray());
    					$bandera++;
    				}else{
    					$need->$key= $value;
    				}
    				break;

    			case '4':
    				if ($this->termination($value)) {
    					$personalization->user_id = $id_user;

                        if ($personalization->fondSize == '') {
                            $personalization->fondSize = 0;
                        }
                        if ($personalization->interline == '') {
                            $personalization->interline = 0;
                        }
              $personalization = $this->personalizationRepository->store($personalization->toArray());
    					$bandera++;
    				}else{
    					$personalization->$key=$value;
    				}
    				break;
    			default:
    				break;
    		}
    	}
        $resultado = $this->session_all($id_user,'Create');
        //$user = Auth::user();


        if ($dataLearnindDeff == "Si") {
          $learningStyleName = $this->userRepository
                                    ->find($id_user)
                                    ->learningStyle
                                    ->first()
                                    ->reference_styles
                                    ->learningStile;

          $learningStyleDes= $this->userRepository
                                  ->find($id_user)
                                  ->learningStyle
                                  ->first()
                                  ->reference_styles
                                  ->description;

          $mensaje = "Su estilo de aprendizaje es: ".$learningStyleName.": ".$learningStyleDes."";
        }else {
          $mensaje = "Tu informacion no esta completa, te invito a que completes tu perfil";
        }

        flash("
        ¡¡¡ Se ha registrado de forma exitosa !!!.
        <br>
        <br>
        <p class='text-justify'>".$mensaje."</p>
        <br>
        Visita tu perfil dando clik en tu nombre de usuario en la parte superior derecha de tu pantalla para acceder a la opcion 'Perfil'." , "success");

        return redirect()->route('Public.index');
    }

    protected function storeAll($datos,$id_user)
    {
        $info = unserialize(array_pop($datos));
        $this->fieldUserBaseController->storeFieldsUser($datos, $info, $id_user, 1001);
    }

	protected function termination($value)
	{
		if ($value == "Termine") {
			return true;
		}else{
			return false;
		}
	}

/* Estilos de aprendizaje  */

    protected function storeLearningStyle($learningStyle,$id_user)
    {
    	$Array_value = $this->ModeloArray();

        $Array_value['user_id'] = $id_user;
        if ($learningStyle[0] == 'Si') {
            $text = "";
            foreach ($learningStyle as $key => $value) {
                $text .= $value;
            }

            $a = substr_count($text, 'A');
            $k = substr_count($text, 'K');
            $v = substr_count($text, 'V');
            $r = substr_count($text, 'R');

            $s = substr_count($text, 'S');
            $g = substr_count($text, 'G');

            $suma = $a + $k + $v + $r;
            $suma_dos = $s + $g;

            $Array_value['visual'] = round( $this->porcentaje($v,$suma), 2, PHP_ROUND_HALF_DOWN);
            $Array_value['kinestesic'] = round( $this->porcentaje($k,$suma), 2, PHP_ROUND_HALF_DOWN);
            $Array_value['auditory'] = round( $this->porcentaje($a,$suma), 2, PHP_ROUND_HALF_DOWN);
            $Array_value['reader'] = round( $this->porcentaje($r,$suma), 2, PHP_ROUND_HALF_DOWN);

            $Array_value['global'] = round( $this->porcentaje($g,$suma_dos), 2, PHP_ROUND_HALF_DOWN);
            $Array_value['sequential'] = round($this->porcentaje($s,$suma_dos), 2, PHP_ROUND_HALF_DOWN);

            $mayorUno = $this->MayorUno($a,$k,$v,$r);
            $mayorDos = $this->MayorDos($s,$g);

            $referenceLearniingStyle = $this->rLSRepository->whereHigher($mayorUno,$mayorDos);
            $Array_value['reference_learning_styles']= $referenceLearniingStyle[0];

        }else{
            $learningStile =  $this->rLSRepository->idDefectNull();
            $Array_value['reference_learning_styles'] = $learningStile[0];
            $Array_value['visual'] = 0;
            $Array_value['kinestesic'] = 0;
            $Array_value['auditory'] = 0;
            $Array_value['reader'] = 0;
            $Array_value['global'] = 0;
            $Array_value['sequential'] = 0;
        }
        $LearningStyle = $this->learningStyleRepository->store($Array_value);

    }
    protected function MayorUno($a,$k,$v,$r)
    {
    	if ($a >= $k) {
    		if ($a >= $v) {
    			if ($a >= $r) {
    				return "A";
    			}else{
    				return "R";
    			}
    		}elseif ($v >= $r) {
    			return "V";
    		}else{
    			return "R";
    		}
    	}elseif ($k >= $v) {
    		if ($k >= $r) {
    			return "K";
    		}else {
    			return "R";
    		}
    	}elseif ($v >= $r) {
    		return "V";
    	}else{
    		return "R";
    	}
    }

    protected function MayorDos($s,$g){

    	if ($s >= $g) {
    		return "S";
    	}else{
    		return "G";
    	}

    }

    protected function porcentaje($valor,$maximo){

    	return $valor/$maximo*100;
    }

    protected function ModeloArray(){

    	return  array(
    		'user_id' => '' ,
    		'reference_learning_styles' => '' ,
    		'visual' => '' ,
    		'kinestesic' => '' ,
    		'auditory' => '' ,
    		'reader' => '' ,
    		'global' => '' ,
    		'sequential' => ''

    		);

    }

    /**
     * @param RequestUser|UserRequest $user
     * @return mixed
     */
    private function storeUser($user)
    {
        return $this->userRepository->store($user)->id;
    }

    /* Fin de estilos de aprendizaje */


}
