<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\OptionFieldRepository;
use App\Repositories\FieldTableRepository;

class OptionController extends Controller
{
    public $optionFieldRepository;
    public $fieldTableRepository;

    public function __construct(
      OptionFieldRepository $optionFieldRepository,
      FieldTableRepository $fieldTableRepository
    )
    {
      $this->optionFieldRepository = $optionFieldRepository;
      $this->fieldTableRepository = $fieldTableRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $options = $this->optionFieldRepository->orderBy();
        return view('admin.option.index')->with('options', $options);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $fieldTable = $this->fieldTableRepository->listSelect();
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
      $option =$this->optionFieldRepository->store($request->all());

      flash( "Se ha creado la opción de forma exitosa" , "success");
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
      $option = $this->optionFieldRepository->find($id);
      return view('admin.option.show')->with('option', $option);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $option = $this->optionFieldRepository->find($id);
        $fieldTable = $this->fieldTableRepository->lists();

        return view('admin.option.edit')
                    ->with('option', $option)
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
        $option = $this->optionFieldRepository->update($request->all(),$id);

        flash( "Se ha editado la opción de forma exitosa" , "success");
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
        $option = $this->optionFieldRepository->destroy($id);

        flash( "Se ha eliminado la opción de forma exitosa" , "warning");
        return redirect()->route('Admin.Option.index');
    }

    public function delete($id)
    {
      $option = $this->optionFieldRepository->find($id);
      return view('admin.option.destroy')->with('option', $option);
    }
}
