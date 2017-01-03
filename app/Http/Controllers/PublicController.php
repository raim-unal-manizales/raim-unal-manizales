<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Entities\FieldUser;
use App\Entities\Aplication;
use App\Entities\Table;
use App\Entities\TypeField;
use App\Entities\FieldTable;
use App\Entities\Option;
use App\Entities\User;
use App\Entities\Rol;

use App\Repositories\AplicationRepository;

class PublicController extends Controller
{
  public $aplicationRepository;

  public function __construct(
    AplicationRepository $aplicationRepository
  )
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
            $aplications = Aplication::where('rquiered_information','True')->get();
            $aplications -> user_id = $id;

            foreach ($aplications as $key => $value) {
                $value -> user_id = $id;
            }
            $aplications->each(function ($aplications)
            {
                $tables = Table::where('id_app',$aplications->id)->get();
                foreach ($tables as $key => $value) {
                    $value -> user_id = $aplications->user_id;
                }

                $tables->each(function ($tables)
                {
                    $fieldTables = FieldTable::where('id_table',$tables->id)->get();
                    foreach ($fieldTables as $key => $value) {
                        $value -> user_id = $tables->user_id;
                    }

                    $fieldTables->each(function ($fieldTables)
                    {
                        $id_fiel_tables = $fieldTables->id;
                        $fielduser = FieldUser::where('id_user',$fieldTables->user_id)->where('id_field_table',$id_fiel_tables)->get()->first();

                        $types_fields= TypeField::where('id',$fieldTables->id_type_field)->get();
                        $fieldTables-> types_fields = $types_fields;

                        $options= Option::where('id_field_table',$id_fiel_tables)->lists('name', 'id');
                        $fieldTables-> options = $options;

                        if (is_null($fielduser)) {

                            $fieldTables-> value = null;
                            $fieldTables-> id_defect = null;
                        }else{

                            $types_fields_select= TypeField::select('html')->where('id',$fieldTables->id_type_field)->lists('html')->all();

                            if ($types_fields_select[0] == "select") {

                                $option= Option::select('name')->where('id',$fielduser->value)->lists('name')->all();

                                $fieldTables-> value = $option[0];

                            }else{

                                $fieldTables-> value = $fielduser->value;
                            }

                            $fieldTables-> id_defect = $fielduser->id;
                        };
                    });
                    $tables-> fields_tables = $fieldTables->all();
                });
                $aplications -> tablas = $tables;
            });
            #--------------------------------------------------------------------------------------

            $fielduser = FieldUser::find($id);

            return view('public.searchOa')
                ->with('aplications', $aplications)
                ->with('user_id',$id)
                ->with('fielduser',$fielduser);
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

    public function others()
    {
        return view('public.others');
    }
}
