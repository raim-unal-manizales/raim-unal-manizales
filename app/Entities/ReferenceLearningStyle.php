<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class ReferenceLearningStyle extends Model
{

    protected $table = "referenceLearningStyle";

    protected $fillable = ['id','learningStile', 'styleUno', 'styleTwo', 'description'];
}
