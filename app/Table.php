<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class Table extends Model
{
	//use SoftDeletes;

	protected $table = "tables";
    
    protected $fillable = ['id','id_app' ,'name', 'description'];

    //protected $dates = ['deleted_at'];


    public function aplication(){
        return $this->belongsTo('App\Aplication');
    }

    public function fields_tables(){
        return $this->hasMany('App\FieldTable');
    }
}
