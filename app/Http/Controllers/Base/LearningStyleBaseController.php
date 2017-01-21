<?php

namespace App\Http\Controllers\Base;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\RLSRepository;
use App\Repositories\LearningStyleReposiroty;
use App\Repositories\UserRepository;


class LearningStyleBaseController extends Controller
{

  public $rLSRepository;
  public $learningStyleRepository;
  public $userRepository;

  public function __construct(
    UserRepository $userRepository,
    RLSRepository $rLSRepository,
    LearningStyleReposiroty $learningStyleRepository
  )
  {
    $this->rLSRepository = $rLSRepository;
    $this->learningStyleRepository = $learningStyleRepository;
    $this->userRepository = $userRepository;
  }
      /* Estilos de aprendizaje  */

          public function storeLearningStyle($learningStyle,$id_user,$action)
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

              if ($action == "create") {
                $LearningStyle = $this->learningStyleRepository->store($Array_value);
              }else {
                $idLearning = $this->userRepository->find($id_user)->learningStyle->first()->id;
                $LearningStyle = $this->learningStyleRepository->update($Array_value,$idLearning);
              }
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
