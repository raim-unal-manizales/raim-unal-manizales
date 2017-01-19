<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Repositories\AplicationRepository;
use App\Repositories\UserRepository;
use App\Repositories\FieldUserRepository;
use App\Repositories\RolRepository;

class EstudianteController extends Controller
{
  public $aplicationRepository;
  public $userRepository;
  public $fieldUserRepository;
  public $rolRepository;

  public function __construct(
      AplicationRepository $aplicationRepository,
      UserRepository $userRepository,
      FieldUserRepository $fieldUserRepository,
      RolRepository $rolRepository
  )
  {
    $this->aplicationRepository = $aplicationRepository;
    $this->userRepository = $userRepository;
    $this->fieldUserRepository = $fieldUserRepository;
    $this->rolRepository = $rolRepository;
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //return view('estudiante.index');
        return view('public.index');
    }

    public function IndexAplication()
    {
      $aplications = $this->aplicationRepository->orderBy();
      return view('creador.index')->with('aplications', $aplications);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if ($id == Auth::user()->id) {
          $user = $this->userRepository->find($id);
          $aplications= $this->Consult_Aplications($id);

          return view('estudiante.show')
                    ->with('aplications', $aplications)
                    ->with('user',$user);
        }else{
            return view('estudiante.index');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if ($id == Auth::user()->id) {

          $user = $this->userRepository->find($id);
          $roles = $this->rolRepository->lists();

          return view('estudiante.edit')
                    ->with('user', $user)
                    ->with('roles', $roles);
        }else{
            return view('estudiante.index');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
      $user = $this->userRepository->update($request->all(), $id);

      $resultado = $this->session_all($id,'Update');

      $user =$this->userRepository->findNeed($id);
      flash( "has editado tu información personal de forma exitosa" , "success");
      return redirect()->route('Estudiante.show',$user->id);
    }

    public function editApps($id)
    {

       if ($id == Auth::user()->id) {
          $aplications =  $this->Consult_Aplications($id);
          return view('estudiante.editAll')
                    ->with('aplications', $aplications)
                    ->with('user_id',$id);
        }else{
             return view('estudiante.index');
        }
    }


    public function updateAll(Request $request)
    {
        $datos = $request->all();
        $info = unserialize($datos["info"]);
        $user = $datos["id_user"];
        $this->UpdateFormat($datos, $info, $user);

        $user =$this->userRepository->findNeed($user);
        flash( "has editado la informacion de envio a aplicaciones de forma exitosa" , "success");
        return redirect()->route('Estudiante.show',$user->id);
    }

    private function UpdateFormat($datos, $info, $user)
    {
      foreach ($info as $key => $values) {
          $position = $values['position'];
          $value =    $datos[$position-1];
          if ($values['select'] == 1) {
              $option = $value;
          }else {
              $option = 0;
          }
          $values['value'] = $value;
          $values['id_option'] = $option;
          $values['id_user']   = $user;

          if ($values['defect_value'] == null) {
              if ($values['value'] != null) {
                  $fieldEspecific  = $this->fieldUserRepository->store($values);
              }
          }else{
              $fieldEspecific = $this->fieldUserRepository->update($values, $values['id_defect']);
          };
      }
    }


    public function editAll($id)
    {
      $user =$this->userRepository->findNeed($id);
      return view('estudiante.indexEdit')->with('user', $user);
    }

    public function estilosEdit($id)
    {
      # code...
    }
    public function estilosCreate($id)
    {
      return view('estudiante.createLearningStyle')->with('id', $id);
    }
    public function storeEstilosEdit(Request $request)
    {
      # code...
    }
    public function storeEstilosCreate(Request $request)
    {
      $id_user = currentUser()->id;
      $this->storeLearningStyle($array_tem_LeranindStyle,$id_user);
      dd($request->all());
    }
    public function needEdit($id)
    {
      # code...
    }
    public function needCreate($id)
    {
      # code...
    }
    public function storeNeedEdit(Request $request)
    {
      # code...
    }
    public function storeNeedCreate(Request $request)
    {
      # code...
    }





    /* Estilos de aprendizaje  */

        protected function storeLearningStyle($learningStyle,$id_user)
        {
        	$Array_value = $this->ModeloArray();

            $Array_value['user_id'] = $id_user;
            if ($learningStyle['inicial-Learning'] == 'Si') {
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

                $suma = $a + $k + $v * $r;
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

    /* Fin de estilos de aprendizaje */
}
