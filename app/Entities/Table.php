<?php

namespace App\Entities;


class Table extends Entity
{

	protected $table = "tables";

  protected $fillable = ['id','id_app' ,'name', 'description'];


  public function aplication(){
      return $this->belongsTo('App\Entities\Aplication', 'id_app');
  }

  public function fields_tables(){
      return $this->hasMany('App\Entities\FieldTable', 'id_table');
  }
}
