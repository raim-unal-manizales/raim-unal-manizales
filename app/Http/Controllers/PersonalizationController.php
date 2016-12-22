<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Entities\Personalization;

class PersonalizationController extends Controller
{
    public function create()
    {
        return view('public.personalization');
    }

    public function store(Request $request)
    {

    	$personalization = new Personalization($request->all());
    	$personalization->save();

    }
}
