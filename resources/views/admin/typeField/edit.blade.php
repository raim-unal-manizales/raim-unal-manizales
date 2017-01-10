@extends('template.main')

@section('title', 'Editar Tipo de Campo ')

@section('content')

<!--
	// cabezera del contenido
-->
  <div class="contentHeader">
  		<h1><span class="label label-primary">Editar:</span><strong>  Tipo de Campo</strong></label></h1>
  </div>
<!--
	//fin de la cabezera del contenido
-->
@include('partials.displayErrors')

<div class="row">
  <div class="col-md-7 col-md-offset-2 well">
	{!! Form::model($typeField,['route' => ['Admin.TypeField.update', $typeField], 'method'=> 'PUT', 'class'=>'form-horizontal']) !!}

		<div class="fieldForm">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('name', null ,['class' => '', 'placeholder' => 'Nombre Del campo']) !!}
		</div>

		<div class="fieldForm">
			{!! Form::label('description','Descripción') !!}
			{!! Form::textarea('description', null ,['class' => '']) !!}
		</div>

		<div class="fieldForm">
			{!! Form::label('html','Html') !!}
			{!! Form::text('html', null ,['class' => '', 'placeholder' => 'Html del campo']) !!}
		</div>

		<div class="">
      <hr>
			{!! Form::submit('Guardar',['class' => 'btn btn-primary pull-right']) !!}
			<a href="{{ route('Admin.TypeField.index') }}" class="btn btn-danger">Cancelar</a>
		</div>
	{!! Form::close() !!}
  </div>
</div>
@endsection
