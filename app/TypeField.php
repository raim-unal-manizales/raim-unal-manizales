<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class TypeField extends Model
{
	//use SoftDeletes;

	protected $table = "types_fields";
    
    protected $fillable = ['id','name', 'description','html'];

    //protected $dates = ['deleted_at'];



    public function field_table(){
        return $this->hasMany('App\FieldTable');
    }

    
}
