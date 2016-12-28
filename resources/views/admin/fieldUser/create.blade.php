@extends('template.main')

@section('title', '')

@section('content')
	<?php
		$bandera = 0;
		$var = [];
	 ?>
<br>
<div class="panel panel-default">
	<div class="panel-heading"><h4>Información para aplicaiónes</h4></div>
	<div class="panel-body">
		{!! Form::open(['route' => 'Admin.FieldUser.store', 'method' => 'POST']) !!}

		@foreach($aplications as $aplication)

			<h5>{{ $aplication->name }}</h5>
			<div id="aplicaicon" class="well well-sm">
					@foreach($aplication->tables as $table)
						<div id="tables" class="">
							{{ $table->name }}
							@foreach($table->fields_tables as $fields_table)
								<div id="fields_tables" class="fieldForm">
									<?php $select = 0 ?>

									@if($fields_table->types_field->html == "select")
										{!! Form::label($fields_table->id,$fields_table->name) !!}
										{!! Form::select($bandera, $fields_table->options,  $fields_table-> value, ['class' => '', 'required']) !!}

										<?php $select = 1 ?>

									@elseif($fields_table->types_field->html == "textarea")

										{!! Form::label($fields_table->id,$fields_table->name) !!}
										{!! Form::textarea($bandera, $fields_table-> value ,['class' => '','required']) !!}

									@elseif($fields_table->types_field->html == "number")

										{!! Form::label($fields_table->id,$fields_table->name) !!}

										{!! Form::number($bandera, $fields_table-> value ,['class' => '','required']) !!}
										<!--<input type="{{ $type_field->html}}"></input>-->

									@else

										{!! Form::label($fields_table->id,$fields_table->name) !!}

										{!! Form::text($bandera, $fields_table-> value ,['class' => '','required']) !!}
									@endif

									<?php
										$bandera++;
										$var[$bandera] = array(
												"position" 	=> $bandera,
												"id_user"	=> '',
												"id_field_table"	=> $fields_table->id,
												"select"		=> $select
												//"id_app"	=> $aplication->id,
												//"id_table"	=> $table->id,
												//"id_type_field"		=> $type_field->id,
											);
									 ?>
								</div>
							@endforeach
						<HR>
						</div>
					@endforeach
			</div>
			<br>

		@endforeach
			<div class="fieldForm">
				{!! Form::label('id_user','Usuario') !!}
				{!! Form::select('id_user', $users,  null, ['class' => '', 'required']) !!}
				{{ Form::hidden('info',serialize($var), ['value' => $var]) }}
			</div>
			<HR>
			<div class="buttonTable">
				{!! Form::submit('Guardar',['class' => '']) !!}
				<a href="{{ route('Admin.FieldUser.index') }}">Cancelar</a>
			</div>
			{!! Form::close() !!}
	</div>
</div>

@endsection
