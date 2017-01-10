<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\RolRepository;

class RolController extends Controller
{
  public $rolRepository;

  public function __construct(RolRepository $rolRepository)
  {
    $this->rolRepository = $rolRepository;
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = $this->rolRepository->orderBy();
        return view('admin.rol.index')->with('roles',$roles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rol.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rol = $this->rolRepository->store($request->all());

        flash( "Se ha creado el rol ".$rol->name." de forma exitosa" , "success");
        return redirect()->route('Admin.Rol.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rol = $this->rolRepository->find($id);
        return view('admin.rol.show')->with('rol', $rol);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rol = $this->rolRepository->find($id);
        return view('admin.rol.edit')->with('rol', $rol);
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
        $rol = $this->rolRepository->update($request->all(), $id);

        flash( "Se ha editado el rol de forma exitosa" , "success");
        return redirect()->route('Admin.Rol.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rol = $this->rolRepository->destroy($id);

        flash( "Se ha eliminado el rol de forma exitosa" , "warning");
        return redirect()->route('Admin.Rol.index');
    }

    public function delete($id)
    {
        $rol = $this->rolRepository->find($id);
        return view('admin.rol.destroy')->with('rol', $rol);
    }

}
