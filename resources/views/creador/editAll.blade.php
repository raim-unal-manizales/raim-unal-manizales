@extends('template.main')

@section('title', '')

@section('content')
	<br>
	<div class="panel panel-default">
	<div class="panel-heading"><h4>Información para aplicaiónes</h4></div>
	<div class="panel-body">

@include('partials.displayErrors')
	{!! Form::open(['route' => ['Creador.UpdateAll'], 'method' => 'POST', 'class'=>'form-horizontal']) !!}

			@include('partialsUserProfil.dinamicFieldUser')

			<div class="fieldForm">
				{!! Form::hidden('id_user', $user_id,  ['value' => $user_id]) !!}
			</div>

			<div class="buttonTable">
				{!! Form::submit('Guardar',['class' => 'btn btn-primary pull-right']) !!}
				<a href="{{ route('Creador.show', $user_id) }}" class="btn btn-danger">Cancelar</a>
			</div>
	{!! Form::close() !!}

@endsection
