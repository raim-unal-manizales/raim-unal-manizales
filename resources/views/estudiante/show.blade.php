@extends('template.main')

@section('title', 'Vista de Usuario')

@section('content')

  <div class="contentHeader">
  		<h1>Datos De Usuario</h1>
   		<a href=" {{ route('Estudiante.editAll', $user->id) }}" class="">Editar Informacion</a>

  </div>

	<table>
		<tr>
			<td>Datos Basicos</td>
			<td></td>
		</tr>
		<tr>
			<td>ID</td>
			<td>{!! $user->id !!}</td>
		</tr>
		<tr>
			<td>Nombre Usuario</td>
			<td>{!! $user->user_name !!}</td>
		</tr>
		<tr>
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
				<td>{!! $user->rol->name!!}</td>
			</tr>
	</table>

	@foreach($aplications as $aplication)
	<table>
		<tr>
			<td>{{ $aplication->name }}</td>
			<td></td>
		</tr>

		@foreach($aplication->tablas as $table)

			<tr>
				<td>{{ $table->name }}</td>
				<td></td>
			</tr>

				@foreach($table->fields_tables as $fields_table)
				<tr>
					<td>{{ $fields_table->name }}</td>
					<td>{{ $fields_table->value }}</td>
				</tr>
				@endforeach

		@endforeach
		</table>
	@endforeach



		<div class="buttonTable">

			<a href="{{ route('Estudiante.index') }}">Aceptar</a>
		</div>
	<!--</form>	-->
@endsection
