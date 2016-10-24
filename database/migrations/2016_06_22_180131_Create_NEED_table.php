<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNeedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('needs', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('user_id');

            $table->enum('NEED',['Si','No']);

            $table->enum('V',['Si','No'])->nullable()->default(null);
            $table->enum('A',['Si','No'])->nullable()->default(null);
            $table->enum('M',['Si','No'])->nullable()->default(null);
            $table->enum('C',['Si','No'])->nullable()->default(null);
            $table->enum('E',['Si','No'])->nullable()->default(null);


            $table->enum('V1',['Vision_Nula','Baja_vision'])->nullable()->default(null);
            $table->enum('V2',['V2_OpcionUno','V2_OpcionDos','V2_OpcionTres','V2_OpcionCuatro'])->nullable()->default(null);

            $table->enum('A1',['Audicion_Nula','Baja_Audicion'])->nullable()->default(null);
            $table->enum('A2',['Si','No'])->nullable()->default(null);
            $table->enum('A3',['Si','No'])->nullable()->default(null);

            $table->enum('M1',['Si','No'])->nullable()->default(null);
            $table->enum('M2',['Si','No'])->nullable()->default(null);
            $table->enum('M3',['Si','No'])->nullable()->default(null);

            $table->enum('C1',['Si','No'])->nullable()->default(null);
            $table->enum('C2',['Si','No'])->nullable()->default(null);
            $table->enum('C3',['Si','No'])->nullable()->default(null);

            $table->string('E1')->nullable()->default(null);
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
        Schema::drop('needs');
    }
}
