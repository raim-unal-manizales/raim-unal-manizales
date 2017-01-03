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
use App\Entities\Rol;
use Illuminate\Support\Facades\Auth;

class EstudianteController extends Controller
{
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
        $aplications = Aplication::all();

        return view('estudiante.aplications')->with('aplications', $aplications);
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

            $user = User::find($id);
            $user_rol = Rol::find($user->id_rol);
        #--------------------------------------------------------------------------------------
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

                        $types_fields= TypeField::where('id',$fieldTables->id_type_field)->get();
                        $fieldTables-> types_fields = $types_fields;

                        $options= Option::where('id_field_table',$id_fiel_tables)->lists('name', 'id');
                        $fieldTables-> options = $options;



                        if (is_null($fielduser)) {

                            $fieldTables-> value = null;
                            $fieldTables-> id_defect = null;
                        }else{

                            $types_fields_select= TypeField::select('html')->where('id',$fieldTables->id_type_field)->lists('html')->all();


                            if ($types_fields_select[0] == "select") {

                                $option= Option::select('name')->where('id',$fielduser->value)->lists('name')->all();

                                $fieldTables-> value = $option[0];

                            }else{

                                $fieldTables-> value = $fielduser->value;
                            }


                            $fieldTables-> id_defect = $fielduser->id;
                        };



                    });

                $tables-> fields_tables = $fieldTables->all();
                });

            $aplications -> tablas = $tables;
             });
            #--------------------------------------------------------------------------------------

            $fielduser = FieldUser::find($id);

            return view('estudiante.show')
                    ->with('aplications', $aplications)
                    ->with('user',$user)
                    ->with('fielduser',$fielduser)
                    ->with('user_rol', $user_rol);

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
            $user = User::find($id);
            $user_rol = Rol::find($user->id_rol);
            $roles = Rol::orderBy('name','ASC')->lists('name', 'id');

            return view('estudiante.edit')
                        ->with('user', $user)
                        ->with('user_rol', $user_rol)
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
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $user ->fill($request->all());
        $user->save();

        $resultado = $this->session_all($id,'Update');


        return redirect()->route('Estudiante.EditApps', $id);


    }

    public function editApps($id)
    {

       if ($id == Auth::user()->id) {

        #--------------------------------------------------------------------------------------
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
        #--------------------------------------------------------------------------------------

            $fielduser = FieldUser::find($id);

            return view('estudiante.editAll')
                    ->with('aplications', $aplications)
                    ->with('user_id',$id)
                    ->with('fielduser',$fielduser);
        }else{
             return view('estudiante.index');
        }
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

      $resultado = $this->session_all($user,'Update');
      return redirect()->route('Estudiante.index');
    }



}
