<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Need;

class NeedController extends Controller
{
    public function create()
    {
        return view('public.need');
    }

    public function store(Request $request)
    {
    	$need = new Need($request->all());
    	$need-> save();
    }
}
