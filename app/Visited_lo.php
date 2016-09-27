<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visited_lo extends Model
{
      protected $table = "visited_lo";
    
    protected $fillable = ['id', 'user_id','repository_id', 'object_id'];
}
