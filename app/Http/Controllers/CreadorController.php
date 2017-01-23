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

use App\Http\Controllers\Base\LearningStyleBaseController;
use App\Http\Controllers\Base\FieldUserBaseController;

class CreadorController extends Controller
{
  public $aplicationRepository;
  public $userRepository;
  public $fieldUserRepository;
  public $rolRepository;

  public $learningStyleBaseController;
  public $fieldUserBaseController;

  public function __construct(
      AplicationRepository $aplicationRepository,
      UserRepository $userRepository,
      FieldUserRepository $fieldUserRepository,
      RolRepository $rolRepository,
      LearningStyleBaseController $learningStyleBaseController,
      FieldUserBaseController $fieldUserBaseController
  )
  {
    $this->aplicationRepository = $aplicationRepository;
    $this->userRepository = $userRepository;
    $this->fieldUserRepository = $fieldUserRepository;
    $this->rolRepository = $rolRepository;
    $this->learningStyleBaseController = $learningStyleBaseController;
    $this->fieldUserBaseController = $fieldUserBaseController;
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
            return view('creador.show')
                    ->with('aplications', $aplications)
                    ->with('user',$user);
        }else{
            return view('creador.index');
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

            return view('creador.edit')
                        ->with('user', $user)
                        ->with('roles', $roles);
        }else{
            return view('creador.index');
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
        return redirect()->route('Creador.show',$user->id);

    }

    public function editApps($id)
    {
       if ($id == Auth::user()->id) {
            $aplications= $this->aplicationRepository->listRequareInfo();
            return view('creador.editAll')
                    ->with('aplications', $aplications)
                    ->with('user_id',$id);
        }else{
             return view('creador.index');
        }
    }


    public function editAll($id)
    {
      $user =$this->userRepository->findNeed($id);
      return view('creador.indexEdit')->with('user', $user);
    }

    public function updateAll(Request $request)
    {
      $datos = $request->all();
      $info = unserialize($datos["info"]);
      $id_user = $datos["id_user"];
      $this->fieldUserBaseController->storeFieldsUser($datos, $info, $id_user,1);

      $user =$this->userRepository->findNeed($id_user);
      flash( "has editado la informacion de envio a aplicaciones de forma exitosa" , "success");
      return redirect()->route('Creador.show',$user->id);
    }

    public function estilosEdit($id)
    {
      return view('creador.editLearningStyle')->with('id', $id);
    }

    public function storeEstilosEdit(Request $request)
    {
      $id_user = currentUser()->id;
      $this->learningStyleBaseController->storeLearningStyle($request->all(),$id_user,"edit");

      flash( "has editado tu informacion de  estilos de aprendizaje de forma exitosa" , "success");
      return redirect()->route('Creador.show',$id_user);
    }

    public function needEdit($id)
    {
      # code...
    }

    public function storeNeedEdit(Request $request)
    {
      # code...
    }
}
