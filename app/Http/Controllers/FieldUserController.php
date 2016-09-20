<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\FieldUser;
use App\Aplication;
use App\Table;
use App\TypeField;
use App\FieldTable;
use App\Option;
use App\User;

class FieldUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        // consulto todas las aplicaciones, tablas, usuarios en un array   
        $aplications = Aplication::all()->lists('name', 'id');
        $tables = Table::all()->lists('name', 'id');
        $users = User::all()->lists('name', 'id');



        // consulto tipos de campo a mostrar 
           
        $fieldusers = FieldUser::orderBy('id', 'ASC')->paginate(10);

        $fieldusers->each(function ($fieldusers){

            $user = User::where('id',$fieldusers->id_user)->get()->first();
            $fieldusers -> user_name = $user->user_name;

            $fieldtable = FieldTable::where('id',$fieldusers->id_field_table)->get()->first();
            $fieldusers -> fieldtable_name = $fieldtable->name;

            $table = Table::where('id',$fieldtable->id_table)->get()->first();
            $fieldusers -> table_name = $table->name;

            $type_field =  TypeField::where('id',$fieldtable->id_type_field)->get()->first();
            $fieldusers -> type_field_name = $type_field->name;

            if ($type_field->html == "select") {
                
                $option = Option::where('id',$fieldusers->id_option)->get()->first();
                $fieldusers -> option_name = $option->name;
            }

        });

        return view('admin.fieldUser.index')
                    ->with('fieldusers',$fieldusers)
                    ->with('aplications',$aplications)
                    ->with('tables',$tables)
                    ->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$aplications = Aplication::all();

        $aplications = Aplication::where('rquiered_information','True')->get();
       
        $aplications->each(function ($aplications)
        {  
            $tables = Table::where('id_app',$aplications->id)->get();            
            
            $tables->each(function ($tables)
            {
                $fieldTables = FieldTable::where('id_table',$tables->id)->get();
                
                $fieldTables->each(function ($fieldTables)
                {
                    $id_fiel_tables = $fieldTables->id;

                    $types_fields= TypeField::where('id',$fieldTables->id_type_field)->get();
                    $fieldTables-> types_fields = $types_fields;
                  
                    $options= Option::where('id_field_table',$id_fiel_tables)->lists('name', 'id');
                    $fieldTables-> options = $options; 

                    //dd($fieldTables->options);
                               
                }); 
            
            $tables-> fields_tables = $fieldTables->all();   
            });
        
        $aplications -> tablas = $tables; 
         });  

        $users = User::all()->lists('name', 'id');


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
         
         //dd($datos);

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
            
            $fieldEspecific  = new FieldUser($values);

             $fieldEspecific -> save(); 



         }
         
         return redirect()->route('Public.index');
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

            $user = User::where('id',$fielduser->id_user)->get()->first();
            $fielduser -> user_name = $user->user_name;

            $fieldtable = FieldTable::where('id',$fielduser->id_field_table)->get()->first();
            $fielduser -> fieldtable_name = $fieldtable->name;

            $table = Table::where('id',$fieldtable->id_table)->get()->first();
            $fielduser -> table_name = $table->name;

            $type_field =  TypeField::where('id',$fieldtable->id_type_field)->get()->first();
            $fielduser -> type_field_name = $type_field->name;

            if ($type_field->html == "select") {
                
                $option = Option::where('id',$fielduser->id_option)->get()->first();
                $fielduser -> option_name = $option->html;
            }
   
        return view('admin.fieldUser.show')
                    ->with('fielduser', $fielduser);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fielduser = FieldUser::find($id);

            $user = User::where('id',$fielduser->id_user)->get()->first();
            $fielduser -> user_name = $user->user_name;

            $fieldtable = FieldTable::where('id',$fielduser->id_field_table)->get()->first();
            $fielduser -> fieldtable_name = $fieldtable->name;

            $table = Table::where('id',$fieldtable->id_table)->get()->first();
            $fielduser -> table_name = $table->name;

            $type_field =  TypeField::where('id',$fieldtable->id_type_field)->get()->first();
            $fielduser -> type_field_name = $type_field->html;

            if ($type_field->html == "select") {
                $options= Option::where('id_field_table',$fieldtable->id)->lists('name', 'id');
                $fielduser-> options = $options; 
            }

   
        return view('admin.fieldUser.edit')
                    ->with('fielduser', $fielduser); 
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
        $fielduser = FieldUser::find($id);
        $fielduser ->fill($request->all());
        $select = $request->info;   
        if ($select == "1") {
            $fielduser->id_option = $fielduser->value;
        }
            
        $fielduser->save(); 

        
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
        $fielduser = FieldUser::find($id);
        $fielduser-> delete();

        return redirect()->route('Admin.FieldUser.index');
    }

    public function delete($id)
    {
        $fielduser = FieldUser::find($id);

            $user = User::where('id',$fielduser->id_user)->get()->first();
            $fielduser -> user_name = $user->user_name;

            $fieldtable = FieldTable::where('id',$fielduser->id_field_table)->get()->first();
            $fielduser -> fieldtable_name = $fieldtable->name;

            $table = Table::where('id',$fieldtable->id_table)->get()->first();
            $fielduser -> table_name = $table->name;

            $type_field =  TypeField::where('id',$fieldtable->id_type_field)->get()->first();
            $fielduser -> type_field_name = $type_field->html;

            if ($type_field->html == "select") {
              
                $option = Option::where('id',$fielduser->id_option)->get()->first();
                $fielduser -> option_name = $option->name;
            }
   
        return view('admin.fieldUser.destroy')
                    ->with('fielduser', $fielduser);       
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
