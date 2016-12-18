<?php

namespace App\Entities;


class Visited_lo extends Entity
{
      protected $table = "visited_lo";

    protected $fillable = ['id', 'user_id','repository_id', 'object_id'];

    public function user(){
				return $this->belongsTo('App\Entities\User', 'user_id');
		}
}
