<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Table;
use App\Aplication;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tables = Table::orderBy('id','ASC')->paginate(10);
            $tables->each(function ($tables)
            {      
                $tables -> app_name = Aplication::find($tables->id_app)->name;           
            });
             
        return view('admin.Table.index')->with('tables', $tables);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aplication = Aplication::orderBy('name','ASC')->lists('name', 'id');

        return view('admin.table.create')->with('aplication', $aplication);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $table  = new Table($request->all());
        $table -> save();
        
        return redirect()->route('Admin.Table.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $table = Table::find($id);
        $table_app = Aplication::find($table->id_app);
        return view('admin.table.show')
                    ->with('table', $table)
                    ->with('table_app', $table_app);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $table = Table::find($id);
        $table_app = Aplication::find($table->id_app);
        $aplications = Aplication::orderBy('name','ASC')->lists('name', 'id');

        return view('admin.table.edit')
                    ->with('table', $table)
                    ->with('table_app', $table_app)
                    ->with('aplications', $aplications);
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
        $table = Table::find($id);
        
        $table ->fill($request->all());
        $table->save(); 

        
        return redirect()->route('Admin.Table.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $table = Table::find($id);
        $table-> delete();

        return redirect()->route('Admin.Table.index');
    }
    public function delete($id)
    {

        $table = Table::find($id);
        $table_app = Aplication::find($table->id_app);
        return view('admin.table.destroy')
                    ->with('table', $table)
                    ->with('table_app', $table_app);
        
    }
}
