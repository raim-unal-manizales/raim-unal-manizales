@extends('template.main')

@section('title', 'Eliminar Usuario')

@section('content')
<!--
	// cabezera del contenido
-->
  <div class="contentHeader">
  		<h1>Eliminar Usuario</h1>
  </div>

<!--
	//fin de la cabezera del contenido
-->

	{!! Form::open(['route' => ['Admin.User.destroy', $user->id], 'method' => 'DELETE']) !!}

	<div class="zebraTabla">
		<table>
			<tr>
				<td>ID</td>
				<td>{!! $user->id !!}</td>
			</tr>
			<tr>
				<td>Nombre Usuario</td>
				<td>{!! $user->user_name !!}</td>
			</tr>
			<tr>
				<td>Primer Nombre</td>
				<td>{!! $user->first_name !!}</td>
			</tr>
			<tr>
				<td>Segrundo Nombre</td>
				<td>{!! $user->second_name !!}</td>
			</tr>
			<tr>
				<td>Apellidos</td>
				<td>{!! $user->last_name !!}</td>
			</tr>
			<tr>
				<td>Correo</td>
				<td>{!! $user->email !!}</td>
			</tr>
			<tr>
				<td>Institucion</td>
				<td>{!! $user->institution !!}</td>
			</tr>
			<tr>
				<td>Fecha Nacimiento</td>
				<td>{!! $user->birth_date !!}</td>
			</tr>
			<tr>
				<td>Idioma</td>
				<td>{!! $user->language !!}</td>
			</tr>
			<tr>
				<td>Rol</td>
				<td>{!! $user->rol->name !!}</td>
			</tr>

		</table>
	</div>
	<div class="buttonTable">
		{!! Form::submit('Aceptar',['class' => '']) !!}
		<a href="{{ route('Admin.User.index') }}">Cancelar</a>
	</div>

	{!! Form::close() !!}

@endsection
