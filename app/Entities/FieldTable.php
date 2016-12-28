<?php

namespace App\Entities;
//use Illuminate\Database\Eloquent\SoftDeletes;

class FieldTable extends Entity
{
	//use SoftDeletes;

	protected $table = "fields_tables";

    protected $fillable = ['id', 'id_table', 'id_type_field','name', 'name_db', 'description' , 'field_required','field_recommendation'];

    //protected $dates = ['deleted_at'];


    public function table(){
        return $this->belongsTo('App\Entities\Table', 'id_table');
    }

    public function options(){
        return $this->hasMany('App\Entities\Option', 'id_field_table');
    }

    public function types_field(){
        return $this->belongsTo('App\Entities\TypeField', 'id_type_field');
    }

    public function field_user(){
        return $this->hasMany('App\Entities\FieldUser', 'id_field_table');
    }

}
