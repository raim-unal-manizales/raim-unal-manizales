<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\PasswordResetRequest;
use App\Http\Requests;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use App\Repositories\RolRepository;
use App\Repositories\AplicationRepository;

use App\Http\Controllers\Base\LearningStyleBaseController;
use App\Http\Controllers\Base\FieldUserBaseController;

class UserController extends Controller
{
  public $userRepository;
  public $rolRepository;
  public $aplicationRepository;

  public $learningStyleBaseController;
  public $fieldUserBaseController;

  public function __construct(
    AplicationRepository $aplicationRepository,
    UserRepository $userRepository,
    RolRepository $rolRepository,
    LearningStyleBaseController $learningStyleBaseController,
    FieldUserBaseController $fieldUserBaseController
  )
  {
    $this->aplicationRepository = $aplicationRepository;
    $this->userRepository = $userRepository;
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
        $users = $this->userRepository->OrderId();
        return view('admin.user.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $rol = $this->rolRepository->lists();
        return view('admin.user.create')->with('rol', $rol);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UserRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $user=$this->userRepository->store($request->all());

        if ($user->id_rol == 1) {
           flash( "Se ha creado el usuario: ".$user->user_name." de forma exitosa" , "success");
           return redirect()->route('Admin.User.index');
        }else {
            flash( "Hola, ".$user->user_name." Debes incluir esta información para prestarte un mejor servicio" , "info");
            return redirect()->route('Admin.FieldUser.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = $this->userRepository->findRol($id);
        $aplications= $this->Consult_Aplications($id);

        return view('admin.user.show')
                    ->with('user', $user)
                    ->with('aplications', $aplications);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $user = $this->userRepository->findRol($id);
      $roles = $this->rolRepository->lists();

      return view('admin.user.edit')
                    ->with('user', $user)
                    ->with('roles', $roles);
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
        $user = $this->userRepository->updateUser($request->all(), $id);

        $edit_locale_relation = $this->fieldUserBaseController->traslateLocaleRelation($id);

        flash( "Se ha editado el usuario de forma exitosa" , "success");
        return redirect()->route('Admin.User.show',$user->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = $this->userRepository->destroy($id);

        flash( "Se ha eliminado el usuario de forma exitosa" , "warning");
        return redirect()->route('Admin.User.index');
    }

    public function delete($id)
    {
        $user = $this->userRepository->findRol($id);
        return view('admin.user.destroy')->with('user', $user);
    }

    public function editAll($id)
    {
      $user =$this->userRepository->findNeed($id);
      return view('admin.user.indexEdit')->with('user', $user);
    }

    public function estilosEdit($id)
    {
      return view('admin.user.editLearningStyle')->with('id', $id);
    }

    public function storeEstilosEdit(Request $request)
    {

      $id_user = $request->all()['id_user'];
      $this->learningStyleBaseController->storeLearningStyle($request->all(),$id_user,"edit");

      flash( "has editado tu informacion de  estilos de aprendizaje de forma exitosa" , "success");
      return redirect()->route('Admin.User.show',$id_user);
    }

    public function needEdit($id)
    {
      # code...
    }

    public function storeNeedEdit(Request $request, $id)
    {
      # code...
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function editPass($id)
    {
        return view('admin.user.editPass')->with('id_user', $id);
    }

    /**
     * @param PasswordResetRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storePass(PasswordResetRequest $request)
    {
        $user = $this->userRepository->storePass($request->all());
        flash( "Se ha editado la contraseña del usuario correctamente" , "success");
        return redirect()->route('Admin.User.show',$user->id);
    }
}
