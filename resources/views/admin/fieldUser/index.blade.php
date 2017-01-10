@extends('template.main')

@section('title', 'Listar campos de tabla por usuario')

@section('content')

<!--
	// cabezera del contenido
-->
  <div class="contentHeader">
  		<h1>Listar campos de tabla para usuario</h1>
   		<a href=" {{ route('Admin.FieldUser.create') }}" class="">Nuevo campo de tabla para usuario</a>
  </div>
<!--
	//fin de la cabezera del contenido
-->

<!--
	//cuerpo del contenido
-->

<div class="">

	<table class="zebraTabla">
		<thead>
			<th>#</th>
			<th>Usuario</th>
			<th>Tabla</th>
			<th>Campo</th>
			<th>Tipo Campo</th>
			<th>Valor</th>
			<th>Acciones</th>
		</thead>
		<tbody>

			@foreach($fieldusers as $fielduser)
				<tr>
					<td>{{ $fielduser->id}}</td>
					<td>{{ $fielduser->user->user_name}}</td>
					<td>{{ $fielduser->fields_tables->table->name}}</td>
					<td>{{ $fielduser->fields_tables->name}}</td>
					<td>{{ $fielduser->fields_tables->types_field->name}}</td>

					@if($fielduser->fields_tables->types_field->name == "select")
						<td>{{ $fielduser->fields_tables->options->find($fielduser->id_option)->name}}</td>
					@else
						<td>{{ $fielduser->value}}</td>
					@endif

					<td>
						<div class="buttonsTable">
							<a href="{{ route('Admin.FieldUser.show', $fielduser->id) }}" class="" title="Ver" alt="Ver" value="ver"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>

							<a href="{{ route('Admin.FieldUser.edit', $fielduser->id) }}" class="" title="Editar" alt="Editar" value="Editar"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>

							<a href="{{ route('Admin.FieldUser.delete', $fielduser->id) }}" class="" title="Eliminar" alt="Eliminar" value="Eliminar"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
						</div>
					</td>
				</tr>
			@endforeach

		</tbody>

	</table>
	{!! $fieldusers->render() !!}
  </div>


<!--
	//fin del cuerpo del contenido
-->

@endsection



@section('javascript')

	<script type="text/javascript">

		$('#Aplicacion').on('change',function(event) {

			console.log(event);
			var aplication = event.target.value;

			var array = {aplication: aplication,tabla: 'null',usuario:'null'};

			 var data = {'array':array, '_token': $('input[name=_token]').val()}

			$.post('/Admin/FieldUser/data', data , function(array){
				alert(data);
			});


			$('#Tabla').on('change',function(event) {

				console.log(event);
				var tabla = event.target.value;

				var array = {aplication: aplication,tabla: tabla,usuario:'null'};

				alert(array['tabla']);

				$('#Usuario').on('change',function(event) {

					console.log(event);
					var usuario = event.target.value;

					var array = {aplication: aplication,tabla: tabla,usuario:usuario};

					alert(array['usuario']);

				});


			});


		});


</script>

@endsection
