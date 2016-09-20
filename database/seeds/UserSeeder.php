<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
        		
                'id_rol'	=>	1,
        		'user_name'	=>	'MayorDan',
        		'first_name'=>	'Daniel',
                'second_name'=>  'Andres',
        		'last_name'	=>	'Espinosa Gomez',
        		'email'		=>	'daespinosag@unal.edu.co',
                'institution'     =>  'Unal',
                'birth_date'     =>  '16/09/1993',
                'language'     =>  'Español',

        		'password'	=>	bcrypt('secret'),
                'encript'  =>  encrypt('secret')
        	]);

        DB::table('users')->insert([
                'id_rol'    =>  2,
                'user_name' =>  'creador',
                'first_name'      =>  'creador',
                'second_name'      =>  'Andres',
                'last_name' =>  'creador Gomez',
                'email'     =>  'creador@unal.edu.co',
                'institution'     =>  'Unal',
                'birth_date'     =>  '16/09/1993',
                'language'     =>  'Español',

                'password'  =>  bcrypt('secret'),
                'encript'  =>  encrypt('secret')
            ]);

        DB::table('users')->insert([
                'id_rol'    =>  3,
                'user_name' =>  'estudiante',
                'first_name'      =>  'estudiante',
                'second_name'      =>  'Andres',
                'last_name' =>  'estudiante Gomez',
                'email'     =>  'estudiante@unal.edu.co',
                'institution'     =>  'Unal',
                'birth_date'     =>  '16/09/1993',
                'language'     =>  'Español',

                'password'  =>  bcrypt('secret'),
                'encript'  =>  encrypt('secret')
            ]);
    }
}
