<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('id_rol');

            $table->string('user_name')->unique();
            $table->string('first_name');
            $table->string('second_name')->nullable();
            $table->string('last_name');
            $table->string('institution')->nullable();
            $table->date('birth_date');
            $table->enum('language',['Español','Ingles']);
            $table->string('email')->unique();
           

            $table->string('password', 1000);
            $table->string('encript', 1000)->nullable()->default(null);


            $table->foreign('id_rol')->references('id')->on('rol')->onDelete('cascade');

            $table->rememberToken();
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
        Schema::drop('users');
    }
}
