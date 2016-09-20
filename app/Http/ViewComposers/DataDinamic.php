<?php


namespace App\Http\ViewComposers;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Auth\Guard;
use App\Http\Controllers\Controller;

use App\FieldUser;
use App\Aplication;
use App\Table;
use App\TypeField;
use App\FieldTable;
use App\Option;
use App\User;
use App\Rol;


/**
* 
*/
class DataDinamic extends Controller {

	protected $auth;
        
    public function __construct(Guard $auth){
        
            $this->auth = $auth;
        }
	
	public function compose(View $view)
	{
		if ($this->auth->user()) {

			$id = $this->auth->user()->id;
			//$aplications = $this->Consult_Aplications($id);
			$need = $this->consult_Need($id);
			$learningStyle = $this->consult_learningStyle($id);
			$personalization = $this->consult_personalization($id);

			$data = array(
					'need' => $need,
					'learningStyle' => $learningStyle,
					'personalization' => $personalization
				);
	   
	        #-------------------------------------------------
	       // datos de usuario   
	        $usuario = User::where('id',$id)->get();
	        #-------------------------------------------------
		}else{
			$data = null;
			$usuario = null;
		}

		$view->with('data', $data)->with('usuario', $usuario);
	}
}