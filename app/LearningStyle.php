<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LearningStyle extends Model
{
    protected $table = "learningStyles";
    
    protected $fillable = ['id','user_id', 'reference_learning_styles', 'visual', 'kinestesic', 'auditory', 'reader', 'global', 'sequential'];
}
