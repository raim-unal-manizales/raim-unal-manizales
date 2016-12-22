<?php

namespace App\Entities;


class Option extends Entity
{

	protected $table = "options";

  protected $fillable = ['id', 'id_field_table','name', 'description', 'id_option_app'];


    public function fields_table(){
        return $this->belongsTo('App\Entities\FieldTable', 'id_field_table');
    }
}
