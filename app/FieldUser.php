<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;


class FieldUser extends Model
{
	//use SoftDeletes;

	protected $table = "fields_users";
    
    protected $fillable = ['id', 'id_user', 'id_field_table', 'id_option' ,'value'];

    //protected $dates = ['deleted_at'];

/*
    public function options(){
        return $this->belongsTo('App\Option');
    }
    */

    public function fields_tables(){
        return $this->belongsTo('App\FieldTable');
    }


}
