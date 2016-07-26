<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Search_lo extends Model
{
    protected $table = "search_lo";
    
    protected $fillable = ['id', 'user_id','search_string'];
}
