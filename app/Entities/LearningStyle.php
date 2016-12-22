<?php

namespace App\Entities;


class LearningStyle extends Entity
{
    protected $table = "learningStyles";

    protected $fillable = ['id','user_id', 'reference_learning_styles', 'visual', 'kinestesic', 'auditory', 'reader', 'global', 'sequential'];


    public function user(){
        return $this->belongsTo('App\Entities\User', 'user_id');
    }
    public function reference_styles(){
        return $this->belongsTo('App\Entities\ReferenceLearningStyle', 'reference_learning_styles');
    }
}
