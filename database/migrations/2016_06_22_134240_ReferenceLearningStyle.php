<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReferenceLearningStyle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referenceLearningStyle', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('learningStile');
            $table->string('styleUno');
            $table->string('styleTwo');
            $table->string('description',1000)->nullable();

            $table->timestamps();
            //$table->SoftDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('referenceLearningStyle');
    }
}
