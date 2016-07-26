<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('options', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('id_field_table');
            
            $table->string('name');
            $table->string('description')->nullable(); 
            $table->integer('id_option_app'); 

             $table->foreign('id_field_table')->references('id')->on('fields_tables')->onDelete('cascade');        

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
        Schema::drop('options');
    }
}
