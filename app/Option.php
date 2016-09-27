<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class Option extends Model
{
	//use SoftDeletes;

	protected $table = "options";
    
    protected $fillable = ['id', 'id_field_table','name', 'description', 'id_option_app'];

    //protected $dates = ['deleted_at'];

  /*  

    public function fields_tables(){
        return $this->belongsTo('App\FieldTable');
    }*/

    public function field_user(){
        return $this->hasMany('App\FieldUser');
    }
}
