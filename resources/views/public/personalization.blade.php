@extends('template.main')

@section('title', 'Personalizacion de interfaz')

@section('content')

<!-- 
    // cabezera del contenido
-->
  <div class="contentHeader">
        <h1>Personalizacion de Interfaz</h1> 
  </div>

<!-- 
    //fin de la cabezera del contenido
-->
    
    {!! Form::open(['route'=> 'Public.store_personalizacion','method'=> 'POST']) !!}

        <div class="fieldForm">
            {!! Form::label('fondSize','Tamaño de fuente') !!}
            {!! Form::number('fondSize', 'value',['class' => '','id'=>'fondSize', 'placeholder' => '¿Desea Aumentar o Disrminuir el Tamaño de Fuente?','required'])!!}         
        </div>

       	<div class="fieldForm">
            {!! Form::label('interline','Tamaño de interlineado') !!}
            {!! Form::number('interline', 'value',['class' => '','id'=>'interline', 'placeholder' => '¿Desea Aumentar o Disrminuir el Tamaño del Interlineado?','required'])!!}         
        </div>

        <div class="fieldForm">
            {!! Form::label('contrast','Contraste') !!}
            {!! Form::select('contrast', ['highContrast0'=>'Normal','highContrast1'=>'Negro - Blanco','highContrast2'=>'Amarillo - Negro','highContrast3'=>'Azul - Naranja'] ,null, ['class' => '','id'=>'contrast', 'required']) !!}           
        </div>

        <div class="fieldForm">
            {!! Form::label('font','Fuente') !!}
            {!! Form::select('font', 
            		[	'Normal'=>'Normal',
            			'Arial'=>'Arial',
            			'Georgia'=>'Georgia',
            			'Helvetica'=>'Helvetica',
            			'Courier'=>'Courier',
            			'monospace'=>'monospace',
            			'Serif'=>'Serif',
            			'Comic Sans MS'=>'Comic Sans MS' 
            		],null, ['class' => '','id'=>'font', 'required']) !!}           
        </div>

        <div>
            {{ Form::hidden('user_id','1') }}
        </div>


        <div class="buttonForm">
            {!! Form::submit('Aceptar',['class' => '']) !!}
            <a href="{{ route('Public.index') }}">Cancelar</a>
        </div>

    {!! Form::close() !!}


@endsection