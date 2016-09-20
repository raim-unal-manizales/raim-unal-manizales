<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Aplication;


class AplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $aplications = Aplication::orderBy('id', 'ASC')->paginate(10);

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

        
        $aplication = new Aplication($request->all());

          if ($request -> file('logo')) {
                $file = $request-> file('logo');
                $name = '/images/logo_aplication/logo_'.time().'.'.$file->getClientOriginalExtension();
                $path = public_path().'/images/logo_aplication/';
                $file->move($path, $name);
                 $aplication -> logo = $name;
            }
           
       //dd($aplication);
        $aplication ->save();

          //return redirect()->route('Admin.Aplication.index');
         $aplications = Aplication::orderBy('id', 'ASC')->paginate(10);
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
        $aplication = Aplication::find($id);
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
        $aplication = Aplication::find($id);
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

        $aplication_ant = Aplication::find($id);
        $name =$aplication_ant->logo;
         
        $aplication = Aplication::find($id);
        $aplication-> fill($request->all());

        if ($request -> file('logo')) {
                $file = $request-> file('logo');
                $name = '/images/logo_aplication/logo_'.time().'.'.$file->getClientOriginalExtension();
                $path = public_path().'/images/logo_aplication/';
                $file->move($path, $name);             
        }

        $aplication -> logo = $name;
        $aplication->save(); 

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
        $aplication = Aplication::find($id);
        $aplication-> delete();
        return redirect()->route('Admin.Aplication.index');
    }
    public function delete($id)
    {

        $aplication = Aplication::find($id);
        return view('admin.aplication.destroy')->with('aplication', $aplication);
        
    }
}
