<?php

namespace App\Entities;

class FieldUser extends Entity
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
        return $this->belongsTo('App\Entities\FieldTable', 'id_field_table');
    }

		public function user(){
				return $this->belongsTo('App\Entities\User', 'id_user');
		}


}
