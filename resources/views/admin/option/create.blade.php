@extends('template.main')

@section('title', 'Crear Opcion')

@section('content')
<!--
	// cabezera del contenido
-->
  <div class="contentHeader">
    <h1><span class="label label-primary">Crear:</span><strong>  Opción</strong></label></h1>
  </div>

<!--
	//fin de la cabezera del contenido
-->
@include('partials.displayErrors')

<div class="row">
  <div class="col-md-7 col-md-offset-2 well">
	{!! Form::open(['route'=> 'Admin.Option.store','method'=> 'POST', 'class'=>'form-horizontal']) !!}

		<div class="fieldForm">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('name', null ,['class' => '', 'placeholder' => 'Nombre']) !!}
		</div>

		<div class="fieldForm">
			{!! Form::label('description','Descripción') !!}
			{!! Form::textarea('description', null ,['class' => '', 'placeholder' => '']) !!}
		</div>

		<div class="fieldForm">
			{!! Form::label('id_field_table','campo de tabla') !!}
			{!! Form::select('id_field_table', $fieldTable ,null, ['class' => '']) !!}
		</div>

		<div class="fieldForm">
			{!! Form::label('id_option_app','id opción en aplicación') !!}
			{!! Form::number('id_option_app', null ,['class' => '', 'placeholder' => '']) !!}
		</div>

		<div class="">
      <hr>
      <a href="{{ route('Admin.Option.index') }}" class="btn btn-danger">Cancelar</a>
			{!! Form::submit('Registrar',['class' => 'btn btn-primary pull-right']) !!}

		</div>

	{!! Form::close() !!}
  </div>
</div>

@endsection
