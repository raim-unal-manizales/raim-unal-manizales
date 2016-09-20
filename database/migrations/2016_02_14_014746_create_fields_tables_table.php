<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFieldsTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fields_tables', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('id_table');
            $table->integer('id_type_field');

            $table->string('name');
            $table->string('name_db');
            $table->enum('field_recommendation',['True','False']);
            $table->enum('field_required',['True','False']);

            $table->string('description')->nullable()->default(null);

            $table->foreign('id_table')->references('id')->on('tables')->onDelete('cascade');
            $table->foreign('id_type_field')->references('id')->on('types_fields')->onDelete('cascade');
            
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
        Schema::drop('fields_tables');
    }
}
