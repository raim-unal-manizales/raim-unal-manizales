<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalizationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personalizations', function (Blueprint $table) {
            
            $table->increments('id');
            
            $table->integer('user_id');

            $table->integer('fondSize')->nullable()->default(null);
            $table->integer('interline')->nullable()->default(null);
            $table->string('contrast')->nullable()->default(null);
            $table->string('font')->nullable()->default(null);


            $table->foreign('user_id')->references('id')->on('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('personalizations');
    }
}
