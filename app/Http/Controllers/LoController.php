<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Calification_lo;
use App\Search_lo;
use App\Visited_lo;

class LoController extends Controller
{
    
    public function save_calification(Request $request)
    {
       
        $save_calification  = new Calification_lo($request->all());
        $save_calification -> save();

    }
    
    public function save_visited(Request $request)
    {
        $save_visited  = new Visited_lo($request->all());
        $save_visited -> save();

    }

    public function save_search(Request $request)
    {
        $save_search  = new Search_lo($request->all());
        $save_search -> save();

    }
}
