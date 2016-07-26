<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Option;
use App\FieldTable;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $options = Option::orderBy('id','ASC')->paginate(10);
            $options->each(function ($options)
            {      
                $options -> fieldTable_name = FieldTable::find($options->id_field_table)->name;           
            });
             
        return view('admin.option.index')->with('options', $options);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fieldTable = FieldTable::orderBy('name','ASC')->lists('name', 'id');

        return view('admin.option.create')->with('fieldTable', $fieldTable);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $option  = new Option($request->all());
        $option -> save();
        
        return redirect()->route('Admin.Option.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $option = Option::find($id);
        $option_fieldTable = FieldTable::find($option->id_field_table);
        
        return view('admin.option.show')
                    ->with('option', $option)
                    ->with('option_fieldTable', $option_fieldTable);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $option = Option::find($id);
        $option_fieldTable = FieldTable::find($option->id_field_table);
        $fieldTable = FieldTable::orderBy('name','ASC')->lists('name', 'id');

        return view('admin.option.edit')
                    ->with('option', $option)
                    ->with('option_fieldTable', $option_fieldTable)
                    ->with('fieldTable', $fieldTable);
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
        $option = Option::find($id);
        
        $option ->fill($request->all());
        $option->save(); 

        
        return redirect()->route('Admin.Option.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $option = Option::find($id);
        $option-> delete();

        return redirect()->route('Admin.Option.index');
    }
    public function delete($id)
    {

        $option = Option::find($id);
        $option_fieldTable = FieldTable::find($option->id_field_table);
        return view('admin.option.destroy')
                    ->with('option', $option)
                    ->with('option_fieldTable', $option_fieldTable);
        
    }
}
