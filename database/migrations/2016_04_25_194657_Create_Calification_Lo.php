<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalificationLo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calification_lo', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('repository_id')->nullable();
            $table->integer('object_id')->nullable();
            $table->integer('calification')->nullable();
            $table->integer('contribution')->nullable();
            $table->integer('design')->nullable();
            $table->integer('quality')->nullable();
            $table->integer('recommended')->nullable();

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
        Schema::drop('calification_lo');
    }
}
