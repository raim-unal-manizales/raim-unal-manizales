<?php

namespace App\Entities;

class ReferenceLearningStyle extends Entity
{

    protected $table = "referenceLearningStyle";

    protected $fillable = ['id','learningStile', 'styleUno', 'styleTwo', 'description'];

    public function learningStile(){
        return $this->hasMany('App\Entities\LearningStyle', 'reference_learning_styles');
    }
}
