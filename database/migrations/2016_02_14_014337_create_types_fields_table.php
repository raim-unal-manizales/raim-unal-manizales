<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypesFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('types_fields', function (Blueprint $table) {
            
            $table->increments('id');
            
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('html');

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
        Schema::drop('types_fields');
    }
}
