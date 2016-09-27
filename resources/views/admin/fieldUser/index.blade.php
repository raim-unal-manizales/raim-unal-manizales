@extends('template.main')

@section('title', 'Listar campos de tabla por usuario')

@section('content')
	
<!-- 
	// cabezera del contenido
-->
  <div class="contentHeader">
  		<h1>Listar campos de tabla para usauario</h1>
   		<a href=" {{ route('Admin.FieldUser.create') }}" class="">Nuevo campo de tabla para usuario</a>
  </div>
<!-- 
  <div>
  	<h5>Filtrar por : </h5>
  		{!! Form::open(['route' => 'Admin.FieldUser.data', 'method' => 'POST','novalidate' => 'novalidate']) !!}
			
			<div id="fields_tables">
				{!! Form::select('aplications', $aplications,  null, ['name' => 'Aplicacion','id'=>'Aplicacion','placeholder' => 'Aplicacion']) !!}
			</div>

			<div id="fields_tables">
				{!! Form::select('tables', $tables,  null, ['name' => 'Tabla','id'=>'Tabla','placeholder' => 'Tabla']) !!}
			</div>

			<div id="fields_tables">
				{!! Form::select('users', $users,  null, ['name' => 'Usuario','id'=>'Usuario','placeholder' => 'Usuario']) !!}
			</div>

			{!! Form::submit('Guardar',['class' => '']) !!}

  		{!! Form::close() !!}
  </div>
-->
<!-- 
	//fin de la cabezera del contenido
-->  
<!-- 
	//cuerpo del contenido
-->
  
<div class="">
      
	<table class="zebraTabla">
		<thead>
			<th>ID</th>
			<th>Usuario</th>
			<th>Table</th>
			<th>Campo</th>
			<th>Tipo Campo</th>
			<th>Valor</th>
			<th>Acciones</th>
		</thead>
		<tbody>
			
			@foreach($fieldusers as $fielduser)
				<tr>
					<td>{{ $fielduser-> id}}</td>
					<td>{{ $fielduser-> user_name}}</td>
					<td>{{ $fielduser-> table_name}}</td>
					<td>{{ $fielduser-> fieldtable_name}}</td>
					<td>{{ $fielduser-> type_field_name}}</td>
					
					@if($fielduser->type_field_name == "select")
						<td>{{ $fielduser-> option_name}}</td>
					@else 
						<td>{{ $fielduser-> value}}</td>
					@endif
	
					
					<td>
						<div class="buttonsTable">
							<a href="{{ route('Admin.FieldUser.show', $fielduser->id) }}" class="" title="Ver" alt="Ver">ver</a>

							<a href="{{ route('Admin.FieldUser.edit', $fielduser->id) }}" class="" title="Editar" alt="Editar">Editar</a>

							<a href="{{ route('Admin.FieldUser.delete', $fielduser->id) }}" class="" title="Eliminar" alt="Eliminar">Eliminar</a>
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