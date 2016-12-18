<?php

namespace App\Entities;


class TypeField extends Entity
{

	protected $table = "types_fields";

    protected $fillable = ['id','name', 'description','html'];

    public function field_table(){
        return $this->hasMany('App\FieldTable', 'id_type_field');
    }


}
