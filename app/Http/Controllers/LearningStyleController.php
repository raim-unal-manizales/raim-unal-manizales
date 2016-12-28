<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Entities\ReferenceLearningStyle;
use App\Entities\LearningStyle;

use App\Repositories\RLSRepository;
use App\Repositories\LearningStyleRepository;

class LearningStyleController extends Controller
{
    public $rLSRepository;
    public $learningStyleRepository;

    public function __construct(
        RLSRepository $rLSRepository,
        LearningStyleRepository $learningStyleRepository
    )
    {
      $this->rLSRepository = $rLSRepository;
      $this->learningStyleRepository = $learningStyleRepository;
    }

    public function create()
    {
        return view('public.learning_style');
    }

    public function store(Request $request)
    {


    	$Array_value = $this->ModeloArray();

        $Array_value['user_id'] = $request->user_id;

    	$text = "";
    	foreach ($request->all() as $key => $value) {
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
}
