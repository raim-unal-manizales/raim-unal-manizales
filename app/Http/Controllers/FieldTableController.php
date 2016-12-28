<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\TableRepository;
use App\Repositories\TypeFieldRepository;
use App\Repositories\FieldTableRepository;

class FieldTableController extends Controller
{
    public $tableRepository;
    public $typeFieldRepository;
    public $fieldTableRepository;

    public function __construct(
        TableRepository $tableRepository,
        TypeFieldRepository $typeFieldRepository,
        FieldTableRepository $fieldTableRepository
    )
    {
      $this->tableRepository = $tableRepository;
      $this->typeFieldRepository = $typeFieldRepository;
      $this->fieldTableRepository = $fieldTableRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fieldTables = $this->fieldTableRepository->orderBy();
        return view('admin.fieldTable.index')->with('fieldTables', $fieldTables);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $table = $this->tableRepository->list();
        $typeField = $this->typeFieldRepository->list();
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
        $fieldTable  = $this->fieldTableRepository->store($request->all());
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
        $fieldTable = $this->fieldTableRepository->find($id);
        return view('admin.fieldTable.show')->with('fieldTable', $fieldTable);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fieldTable = $this->fieldTableRepository->find($id);
        $table = $this->tableRepository->list();
        $typeField = $this->typeFieldRepository->list();

        return view('admin.FieldTable.edit')
                    ->with('fieldTable', $fieldTable)
                    ->with('table', $table)
                    ->with('typeField', $typeField);
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
        $fieldTable = $this->fieldTableRepository->update($request->all(), $id);
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
        $fieldTable = $this->fieldTableRepository->destroy($id);
        return redirect()->route('Admin.FieldTable.index');
    }

    public function delete($id)
    {
        $fieldTable = $this->fieldTableRepository->find($id);
        return view('admin.fieldTable.destroy')->with('fieldTable', $fieldTable);
    }
}
