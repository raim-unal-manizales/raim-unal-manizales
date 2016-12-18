<?php

namespace App\Entities;

class Personalization extends Entity
{
    protected $table = "personalizations";

    protected $fillable = ['id','user_id', 'fondSize', 'interline', 'contrast', 'font'];

    public function user(){
        return $this->belongsTo('App\Entities\User', 'user_id');
    }
}
