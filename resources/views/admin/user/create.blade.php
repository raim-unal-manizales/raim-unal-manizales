@extends('template.main')

@section('title', 'Crear Usuario')

@section('content')
<!--
	// cabezera del contenido
-->
  <div class="contentHeader">
  		<h1><span class="label label-primary">Crear:</span><strong>  Usuario</strong></label></h1>
  </div>
<!--
	//fin de la cabezera del contenido
-->
<div class="row">
  <div class="col-md-7 col-md-offset-2 well">
	{!! Form::open(['route'=> 'Admin.User.store','method'=> 'POST' , 'class'=>'form-horizontal']) !!}

		<div class="fieldForm">
			{!! Form::label('user_name','Nombre de Usuario') !!}
			{!! Form::text('user_name', null ,['class' => '', 'placeholder' => 'Nombre de Usuario','required']) !!}
		</div>

		<div class="fieldForm">
			{!! Form::label('first_name','Primer Nombre') !!}
			{!! Form::text('first_name', null ,['class' => '', 'placeholder' => 'Primer Nombre','required']) !!}
		</div>

		<div class="fieldForm">
			{!! Form::label('second_name','Segundo Nombre') !!}
			{!! Form::text('second_name', null ,['class' => '', 'placeholder' => 'Segundo Nombre']) !!}
		</div>

		<div class="fieldForm">
			{!! Form::label('last_name','Apellido') !!}
			{!! Form::text('last_name', null ,['class' => '', 'placeholder' => 'Apellido']) !!}
		</div>

		<div class="fieldForm">
			{!! Form::label('email','Correo Electrónico') !!}
			{!! Form::email('email', null ,['class' => '', 'placeholder' => 'exmple@gmail.com','required']) !!}
		</div>
		<div class="fieldForm">
            {!! Form::label('educativeLevel','Nivel Educativo') !!}
            {!! Form::select('educativeLevel', ['Pescolar'=>'Pescolar','Basica Primaria'=>'Basica Primaria','Basica secundaria'=>'Basica secundaria','Media'=>'Media','Superior'=>'Superior','General'=>'General'] ,null, ['class' => '']) !!}
        </div>
		<div class="fieldForm">
			{!! Form::label('institution','Institución') !!}
			{!! Form::text('institution', null ,['class' => '', 'placeholder' => '']) !!}

		</div>
		<div class="fieldForm">
			{!! Form::label('birth_date','Fecha de Nacimiento') !!}
			{!! Form::date('birth_date', null, ['class' => '','required']) !!}
		</div>
		<div class="fieldForm">
			{!! Form::label('language','Idioma') !!}
			{!! Form::select('language', ['Español'=>'Español','Ingles'=>'Ingles'] ,null, ['class' => '']) !!}
		</div>

		<div class="fieldForm">
			{!! Form::label('id_rol','Rol') !!}
			{!! Form::select('id_rol', $rol ,null, ['class' => '']) !!}
		</div>

		<div class="fieldForm">
			{!! Form::label('password','Contraseña') !!}
			{!! Form::password('password', ['class' => '', 'placeholder' => '**********','required']) !!}
		</div>

		<div class="">
      <hr>
			{!! Form::submit('Registrar',['class' => 'btn btn-primary pull-right']) !!}
			<a href="{{ route('Admin.User.index') }}" class="btn btn-danger">Cancelar</a>
		</div>

	{!! Form::close() !!}
</div>
</div>

@endsection
