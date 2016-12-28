@extends('template.main')

@section('title', 'Editar Usuario')

@section('content')
<!--
	// cabezera del contenido
-->
  <div class="contentHeader">
  		<h1>Editar Usuario</h1>
  </div>

<!--
	//fin de la cabezera del contenido
-->

	{!! Form::model($user,['route' => ['Admin.User.update', $user], 'method'=> 'PUT']) !!}

  <div class="fieldForm">
    {!! Form::label('user_name','Nombre de usuario') !!}
    {!! Form::text('user_name', null ,['class' => '', 'placeholder' => 'Primer Nombre','required','disabled']) !!}
  </div>

		<div class="fieldForm">
			{!! Form::label('first_name','Primer Nombre') !!}
			{!! Form::text('first_name', null  ,['class' => '', 'placeholder' => 'Primer Nombre','required']) !!}
		</div>

		<div class="fieldForm">
			{!! Form::label('second_name','Segundo Nombre') !!}
			{!! Form::text('second_name', null  ,['class' => '', 'placeholder' => 'Segundo Nombre']) !!}
		</div>

		<div class="fieldForm">
			{!! Form::label('last_name','Apellido') !!}
			<br>
			{!! Form::text('last_name', null ,['class' => '', 'placeholder' => 'Apellido','required']) !!}

		</div>

		<div class="fieldForm">
			{!! Form::label('email','Correo Electrónico') !!}
			<br>
			{!! Form::email('email', null ,['class' => '', 'placeholder' => 'exmple@gmail.com','required','disabled']) !!}

		</div>

		<div class="fieldForm">
			{!! Form::label('institution','Institución') !!}
			{!! Form::text('institution', null ,['class' => '', 'placeholder' => '','required']) !!}

		</div>
		<div class="fieldForm">
            {!! Form::label('educativeLevel','Nivel Educativo') !!}
            {!! Form::select('educativeLevel', ['Preescolar'=>'Preescolar','Basica Primaria'=>'Básica Primaria','Basica secundaria'=>'Básica secundaria','Media'=>'Media','Superior'=>'Superior','General'=>'Otros'] ,null, ['class' => '', 'required']) !!}
        </div>

		<div class="fieldForm">
			{!! Form::label('birth_date','Fecha de Nacimiento') !!}
			{!! Form::date('birth_date',null, ['class' => '','required']) !!}

		</div>

		<div class="fieldForm">
			{!! Form::label('language','Idioma') !!}
			{!! Form::select('language', ['Español'=>'Español','Ingles'=>'Inglés'] , null, ['class' => '','required']) !!}

		</div>

		<div class="fieldForm">
			{!! Form::label('id_rol','Rol') !!}
			<br>
			{!! Form::select('id_rol',$roles ,null,['class' => '','required']) !!}

		</div>

		<div class="buttonForm">
			{!! Form::submit('Aceptar',['class' => '']) !!}
			<a href="{{ route('Creador.index') }}">Cancelar</a>
		</div>

	{!! Form::close() !!}


@endsection
