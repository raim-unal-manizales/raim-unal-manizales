<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Entities\Calification_lo;
use App\Entities\Search_lo;
use App\Entities\Visited_lo;

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
        //$user_id = auth()->user();
        //dd($request->all());
        //$save_search  = new Search_lo($request->all());
        //$save_search -> save();
        return response()->Json($user_id);

    }
}
