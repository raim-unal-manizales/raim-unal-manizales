<?php

namespace App\Entities;


class Search_lo extends Entity
{
    protected $table = "search_lo";

    protected $fillable = ['id', 'user_id','search_string'];


    public function user(){
        return $this->belongsTo('App\Entities\User', 'user_id');
    }
}
