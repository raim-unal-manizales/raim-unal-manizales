<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitedLo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visited_lo', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('repository_id')->nullable();
            $table->integer('object_id')->nullable();     

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
        Schema::drop('visited_lo');
    }
}
