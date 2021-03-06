<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\TableRequest;
use App\Http\Controllers\Controller;
use App\Repositories\TableRepository;
use App\Repositories\AplicationRepository;

class TableController extends Controller
{
    public $tableRepository;
    public $aplicationRepository;

    public function __construct(
      TableRepository $tableRepository,
      AplicationRepository $aplicationRepository
    )
    {
      $this->tableRepository = $tableRepository;
      $this->aplicationRepository = $aplicationRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tables = $this->tableRepository->OrderId();
        return view('admin.Table.index')->with('tables', $tables);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aplication = $this->aplicationRepository->lists();
        return view('admin.Table.create')->with('aplication', $aplication);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TableRequest $request)
    {
        $table  = $this->tableRepository->store($request->all());

        flash( "Se ha creado la tabla de forma exitosa" , "success");
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
        $table = $this->tableRepository->find($id);
        return view('admin.Table.show')->with('table', $table);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $table = $this->tableRepository->find($id);
        $aplications = $this->aplicationRepository->lists();

        return view('admin.Table.edit')
                    ->with('table', $table)
                    ->with('aplications', $aplications);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TableRequest $request, $id)
    {
        $table = $this->tableRepository->update($request->all(), $id);

        flash( "Se ha editado la tabla de forma exitosa" , "success");
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
        $table = $this->tableRepository->destroy($id);

        flash( "Se ha eliminado la tabla de forma exitosa" , "warning");
        return redirect()->route('Admin.Table.index');
    }
    public function delete($id)
    {
        $table = $this->tableRepository->find($id);
        return view('admin.Table.destroy')->with('table', $table);
    }
}
