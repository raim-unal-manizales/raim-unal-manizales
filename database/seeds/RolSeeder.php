<?php

use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('rol')->insert([

        		'name'		=>	'admin',
        		'description'	=>	'Administrador',
        	]);

        DB::table('rol')->insert([

        		'name'		=>	'creador',
        		'description'	=>	'Creador',
        	]);

        DB::table('rol')->insert([

        		'name'		=>	'estudiante',
        		'description'	=>	'Estudiante',
        	]);
    }
}
