<?php

namespace App\Entities;

class Rol extends Entity
{

	protected $table = "rol";

  protected $fillable = ['id','name', 'description'];

    public function users(){
        return $this->hasOne('App\Entities\User', 'id_rol');
    }
}
