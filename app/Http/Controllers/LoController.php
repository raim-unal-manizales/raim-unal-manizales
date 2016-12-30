<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\CalificationLoRepository;
use App\Repositories\SearchLoRepository;
use App\Repositories\VisitedLoRepository;

class LoController extends Controller
{
  public $calificationLoRepository;
  public $searchLoRepository;
  public $visitedLoRepository;

  public function __construct(
    CalificationLoRepository $calificationLoRepository,
    SearchLoRepository $searchLoRepository,
    VisitedLoRepository $visitedLoRepository
  )
  {
    $this->calificationLoRepository = $calificationLoRepository;
    $this->searchLoRepository = $searchLoRepository;
    $this->visitedLoRepository = $visitedLoRepository;
  }

  public function save_calification(Request $request)
    {
        $save_calification = $this->calificationLoRepository->store($request->all());
        return response()->Json($save_calification);
    }

    public function save_visited(Request $request)
    {
        $user_id = currentUser()->id;
        $data = $request->all();
        $rep_id = $data['rep_id'];
        $lo_id = $data['lo_id'];

        $save_visited= $this->visitedLoRepository
                            ->store([
                                'user_id' => $user_id,
                                'repository_id' => $rep_id,
                                'object_id' => $lo_id
                              ]);

        return response()->Json($save_visited);
    }

    public function save_search(Request $request)
    {
        $user_id = currentUser()->id;
        $data = $request->all();
        $content = trim($data['buscar']);
        $save_search = $this->searchLoRepository
                            ->store([
                              'user_id' => $user_id,
                              'search_string' => $content
                            ]);

        return response()->Json($save_search);

    }
}
