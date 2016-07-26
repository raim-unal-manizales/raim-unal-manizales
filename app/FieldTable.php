<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class FieldTable extends Model
{
	//use SoftDeletes;

	protected $table = "fields_tables";
    
    protected $fillable = ['id', 'id_table', 'id_type_field','name', 'name_db', 'description' , 'field_required','field_recommendation'];

    //protected $dates = ['deleted_at'];


    public function tables(){
        return $this->belongsTo('App\Table');
    }

    public function options(){
        return $this->hasMany('App\Option');
    }

    public function types_fields(){
        return $this->belongsTo('App\TypeField');
    }

    public function field_user(){
        return $this->hasMany('App\FieldUser');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }


}
