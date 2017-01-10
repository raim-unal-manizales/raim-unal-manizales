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
      return view('estudiante.indexEdit')->with('user', $user);
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
        return view('estudiante.indexEdit')->with('user', $user);
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
      # code...
    }
    public function storeEstilosEdit(Resouce $resource)
    {
      # code...
    }
    public function storeEstilosCreate(Resouce $resource)
    {
      # code...
    }
    public function needEdit($id)
    {
      # code...
    }
    public function needCreate($id)
    {
      # code...
    }
    public function storeNeedEdit(Resouce $resource)
    {
      # code...
    }
    public function storeNeedCreate(Resouce $resource)
    {
      # code...
    }
}
