<?php

namespace App\Entities;


class Calification_lo extends Entity
{
   	protected $table = "calification_lo";

    protected $fillable = ['id', 'user_id','repository_id', 'object_id', 'calification'];

    public function user(){
        return $this->belongsTo('App\Entities\User', 'user_id');
    }
}
