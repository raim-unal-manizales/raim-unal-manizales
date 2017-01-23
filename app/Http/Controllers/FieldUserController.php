<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\FieldUserRequest;
use App\Http\Controllers\Controller;

use App\Repositories\FieldUserRepository;
use App\Repositories\UserRepository;
use App\Repositories\AplicationRepository;

use App\Http\Controllers\Base\FieldUserBaseController;


class FieldUserController extends Controller
{
  public $fieldUserRepository;
  public $aplicationRepository;
  public $userRepository;
  public $fieldUserBaseController;

  public function __construct(
    FieldUserRepository $fieldUserRepository,
    AplicationRepository $aplicationRepository,
    UserRepository $userRepository,
    FieldUserBaseController $fieldUserBaseController
  )
  {
    $this->fieldUserRepository = $fieldUserRepository;
    $this->aplicationRepository = $aplicationRepository;
    $this->userRepository = $userRepository;
    $this->fieldUserBaseController = $fieldUserBaseController;
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $fieldusers = $this->fieldUserRepository->orderBy();
      return view('admin.fieldUser.index')->with('fieldusers',$fieldusers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $aplications= $this->aplicationRepository->listRequareInfo();
      $users = $this->userRepository->lists("user_name");
      return view('admin.fieldUser.create')
                  ->with('aplications',$aplications)
                  ->with('users',$users);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $datos = $request->all();
         $info = unserialize($datos["info"]);
         $user = $datos["id_user"];
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
            $fieldEspecific  = $this->fieldUserRepository->store($values);
         }
         $fieldusers = $this->fieldUserRepository->orderBy();
         flash( "Se ha editado el  de forma exitosa" , "success");
         return view('admin.fieldUser.index')->with('fieldusers',$fieldusers);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fielduser = FieldUser::find($id);
        return view('admin.fieldUser.show')->with('fielduser', $fielduser);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fielduser = $this->fieldUserRepository->find($id);
        return view('admin.fieldUser.edit')->with('fielduser', $fielduser);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FieldUserRequest $request, $id)
    {
        $fielduser = $this->fieldUserRepository->updateFieldUser($request->all(),$id);

        flash( "Se ha editado el campo de usuario de forma exitosa" , "success");
        return redirect()->route('Admin.FieldUser.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fielduser = $this->fieldUserRepository->destroy($id);

        flash( "Se ha eliminado el campo de usuario de forma exitosa" , "warning");
        return redirect()->route('Admin.FieldUser.index');
    }

    public function delete($id)
    {
        $fielduser = $this->fieldUserRepository->find($id);
        return view('admin.fieldUser.destroy')->with('fielduser', $fielduser);
    }

    public function editApps($id)
    {
      $aplications= $this->Consult_Aplications($id);
      return view('admin.fieldUser.editAll')
                  ->with('aplications', $aplications)
                  ->with('user_id',$id);
    }

    public function updateAll(Request $request)
    {
      $datos = $request->all();
      $info = unserialize($datos["info"]);
      $id_user = $datos["id_user"];
      $this->fieldUserBaseController->storeFieldsUser($datos, $info, $id_user,1);

      flash( "Se han creado los campos de usuario de forma exitosa" , "success");
      return redirect()->route('Admin.FieldUser.index');
    }

}
