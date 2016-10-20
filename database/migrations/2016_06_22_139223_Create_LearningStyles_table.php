<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLearningStylesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('learningStyles', function (Blueprint $table) {
            
            $table->increments('id');

            $table->integer('user_id');
            $table->integer('reference_learning_styles');

            $table->double('visual', 15, 8)->nullable()->default(0);
            $table->double('kinestesic', 15, 8)->nullable()->default(0);
            $table->double('auditory', 15, 8)->nullable()->default(0);
            $table->double('reader', 15, 8)->nullable()->default(0);

            $table->double('global', 15, 8)->nullable()->default(0);
             $table->double('sequential', 15, 8)->nullable()->default(0);

             $table->foreign('reference_learning_styles')->references('id')->on('referenceLearningStyle')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::drop('learningStyles');
    }
}
