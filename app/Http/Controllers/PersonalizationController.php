<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\PersonalizationRepository;

class PersonalizationController extends Controller
{
  public $personalizationRepository;

  public function __construct(PersonalizationRepository $personalizationRepository)
  {
    $this->personalizationRepository = $personalizationRepository;
  }

  public function create()
  {
    return view('public.personalization');
  }

  public function store(Request $request)
  {
    $personalization = $this->personalizationRepository->store($request->all());
  }
}
