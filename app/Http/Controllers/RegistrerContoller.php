<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\FieldUser;
use App\Aplication;
use App\Table;
use App\TypeField;
use App\FieldTable;
use App\Option;
use App\Rol;
use App\LearningStyle;
use App\Personalization;
use App\Need;
use App\ReferenceLearningStyle;

class RegistrerContoller extends Controller
{
    public function create()
    {
    	$rol = Rol::where('id', '<>', 1)->orderBy('name','ASC')->lists('name', 'id');
    	$aplications = $this->Information_App();

        return view('public.register_user')
        			->with('rol', $rol)
        			->with('aplications',$aplications);
    }

    public function store(Request $request)
    {
    	$personalization = new Personalization($request->all());
    	$personalization->save();

    }

    public function createUser(Request $request){

    	$data = $request->all();
    	$user = new User();
    	$learningStyle = new LearningStyle();
    	$personalization = new Personalization();
    	$need = new Need();
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
    					$need-> save();
    					$bandera++;
    				}else{
    					$need->$key= $value;
    				}
    				break;

    			case '4':
    				if ($this->termination($value)) {
    					$personalization->user_id = $id_user;
    					$personalization-> save();
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
         
        
        //dd($resultado);

        //$user = Auth::user();

        return redirect()->route('Public.index');

    }

    protected function storeUser($user)
    {
        $user  = new User($user);
        $user -> password = bcrypt($user->password);
        $user -> encript = encrypt($user->password);
        $userCreate = User::create($user->toArray());
        return $userCreate->id;
    }

    
    protected function storeAll($datos,$id_user)
    {

        $info = unserialize(array_pop($datos));
        $cantidad = count($info);
        if ($cantidad > 0) {
             foreach ($info as $key => $values) {
                 
                $position = $values['position'];
                $value =    $datos[$position-1001];
                if ($values['select'] == 1) {
                    $option = $value;
                }else {
                    $option = 0;
                }
                $values['value'] = $value;
                $values['id_option'] = $option;
                $values['id_user']   = $id_user;
                
                $fieldEspecific  = new FieldUser($values);
                $fieldEspecific -> save();
             }
        }
    }


	protected function termination($value)
	{
		if ($value == "Termine") {
			return true;
		}else{
			return false;
		}


	}


    protected function Information_App()
    {
        $aplications = Aplication::where('rquiered_information','True')->get();

        $aplications->each(function ($aplications)
        {  
            $tables = Table::where('id_app',$aplications->id)->get();            
            
            $tables->each(function ($tables)
            {
                $fieldTables = FieldTable::where('id_table',$tables->id)->get();
                
                $fieldTables->each(function ($fieldTables)
                {
                    $id_fiel_tables = $fieldTables->id;

                    $types_fields= TypeField::where('id',$fieldTables->id_type_field)->get();
                    $fieldTables-> types_fields = $types_fields;
                  
                    $options= Option::where('id_field_table',$id_fiel_tables)->lists('name', 'id');
                    $fieldTables-> options = $options; 
                               
                }); 
            
            $tables-> fields_tables = $fieldTables->all();   
            });
        
        $aplications -> tablas = $tables; 
         });  

        return $aplications;
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

            $suma = $a + $k + $v * $r;
            $suma_dos = $s + $g;

            $Array_value['visual'] = round( $this->porcentaje($v,$suma), 2, PHP_ROUND_HALF_DOWN);
            $Array_value['kinestesic'] = round( $this->porcentaje($k,$suma), 2, PHP_ROUND_HALF_DOWN);
            $Array_value['auditory'] = round( $this->porcentaje($a,$suma), 2, PHP_ROUND_HALF_DOWN);
            $Array_value['reader'] = round( $this->porcentaje($r,$suma), 2, PHP_ROUND_HALF_DOWN);

            $Array_value['global'] = round( $this->porcentaje($s,$suma_dos), 2, PHP_ROUND_HALF_DOWN);
            $Array_value['sequential'] = round($this->porcentaje($g,$suma_dos), 2, PHP_ROUND_HALF_DOWN);

            $mayorUno = $this->MayorUno($a,$k,$v,$r);
            $mayorDos = $this->MayorDos($s,$g); 


            $referenceLearniingStyle = ReferenceLearningStyle::where('styleUno', $mayorUno)->where('styleTwo',$mayorDos)->lists('id')->toArray();


            $Array_value['reference_learning_styles']= $referenceLearniingStyle[0];

        }else{
            $learningStile =  ReferenceLearningStyle::where('learningStile', 'Defect-null')->lists('id')->toArray();
            $Array_value['reference_learning_styles'] = $learningStile[0]; 
            $Array_value['visual'] = 0;
            $Array_value['kinestesic'] = 0;
            $Array_value['auditory'] = 0;
            $Array_value['reader'] = 0;
            $Array_value['global'] = 0;
            $Array_value['sequential'] = 0;
        }


        $LearningStyle = new LearningStyle($Array_value);
        $LearningStyle->save(); 
        

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