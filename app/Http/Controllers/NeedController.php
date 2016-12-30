<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\NeedRepository;

class NeedController extends Controller
{
  public $needRepository;

  public function __construct(NeedRepository $needRepository)
  {
    $this->needRepository = $needRepository;
  }
    public function create()
    {
        return view('public.need');
    }

    public function store(Request $request)
    {
    	$need = $this->needRepository->store($request->all());
    }
}
