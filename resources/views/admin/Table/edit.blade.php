@extends('template.main')

@section('title', 'Editar Tabla')

@section('content')
<!--
	// cabezera del contenido
-->
  <div class="contentHeader">
  		<h1><span class="label label-primary">Editar:</span><strong>  Tabla</strong></label></h1>
  </div>
<!--
	//fin de la cabezera del contenido
-->
<div class="row">
  <div class="col-md-7 col-md-offset-2 well">
	{!! Form::model($table,['route' => ['Admin.Table.update', $table], 'method'=> 'PUT','novalidate' => 'novalidate', 'class'=>'form-horizontal']) !!}

		<div class="fieldForm">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('name', null ,['class' => '', 'placeholder' => 'Nombre','required']) !!}
		</div>

		<div class="fieldForm">
			{!! Form::label('description','Descripción') !!}
			{!! Form::textarea('description', null,['class' => '', 'placeholder' => '']) !!}
		</div>

		<div class="fieldForm">
			{!! Form::label('id_app','Aplicación') !!}
			{!! Form::select('id_app', $aplications , null, ['class' => '']) !!}
		</div>

		<div class="">
      <hr>
			{!! Form::submit('Editar',['class' => 'btn btn-primary pull-right']) !!}
			<a href="{{ route('Admin.Table.index') }}" class="btn btn-danger">Cancelar</a>
		</div>

	{!! Form::close() !!}
  </div>
</div>

@endsection
