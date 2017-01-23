@extends('template.main')

@section('title', '')

@section('content')
	<!--
		// cabezera del contenido
	-->
	  <div class="contentHeader">
	  		<h1><span class="label label-primary">Editar:</span><strong>  Campos Usuario</strong></label></h1>
	  </div>
	<!--
		//fin de la cabezera del contenido
	-->
<br>
<div class="panel panel-default">
<div class="panel-heading"><h4>Información para aplicaiones</h4></div>
<div class="panel-body">
	@include('partials.displayErrors')
{!! Form::open(['route' => ['Admin.FieldUser.UpdateAll'], 'method' => 'POST', 'class'=>'form-horizontal']) !!}

		@include('partialsUserProfil.dinamicFieldUser')

		<div class="fieldForm">
			{!! Form::hidden('id_user', $user_id,  ['value' => $user_id]) !!}
		</div>

		<div class="buttonTable">
			{!! Form::submit('Guardar',['class' => 'btn btn-primary pull-right']) !!}
			<a href="{{ route('Admin.FieldUser.index') }}" class="btn btn-danger">Cancelar</a>
		</div>
		{!! Form::close() !!}
@endsection
