<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Entities\FieldUser;
use App\Entities\Aplication;
use App\Entities\Table;
use App\Entities\TypeField;
use App\Entities\FieldTable;
use App\Entities\Option;
use App\Entities\User;
use App\Entities\Need;
use App\Entities\LearningStyle;
use App\Entities\Personalization;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function session_all($id,$tipo_accion){

        $information_user = $this->Consult_User_Information($id);
        $information_Need = $this->consult_Need($id);
        $information_learningStyle = $this->consult_learningStyle($id);
        $information_personalization = $this->consult_personalization($id);

        //dd($information_user);

        $cantidad_app = count($information_user->all());

        $solucion = array();
        $data_user = null;

        foreach ($information_user as $information) {
            dd($information);
            $url_base = $information->url;
            $name = $information->name;
            $data= $information->all();
            $url = $this->Direccionamiento($url_base,$tipo_accion);

            if ($information->state == "Activo") {

                $data_user = $this->make_content($information,$information_Need,$information_learningStyle,$information_personalization);

                if ($this->url_exists($url)) {
                    $exist = $this->EnvioDatos($data_user,$url);
                }else{
                    $exist = "LA URL ".$url." NO EXISTE";
                }
            }else{

                $exist = "Aplication Inactiva";
            }

            array_push($solucion, [$name => $exist]);
            }

        $final  = array(
                'resultado' => $solucion ,
                'data'      => $data_user
            );

        return $final;
   }

   protected function make_content($information_user,$information_Need,
                                    $information_learningStyle,$information_personalization)
  {

        $data = array();

        if ($information_user->rquiered_personalization == 'True') {
            $data = array_merge($data, array('personalization' => $information_personalization));
        }
        if ($information_user->rquiered_NEDD == 'True') {

           $data = array_merge($data, array('need' => $information_Need));
        }
        if ($information_user->rquiered_learningStyle == 'True') {
           $data = array_merge($data, array('learningStyle' => $information_learningStyle));
        }
        if ($information_user->rquiered_information == 'True'){
            $data = array_merge($data, array('aplication' => $information_user->toArray()));
        }

        return $data;

   }

   protected function consult_personalization($id){
        $personalization = [];
        ///$personalization = Personalization::where('user_id',$id)->get()->toArray();
        return $personalization;

   }

   protected function consult_learningStyle($id){

        $learningStyle = learningStyle::where('user_id',$id)->get()->toArray();
        return $learningStyle;

   }

   protected function consult_Need($id){

        $need = Need::where('user_id',$id)->get()->toArray();
        return $need;

   }

    public function Consult_Aplications($id)
    {
    	#--------------------------------------------------------------------------------------
            //$aplications = Aplication::all();
            $aplications = Aplication::where('state','Activo')->get();
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
            #
           return $aplications;
    }


    protected function Consult_User_Information($id)
    {
        #--------------------------------------------------------------------------------------
            $aplications = Aplication::all();
            $aplications -> user_id = $id;

            foreach ($aplications as $key => $value) {
                $value -> user_id = $id;
            }
            $aplications->each(function ($aplications)
            {

                $tables = Table::select('id','name','id_app')->where('id_app',$aplications->id)->get();

                foreach ($tables as $key => $value) {
                 $value -> user_id = $aplications->user_id;

                }

                $tables->each(function ($tables)
                {

                    $fieldTables = FieldTable::select('id','id_table','id_type_field','name','name_db')->where('id_table',$tables->id)->get();

                    foreach ($fieldTables as $key => $value) {
                        $value -> user_id = $tables->user_id;

                    }

                    $fieldTables->each(function ($fieldTables)
                    {

                        $id_fiel_tables = $fieldTables->id;

                        $fielduser = FieldUser::where('id_user',$fieldTables->user_id)->where('id_field_table',$id_fiel_tables)->get()->first();

                        $types_fields= TypeField::where('id',$fieldTables->id_type_field)->get();
                        //$fieldTables-> types_fields = $types_fields;

                        $options= Option::where('id_field_table',$id_fiel_tables)->lists('id', 'id_option_app');
                        //$fieldTables-> options = $options;



                        if (is_null($fielduser)) {

                            $fieldTables-> value = null;
                            $fieldTables-> id_defect = null;
                            $fieldTables-> id_option_app = null;
                        }else{

                            $types_fields_select= TypeField::select('html')->where('id',$fieldTables->id_type_field)->lists('html')->all();


                            if ($types_fields_select[0] == "select") {

                                $option= Option::select('name')->where('id',$fielduser->value)->lists('name')->all();
                                $id_option_app= Option::select('id_option_app')->where('id',$fielduser->value)->lists('id_option_app')->all();

                                $fieldTables-> value = $option[0];
                                $fieldTables-> id_option_app = $id_option_app[0];

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
            #

        return $aplications;

    }



   protected function Direccionamiento($url,$tipo_accion){

    if ($tipo_accion == "Create") {
        return $url."raim/session_create.php";
    }elseif ($tipo_accion == "Update") {
        return $url."raim/session_update.php";
    }elseif ($tipo_accion == "Delete") {
        return $url."raim/session_delete.php";
    }else{
        return "false";
    }

   }
   protected function DireccionamientoRoute($url,$tipo_accion){

    if ($tipo_accion == "Create") {
        return $url."raim/session_create";
    }elseif ($tipo_accion == "Update") {
        return $url."raim/session_update";
    }elseif ($tipo_accion == "Delete") {
        return $url."raim/session_delete";
    }else{
        return "false";
    }

   }
    protected function EnvioDatos($data,$url)
    {

        $cliente = new \GuzzleHttp\Client();


        $respuesta = $cliente->request('POST', $url,[ 'form_params' => [
                'data' => json_encode($data)
                ]
            ]);


        return $respuesta->getReasonPhrase();
        //return $data;

    }

    protected function url_exists( $url = NULL ) {

        if( empty( $url ) ){
            return false;
        }

        $ch = curl_init( $url );

        //Establecer un tiempo de espera
        curl_setopt( $ch, CURLOPT_TIMEOUT, 5 );
        curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, 5 );

        //establecer NOBODY en true para hacer una solicitud tipo HEAD
        curl_setopt( $ch, CURLOPT_NOBODY, true );
        //Permitir seguir redireccionamientos
        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
        //recibir la respuesta como string, no output
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

        $data = curl_exec( $ch );

        //Obtener el código de respuesta
        $httpcode = curl_getinfo( $ch, CURLINFO_HTTP_CODE );
        //cerrar conexión
        curl_close( $ch );

        //Aceptar solo respuesta 200 (Ok), 301 (redirección permanente) o 302 (redirección temporal)
        $accepted_response = array( 200, 301, 302 );
        if( in_array( $httpcode, $accepted_response ) ) {
            return true;
        } else {
            return false;
        }

    }

}
