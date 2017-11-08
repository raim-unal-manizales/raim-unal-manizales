@extends('template.main')

@section('title', 'Editar Usuario')

@section('content')
<!--
	// cabezera del contenido
-->
<div class="contentHeader">
    <h1><span class="label label-primary">Editar:</span><strong>  Usuario</strong></label></h1>
</div>

<!--
	//fin de la cabezera del contenido
-->
@include('partials.displayErrors')
<div class="row">
  <div class="col-md-7 col-md-offset-2 well">
	{!! Form::model($user,['route' => ['Creador.update', $user], 'method'=> 'PUT' , 'class'=>'form-horizontal']) !!}

  <div class="fieldForm">
    {!! Form::label('user_name','Nombre de usuario') !!}
    {!! Form::text('user_name', null ,['class' => '', 'placeholder' => 'Primer Nombre','disabled']) !!}
  </div>

		<div class="fieldForm">
			{!! Form::label('first_name','Primer Nombre') !!}
			{!! Form::text('first_name', null  ,['class' => '', 'placeholder' => 'Primer Nombre']) !!}
		</div>

		<div class="fieldForm">
			{!! Form::label('second_name','Segundo Nombre') !!}
			{!! Form::text('second_name', null  ,['class' => '', 'placeholder' => 'Segundo Nombre']) !!}
		</div>

		<div class="fieldForm">
			{!! Form::label('last_name','Apellido') !!}
			{!! Form::text('last_name', null ,['class' => '', 'placeholder' => 'Apellido']) !!}
		</div>

		<div class="fieldForm">
			{!! Form::label('email','Correo Electrónico') !!}
			{!! Form::email('email', null ,['class' => '', 'placeholder' => 'exmple@gmail.com','disabled']) !!}
		</div>

		<div class="fieldForm">
			{!! Form::label('institution','Institución') !!}
			{!! Form::text('institution', null ,['class' => '', 'placeholder' => '']) !!}

		</div>
    <div class="fieldForm">
        {!! Form::label('educativeLevel','Nivel Educativo') !!}
        {!! Form::select('educativeLevel', ['Preescolar'=>'Preescolar','Basica Primaria'=>'Básica Primaria','Basica Secundaria'=>'Básica Secundaria','Media'=>'Media','Superior'=>'Superior','Otro'=>'Otro'] ,null, ['class' => '']) !!}
    </div>

		<div class="fieldForm">
			{!! Form::label('birth_date','Fecha de Nacimiento') !!}
			{!! Form::date('birth_date',null, ['class' => '']) !!}
		</div>

		<div class="fieldForm">
			{!! Form::label('language','Idioma') !!}
			{!! Form::select('language', ['Español'=>'Español','Inglés'=>'Inglés', 'Portugués'=>'Portugués'] , null, ['class' => '']) !!}

		</div>

		<div class="fieldForm">
			{!! Form::label('id_rol','Rol') !!}
			{!! Form::select('id_rol',$roles ,null,['class' => '','disabled']) !!}
		</div>

		<div class="">
      <hr>
			{!! Form::submit('Aceptar',['class' => 'btn btn-primary pull-right']) !!}
			<a href="{{ route('Creador.show', $user->id) }}" class="btn btn-danger">Cancelar</a>
		</div>

	{!! Form::close() !!}
</div>
</div>

@endsection
