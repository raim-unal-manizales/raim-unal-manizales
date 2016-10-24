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
                'id_rol'    =>  1,
                'user_name' =>  'AdminGaia',
                'first_name'=>  'Gaia',
                'second_name'=>  'Admin',
                'last_name' =>  'Investigation Gruop',
                'email'     =>  'gaia@gmail.com',
                'educativeLevel'     =>  'Media',
                'institution'     =>  'Unal',
                'birth_date'     =>  '01/01/2000',
                'language'     =>  'Español',

                'password'  =>  bcrypt('secret'),
                'encript'  =>  encrypt('secret')
            ]);

        DB::table('users')->insert([
                'id_rol'    =>  2,
                'user_name' =>  'CeatorGaia',
                'first_name'      =>  'Gaia',
                'second_name'      =>  'Creator',
                'last_name' =>  'Investigation Gruop',
                'educativeLevel'     =>  'Media',
                'email'     =>  'gaiaCreator@gmail.com',
                'institution'     =>  'Unal',
                'birth_date'     =>  '01/01/2000',
                'language'     =>  'Español',

                'password'  =>  bcrypt('secret'),
                'encript'  =>  encrypt('secret')
            ]);

        DB::table('users')->insert([
                'id_rol'    =>  3,
                'user_name' =>  'studentGaia',
                'first_name'      =>  'Gaia',
                'second_name'      =>  'Student',
                'last_name' =>  'Investigation Gruop',
                'email'     =>  'gaiaStudent@gmail.com',
                'educativeLevel'     =>  'Media',
                'institution'     =>  'Unal',
                'birth_date'     =>  '01/01/2000',
                'language'     =>  'Español',

                'password'  =>  bcrypt('secret'),
                'encript'  =>  encrypt('secret')
            ]);

        DB::table('users')->insert([
                'id_rol'	=>	1,
        		'user_name'	=>	'MayorDan',
        		'first_name'=>	'Daniel',
                'second_name'=>  'Andres',
        		'last_name'	=>	'Espinosa Gomez',
        		'email'		=>	'daespinosag@unal.edu.co',
                'educativeLevel'     =>  'Media',
                'institution'     =>  'Unal',
                'birth_date'     =>  '16/09/1993',
                'language'     =>  'Español',

        		'password'	=>	bcrypt('secret'),
                'encript'  =>  encrypt('secret')
        	]);
    }
}
