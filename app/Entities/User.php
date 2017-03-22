<?php

namespace App\Entities;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
//use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    protected $table = "users";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','id_rol','user_name','first_name','second_name','last_name','educativeLevel', 'institution', 'email', 'password','birth_date','language','encript'];


    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];

    public function rol(){
        return $this->belongsTo('App\Entities\Rol', 'id_rol');
    }

    public function fields_user(){
        return $this->hasMany('App\Entities\FieldUser', 'id_user');
    }

    public function search_lo(){
        return $this->hasMany('App\Entities\search_lo', 'user_id');
    }

    public function visited_lo(){
        return $this->hasMany('App\Entities\Visited_lo', 'user_id');
    }

    public function calification_lo(){
        return $this->hasMany('App\Entities\Calification_lo', 'user_id');
    }

    public function personalization(){
        return $this->hasMany('App\Entities\Personalization', 'user_id');
    }
    public function need(){
        return $this->hasOne('App\Entities\Need', 'user_id');
    }

    public function learningStyle(){
        return $this->hasMany('App\Entities\LearningStyle', 'user_id');
    }


}
