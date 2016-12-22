<?php

namespace App\Entities;


class Need extends Entity
{
     protected $table = "needs";

    protected $fillable = [
        'id','user_id','NEED','V','A','M', 'C', 'E','V1','V2',
        'A1','A2','A3','M1','M2','M3','C1','C2','C3','E1'];

    public function user(){
      return $this->belongsTo('App\Entities\User', 'user_id');
    }
}
