<?php

use Illuminate\Database\Seeder;

class TypeFieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('types_fields')->insert([
        		
        		'name'			=>	'texto',
        		'description'	=>	'Este es un campo de texto',
        		'html'			=>	'text',
        	]);

        DB::table('types_fields')->insert([
        		
        		'name'			=>	'select',
        		'description'	=>	'Este es un campo de seleccion',
        		'html'			=>	'select',
        	]);

        DB::table('types_fields')->insert([
        		
        		'name'		=>	'numero',
        		'description'	=>	'Este es un campo numerico',
        		'html'		=>	'number',
        	]);

        DB::table('types_fields')->insert([
        		'name'			=>	'area de texto',
        		'description'	=>	'Este es un tipo de campo area de texto ',
        		'html'			=>	'textarea',
        	]);

    }
}
