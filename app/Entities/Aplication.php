<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class Aplication extends Model
{
   	//use SoftDeletes;

	protected $table = "aplications";

    protected $fillable = ['id','name', 'description', 'url', 'logo', 'type', 'rquiered_information','rquiered_personalization','rquiered_NEDD','rquiered_learningStyle', 'state'];

    //protected $dates = ['deleted_at'];

    public function tables(){
        return $this->hasMany('App\Table');
    }

    public function recoverTables($query, $id_app)
    {

    }
}
