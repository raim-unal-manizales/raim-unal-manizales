<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\AplicationRepository;


class AplicationController extends Controller
{
    public $aplicationRepository;

    public function __construct(AplicationRepository $aplicationRepository)
    {
      $this->aplicationRepository = $aplicationRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aplications = $this->aplicationRepository->orderBy();
        return view('admin.aplication.index')->with('aplications',$aplications);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.aplication.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $aplication = $this->aplicationRepository->store($request->all());
      $aplications = $this->aplicationRepository->orderBy();

      flash( "Se ha creado la Aplicación de forma exitosa" , "success");
      return view('admin.aplication.index')->with('aplications',$aplications);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aplication = $this->aplicationRepository->find($id);
        return view('admin.aplication.show')->with('aplication', $aplication);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aplication = $this->aplicationRepository->find($id);
        return view('admin.aplication.edit')->with('aplication', $aplication);
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
        $aplication = $this->aplicationRepository->updateAplication($request->all(),$id);

        flash( "Se ha editado la Aplicación de forma exitosa" , "success");
        return redirect()->route('Admin.Aplication.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aplication = $this->aplicationRepository->destroy($id);

        flash( "Se ha eliminado la Aplicación de forma exitosa" , "warning");
        return redirect()->route('Admin.Aplication.index');
    }
    public function delete($id)
    {

        $aplication = $this->aplicationRepository->find($id);
        return view('admin.aplication.destroy')->with('aplication', $aplication);

    }
}
