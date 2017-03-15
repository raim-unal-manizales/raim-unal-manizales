<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use App\Repositories\AplicationRepository;

class RedirectController extends Controller
{
  public $userRepository;
  public $aplicationRepository;

  public function __construct(
    UserRepository $userRepository,
    AplicationRepository $aplicationRepository
  )
  {
    $this->userRepository = $userRepository;
    $this->aplicationRepository = $aplicationRepository;
  }

  public function session(Request $request){

   	$var = $request->all();
   	$app_id = (integer)$var['app_id'];
   	$user_id = (integer)$var['user_id'];

		$user = $this->userRepository->find($user_id);
		$Usuario  = $user->user_name;
		$contrasenia = decrypt($user->encript);

		$aplication = $this->aplicationRepository->find($app_id);
		$ruta = (String)$aplication->url;
		$ruta = $ruta."raim/inicio_session.php?Usuario=".$Usuario."&Contrasenia=".$contrasenia;

		$data = array(
			'Usuario' => $Usuario,
			'Contrasenia' => $contrasenia,
			'ruta' => $ruta,
    );
    return $data;

   }

   public function session_create(Request $request){

   		$datos = $request->all();
   		$id = $datos['id'];
   		$tipo_accion = $datos['tipo_accion'];

   		$solucion = $this->session_all($id,$tipo_accion);

   		return $solucion;
   }
}
