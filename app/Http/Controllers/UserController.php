<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Entities\User;
use App\Entities\Rol;
use narutimateum\Toastr\Facades\Toastr;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id','ASC')->paginate(10);

            $users->each(function ($users)
            {
                $users -> rol_name = Rol::find($users->id_rol)->name;
            });

        return view('admin.user.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rol = Rol::orderBy('name','ASC')->lists('name', 'id');



        return view('admin.user.create')->with('rol', $rol);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user  = new User($request->all());
        $user -> password = bcrypt($request->password);
        $user -> encript = encrypt($request->password);

        $user -> save();
        if ($user->id_rol == 1) {

        //Toastr::success( $message = "Creador Correctamente", $title = "Creacion de usuario : ", $options = []);
        Toastr::add('success', 'Creado Correctamente', 'Creacion de usuario : ',$options = []);
           return redirect()->route('Admin.User.index');
        }else {
            return redirect()->route('Admin.FieldUser.create');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $user_rol = Rol::find($user->id_rol);
        return view('admin.user.show')
                        ->with('user', $user)
                        ->with('user_rol', $user_rol);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $user_rol = Rol::find($user->id_rol);
        $roles = Rol::orderBy('name','ASC')->lists('name', 'id');

        return view('admin.user.edit')
                    ->with('user', $user)
                    ->with('user_rol', $user_rol)
                    ->with('roles', $roles);
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
        $user = User::find($id);

        $user ->fill($request->all());
        $user->save();


        return redirect()->route('Admin.User.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user-> delete();

        return redirect()->route('Admin.User.index');
    }
    public function delete($id)
    {

        $user = User::find($id);
        $user_rol = Rol::find($user->id_rol);
        return view('admin.user.destroy')
                    ->with('user', $user)
                    ->with('user_rol', $user_rol);

    }


}
