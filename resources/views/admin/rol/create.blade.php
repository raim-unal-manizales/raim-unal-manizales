@extends('template.main')

@section('title', 'Crear Rol')

@section('content')
<!--
	// cabezera del contenido
-->
  <div class="contentHeader">
  		<h1><span class="label label-primary">Crear:</span><strong>  Rol</strong></label></h1>
  </div>
<!--
	//fin de la cabezera del contenido
-->
<div class="row">
  <div class="col-md-7 col-md-offset-2 well">
	{!! Form::open(['route' => 'Admin.Rol.store', 'method' => 'POST','novalidate' => 'novalidate', 'class'=>'form-horizontal']) !!}
		<div class="fieldForm">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('name', null ,['class' => '', 'placeholder' => 'Nombre Del Rol','required']) !!}
		</div>

		<div class="fieldForm">
			{!! Form::label('description','Descripcion') !!}
			{!! Form::textarea('description', null ,['class' => '']) !!}
		</div>

		<div class="">
      <hr>
			{!! Form::submit('Guardar',['class' => 'btn btn-primary pull-right']) !!}
			<a href="{{ route('Admin.Rol.index') }}" class="btn btn-danger">Cancelar</a>
		</div>

	{!! Form::close() !!}
</div>
</div>
@endsection
