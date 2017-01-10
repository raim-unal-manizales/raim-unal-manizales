<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\TypeFieldRepository;

class TypeFieldController extends Controller
{
    public $typeFieldRepository;

    public function __construct(TypeFieldRepository $typeFieldRepository)
    {
      $this->typeFieldRepository = $typeFieldRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typeFields = $this->typeFieldRepository->orderBy();
        return view('admin.typeField.index')->with('typeFields',$typeFields);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.typeField.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $typeField  =  $this->typeFieldRepository->store($request->all());

        flash( "Se ha creado el tipo de campo de forma exitosa" , "success");
        return redirect()->route('Admin.TypeField.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $typeField = $this->typeFieldRepository->find($id);
        return view('admin.typeField.show')->with('typeField', $typeField);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $typeField =  $this->typeFieldRepository->find($id);
        return view('admin.typeField.edit')->with('typeField', $typeField);
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
        $typeField = $this->typeFieldRepository->update($request->all(), $id);

        flash( "Se ha editado el tipo de campo de forma exitosa" , "success");
        return redirect()->route('Admin.TypeField.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $typeField = $this->typeFieldRepository->destroy($id);

        flash( "Se ha eliminado el tipo de campo de forma exitosa" , "warning");
        return redirect()->route('Admin.TypeField.index');
    }
    public function delete($id)
    {
        $typeField = $this->typeFieldRepository->find($id);
        return view('admin.typeField.destroy')->with('typeField', $typeField);

    }
}
