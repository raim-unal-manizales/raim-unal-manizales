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
        $user_id = currentUser()->id;
        $data = $request->all();
        $rep_id = $data['rep_id'];
        $lo_id = $data['lo_id'];
        $save_visited  = new Visited_lo([ 'user_id' => $user_id,
            'repository_id' => $rep_id, 'object_id' => $lo_id, ]);
        $save_visited -> save();
        return response()->Json($save_visited);
    }

    public function save_search(Request $request)
    {
        $user_id = currentUser()->id;
        $data = $request->all();
        $content = trim($data['buscar']);
        $save_search  = new Search_lo([ 'user_id' => $user_id, 'search_string' => $content]);
        $save_search -> save();
        return response()->Json($save_search);

    }
}
