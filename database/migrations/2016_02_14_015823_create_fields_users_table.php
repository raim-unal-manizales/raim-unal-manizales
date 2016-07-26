<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFieldsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fields_users', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('id_user');
            $table->integer('id_field_table');
            $table->integer('id_option')->default(0);

            $table->string('value')->nullable();

            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade'); 
            $table->foreign('id_field_table')->references('id')->on('fields_tables')->onDelete('cascade'); 
            //$table->foreign('id_option')->references('id')->on('options')->onDelete('cascade');
            
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
        Schema::drop('fields_users');
    }
}
