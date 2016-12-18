<?php

namespace App\Entities;

use Illuminate\Foundation\Auth\User as Authenticatable;
//use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    //use SoftDeletes;

    protected $table = "users";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','id_rol','user_name','first_name','second_name','last_name','educativeLevel', 'institution', 'email', 'password','birth_date','language','encript'];

    //protected $dates = ['deleted_at'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];

    public function rol(){
        return $this->belongsTo('App\Rol');
    }

    public function fields_tables(){
        return $this->hasMany('App\FieldTable');
    }




}
