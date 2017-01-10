@extends('template.main')

@section('title', '')

@section('content')
	<?php
		$bandera = 0;
		$var = [];
	 ?>
<br>
<div class="panel panel-default">
	<div class="panel-heading"><h4>Información para aplicaiones</h4></div>
	<div class="panel-body">
		@include('partials.displayErrors')
		@include('flash::message')
		{!! Form::open(['route' => 'Admin.FieldUser.store', 'method' => 'POST' , 'class'=>'form-horizontal']) !!}

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
										{!! Form::select(
											$bandera,
											$fields_table->options->lists('name','id'),
											$fields_table-> value,
											[
												'required' => $fields_table->field_required,
												'class' => ''
											])
										!!}

										<?php $select = 1 ?>

									@elseif($fields_table->types_field->html == "textarea")

										{!! Form::label($fields_table->id,$fields_table->name) !!}
										{!! Form::textarea($bandera, $fields_table-> value ,['class' => '']) !!}

									@elseif($fields_table->types_field->html == "number")

										{!! Form::label($fields_table->id,$fields_table->name) !!}
										{!! Form::number($bandera, $fields_table-> value ,['class' => '']) !!}

									@else

										{!! Form::label($fields_table->id,$fields_table->name) !!}

										{!! Form::text($bandera, $fields_table-> value ,['class' => '']) !!}
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
				{!! Form::select('id_user', $users,  null, ['class' => '']) !!}
				{{ Form::hidden('info',serialize($var), ['value' => $var]) }}
			</div>
			<div class="">
				<HR>
				{!! Form::submit('Guardar',['class' => 'btn btn-primary pull-right']) !!}
				<a href="{{ route('Admin.FieldUser.index') }}" class="btn btn-danger">Cancelar</a>
			</div>
			{!! Form::close() !!}
	</div>
</div>

@endsection
