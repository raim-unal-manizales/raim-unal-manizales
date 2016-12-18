<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Personalization extends Model
{
    protected $table = "personalizations";

    protected $fillable = ['id','user_id', 'fondSize', 'interline', 'contrast', 'font'];
}
