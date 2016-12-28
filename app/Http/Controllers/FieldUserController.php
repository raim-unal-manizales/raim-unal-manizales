<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Entities\FieldUser;
use App\Entities\Aplication;
use App\Entities\Table;
use App\Entities\TypeField;
use App\Entities\FieldTable;
use App\Entities\Option;
use App\Entities\User;

use App\Repositories\FieldUserRepository;
use App\Repositories\AplicationRepository;
use App\Repositories\TableRepository;
use App\Repositories\TypeFieldRepository;
use App\Repositories\FieldTableRepository;
use App\Repositories\OptionFieldRepository;
use App\Repositories\UserRepository;

class FieldUserController extends Controller
{
  public $fieldUserRepository;
  public $aplicationRepository;
  public $userRepository;

  public function __construct(
    FieldUserRepository $fieldUserRepository,
    AplicationRepository $aplicationRepository,
    UserRepository $userRepository
  )
  {
    $this->fieldUserRepository = $fieldUserRepository;
    $this->aplicationRepository = $aplicationRepository;
    $this->userRepository = $userRepository;
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
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
      $users = $this->userRepository->list("user_name");
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
    public function update(Request $request, $id)
    {
        $fielduser = $this->fieldUserRepository->updateFieldUser($request->all(),$id);
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
        return redirect()->route('Admin.FieldUser.index');
    }

    public function delete($id)
    {
        $fielduser = $this->fieldUserRepository->find($id);
        return view('admin.fieldUser.destroy')->with('fielduser', $fielduser);
    }


    public function editApps($id)
    {

       //$aplications = Aplication::all();
       $aplications = Aplication::where('rquiered_information','True')->get();
       $aplications -> user_id = $id;

        foreach ($aplications as $key => $value) {
            $value -> user_id = $id;
        }
        $aplications->each(function ($aplications)
        {

            $tables = Table::where('id_app',$aplications->id)->get();

            foreach ($tables as $key => $value) {
             $value -> user_id = $aplications->user_id;

            }

            $tables->each(function ($tables)
            {

                $fieldTables = FieldTable::where('id_table',$tables->id)->get();

                foreach ($fieldTables as $key => $value) {
                    $value -> user_id = $tables->user_id;

                }

                $fieldTables->each(function ($fieldTables)
                {

                    $id_fiel_tables = $fieldTables->id;

                    $fielduser = FieldUser::where('id_user',$fieldTables->user_id)->where('id_field_table',$id_fiel_tables)->get()->first();

                    if (is_null($fielduser)) {

                        $fieldTables-> value = null;
                        $fieldTables-> id_defect = null;
                    }else{

                        $fieldTables-> value = $fielduser->value;
                        $fieldTables-> id_defect = $fielduser->id;
                    };

                    $types_fields= TypeField::where('id',$fieldTables->id_type_field)->get();
                    $fieldTables-> types_fields = $types_fields;

                    $options= Option::where('id_field_table',$id_fiel_tables)->lists('name', 'id');
                    $fieldTables-> options = $options;



                });

            $tables-> fields_tables = $fieldTables->all();
            });

        $aplications -> tablas = $tables;
         });

        $fielduser = FieldUser::find($id);


        return view('admin.fieldUser.editAll')
                ->with('aplications', $aplications)
                ->with('user_id',$id)
                ->with('fielduser',$fielduser);
    }

    public function updateAll(Request $request)
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



            if ($values['defect_value'] == null) {

                if ($values['value'] != null) {
                    $fieldEspecific  = new FieldUser($values);
                    $fieldEspecific -> save();
                }
            }else{

                $fielduser = FieldUser::find($values['id_defect']);
                $fielduser ->fill($values);
                $fielduser->save();

            };

        }

       return redirect()->route('Admin.FieldUser.index');
    }
    public function data(Request $request)
    {
        # code...
    }
}
