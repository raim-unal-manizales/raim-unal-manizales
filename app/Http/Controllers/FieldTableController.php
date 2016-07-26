<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\FieldTable;
use App\Table;
use App\TypeField;

class FieldTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fieldTables = FieldTable::orderBy('id','ASC')->paginate(10);
            $fieldTables->each(function ($fieldTables)
            {      
                $fieldTables -> table_name = Table::find($fieldTables->id_table)->name; 
                $fieldTables -> typeField_name = TypeField::find($fieldTables->id_type_field)->name;         
            });
             
        return view('admin.fieldTable.index')
                    ->with('fieldTables', $fieldTables);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $table = Table::orderBy('name','ASC')->lists('name', 'id');
        $typeField = TypeField::orderBy('name','ASC')->lists('name', 'id');


        return view('admin.fieldTable.create')
                    ->with('table', $table)
                    ->with('typeField', $typeField);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fieldTable  = new FieldTable($request->all());
        $fieldTable -> save();
        
        return redirect()->route('Admin.FieldTable.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fieldTable = FieldTable::find($id);
        $table  = Table::find($fieldTable->id_table); 
        $typeField  = TypeField::find($fieldTable->id_type_field);
        

        return view('admin.fieldTable.show')
                    ->with('fieldTable', $fieldTable)
                    ->with('table', $table)
                    ->with('typeField', $typeField);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fieldTable = FieldTable::find($id);

        $table = Table::orderBy('name','ASC')->lists('name', 'id');
        $typeField = TypeField::orderBy('name','ASC')->lists('name', 'id');
        
        $fieldTable_table = Table::find($fieldTable->id_table);
        $fieldTable_typeField = TypeField::find($fieldTable->id_type_field);

        return view('admin.FieldTable.edit')
                    ->with('fieldTable', $fieldTable)
                    ->with('table', $table)
                    ->with('typeField', $typeField)
                    ->with('fieldTable_table', $fieldTable_table)
                    ->with('fieldTable_typeField', $fieldTable_typeField);
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
        $fieldTable = FieldTable::find($id);
        
        $fieldTable ->fill($request->all());
        $fieldTable->save(); 

        
        return redirect()->route('Admin.FieldTable.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fieldTable = FieldTable::find($id);
        $fieldTable-> delete();

        return redirect()->route('Admin.FieldTable.index');
    }
    public function delete($id)
    {

        $fieldTable = FieldTable::find($id);

        $table  = Table::find($fieldTable->id_table); 
        $typeField  = TypeField::find($fieldTable->id_type_field);
        return view('admin.fieldTable.destroy')
                    ->with('fieldTable', $fieldTable)
                    ->with('table', $table)
                    ->with('typeField', $typeField);
        
    }
}
