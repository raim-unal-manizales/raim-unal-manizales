<?php

namespace App\Entities;


//use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class Aplication extends Entity
{
   	//use SoftDeletes;

	protected $table = "aplications";

    protected $fillable = ['id','name', 'description', 'url', 'logo', 'type', 'rquiered_information','rquiered_personalization','rquiered_NEDD','rquiered_learningStyle', 'state' ,'systemRoute'];

    //protected $dates = ['deleted_at'];

    public function tables(){
        return $this->hasMany('App\Entities\Table', 'id_app');
    }

    public function recoverTables($query, $id_app)
    {

    }
}
