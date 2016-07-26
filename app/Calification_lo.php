<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calification_lo extends Model
{
   	protected $table = "calification_lo";
    
    protected $fillable = ['id', 'user_id','repository_id', 'object_id', 'calification'];
}
