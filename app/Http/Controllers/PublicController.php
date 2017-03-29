<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\AplicationRepository;

class PublicController extends Controller
{
  public $aplicationRepository;

  public function __construct(AplicationRepository $aplicationRepository)
  {
    $this->aplicationRepository = $aplicationRepository;
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('public.index');
    }

    public function IndexAplication()
    {
        $aplications = $this->aplicationRepository->orderBy();
        return view('public.aplications')->with('aplications', $aplications);
    }

    public function searchOa($id = null)
    {
        if($id != null){
          $aplications =  $this->Consult_Aplications($id);
          return view('public.searchOa')
                ->with('aplications', $aplications)
                ->with('user_id',$id);
        }
        return view('public.searchOa')
            ->with('aplications', null);

    }

    public function objectives()
    {
        return view('public.objectives');
    }

    public function advisers()
    {
        return view('public.advisers');
    }

    public function reporting()
    {
        return view('public.reporting');
    }

    public function publications()
    {
        return view('public.publications');
    }
    //CONTROALDOR PARA DOCUMENTOS DE APOYO
    public function supportdocs()
    {
        return view('public.supportdocs');
    }

    public function others()
    {
        return view('public.others');
    }
}
