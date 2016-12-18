<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Need extends Model
{
     protected $table = "needs";

    protected $fillable = [
        'id','user_id','NEED','V','A','M', 'C', 'E','V1','V2',
        'A1','A2','A3','M1','M2','M3','C1','C2','C3','E1'];
}
