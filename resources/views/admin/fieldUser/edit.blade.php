@extends('template.main')

@section('title', 'Editar campo Usuario')

@section('content')
<!-- 
	// cabezera del contenido
-->
  <div class="contentHeader">
  		<h1>Editar Campo Usuario</h1> 
  </div>

<!-- 
	//fin de la cabezera del contenido
--> 
	
	
	{!! Form::open(['route' => ['Admin.FieldUser.update', $fielduser], 'method' => 'PUT']) !!}
	<div class="zebraTabla">
		<table>
			<tr>
				<td>ID</td>
				<td>{!! $fielduser->id !!}</td>
			</tr>
			<tr>
				<td>Usuario</td>
				<td>{!! $fielduser->user_name !!}</td>
			</tr>

			<tr>
				<td>Tabla</td>
				<td>{!! $fielduser->table_name !!}</td>
			</tr>

			<tr>
				<td>Campo</td>
				<td>{!! $fielduser->fieldtable_name !!}</td>
			</tr>
			<tr>
				<td>Tipo de campo</td>
				<td>{!! $fielduser->type_field_name !!}</td>
			</tr>
			<tr>
			

				<td>{!! Form::label('value','Valor') !!}</td>
				

				<td>
				<?php $bandera = 0; ?>
					
					@if($fielduser->type_field_name == "select")

						{!! Form::select('value', $fielduser->options,  null, ['class' => '', 'required']) !!}

						<?php $bandera = 1; ?>

					@elseif($fielduser->type_field_name == "textarea")
											
						{!! Form::textarea('value', $fielduser->value ,['class' => '','required']) !!}
										
					@elseif($fielduser->type_field_name == "number")
						
						{!! Form::number('value', $fielduser->value ,['class' => '','required']) !!}	
											
					@else 
						{!! Form::text('value', $fielduser->value ,['class' => '','required']) !!}	
					@endif

					{{ Form::hidden('info', $bandera , ['value' => $bandera]) }}

				</td>
			</tr>

		</table>
	</div>
	<div class="buttonTable">			
		{!! Form::submit('Aceptar',['class' => '']) !!}	
		<a href="{{ route('Admin.FieldUser.index') }}">Cancelar</a>
	</div>

	{!! Form::close() !!}

@endsection