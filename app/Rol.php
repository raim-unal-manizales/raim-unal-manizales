<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class Rol extends Model
{
	//use SoftDeletes;

	protected $table = "rol";
    
    protected $fillable = ['id','name', 'description'];

    //protected $dates = ['deleted_at'];


    /*
    	//	Relaciones
     */

    public function users(){
        return $this->hasMany('App\User');
    }
}
