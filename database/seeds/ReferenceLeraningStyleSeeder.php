<?php

use Illuminate\Database\Seeder;

class ReferenceLeraningStyleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('referenceLearningStyle')->insert([
        		
        		'learningStile'	=>	'Auditivo-Global',
        		'styleUno'		=>	'A',
        		'styleTwo'		=>	'G',
        		'description'	=>	'La instrucción que se habla o se escucha facilita el aprendizaje de este tipo de aprendizaje. Las conferencias, las grabaciones, los debates son todos mecanismos que permiten que las personas de este estilo exploren conceptos.',
        	]);
        DB::table('referenceLearningStyle')->insert([
        		
        		'learningStile'	=>	'Auditivo-Secuencial',
        		'styleUno'		=>	'A',
        		'styleTwo'		=>	'S',
        		'description'	=>	'Las personas Auditivas secuenciales tienden a deletrear fonéticamente (sonidos.) Estos estudiantes aprenden escuchando y recuerdan los hechos cuando éstos son presentados en forma de poemas, cantos o melodías',
        	]);
        
        DB::table('referenceLearningStyle')->insert([
        		
        		'learningStile'	=>	'Kinestesico-Global',
        		'styleUno'		=>	'K',
        		'styleTwo'		=>	'G',
        		'description'	=>	'Estas personas aprender mejor haciendo actividades que les permiten experimentar o practicar el concepto que están intentando aprender. La clave para el aprendizaje efectivo es que la instrucción les ofrece oportunidades concretas para aplicar la información.',
        	]); 
        DB::table('referenceLearningStyle')->insert([
        		
        		'learningStile'	=>	'Kinestesico-Secuencial',
        		'styleUno'		=>	'K',
        		'styleTwo'		=>	'S',
        		'description'	=>	'Estas personas aprenden mejor moviendo, experimentando  y manipulando. Les gusta descubrir como funcionan las cosas y muchas veces son exitosos en artes prácticas como carpintería o diseño.',
        	]);
         DB::table('referenceLearningStyle')->insert([
        		
        		'learningStile'	=>	'Lector-Global',
        		'styleUno'		=>	'R',
        		'styleTwo'		=>	'G',
        		'description'	=>	'Las personas con una preferencia a la modalidad leer/escribir aprenden mejor cuando reciben y devuelven la información en palabras.',
        	]);
        DB::table('referenceLearningStyle')->insert([
        		
        		'learningStile'	=>	'Lector-Secuencial',
        		'styleUno'		=>	'R',
        		'styleTwo'		=>	'S',
        		'description'	=>	'Las personas con estilo de aprendizaje Lector Secuencial tienen preferencia por información impresa en forma de palabras.',
        	]);        
        DB::table('referenceLearningStyle')->insert([
        		
        		'learningStile'	=>	'Visual-Global',
        		'styleUno'		=>	'V',
        		'styleTwo'		=>	'G',
        		'description'	=>	'Las personas Visuales Globales aprenden  mirando. Ellos van a imágenes del pasado cuando tratan de recordar. Ellos dibujan la forma de las cosas en su mente.',
        	]);
        DB::table('referenceLearningStyle')->insert([
        		
        		'learningStile'	=>	'Visual-Secuencial',
        		'styleUno'		=>	'V',
        		'styleTwo'		=>	'S',
        		'description'	=>	'Las personas visuales secuenciales gustan de reunir y procesar información usando tablas, diagramas, gráficas, mapas y otras imágenes o formas basadas en gráfico para aprender',
        	]);
    }
}
