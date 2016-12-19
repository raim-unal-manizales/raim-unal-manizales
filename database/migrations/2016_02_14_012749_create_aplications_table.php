<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aplications', function (Blueprint $table) {

            $table->increments('id');

            $table->string('name');
            $table->string('description')->nullable();
            $table->string('url');
            $table->string('logo')->nullable();
            $table->enum('type',['Herramienta_Autor','Repositorio']);
            $table->enum('state',['Activo','Inactivo']);

            $table->enum('rquiered_personalization',['True','False'])->default('False');
            $table->enum('rquiered_NEDD',['True','False'])->default('False');
            $table->enum('rquiered_information',['True','False'])->default('False');
            $table->enum('rquiered_learningStyle',['True','False'])->default('False');
            $table->enum('systemRoute',['True','False'])->default('False');

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
        Schema::drop('aplications');
    }
}
