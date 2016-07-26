@extends('template.main')

@section('title', '')

@section('content')

<?php 
	$bandera = 0;
	$var = [];
 ?>

<!--<form method="POST" action="{{ route('Admin.FieldUser.store') }}" novalidate="novalidate">-->

	{!! Form::open(['route' => ['Admin.FieldUser.UpdateAll'], 'method' => 'POST']) !!}
	
	@foreach($aplications as $aplication)

		<div id="aplicaicon">

				{{ $aplication->name }}

				@foreach($aplication->tablas as $table)
					<div id="tables">
						{{ $table->name }}

						@foreach($table->fields_tables as $fields_table)
							<div id="fields_tables" class="fieldForm">
								<!--<label class="">{{ $fields_table->name }}</label>-->
								
								
		
								@foreach($fields_table->types_fields as $type_field)

										<?php $select = 0 ?>
										
										@if($type_field->html == "select")

											@if($table->name == "NEED Visual" || $table->name == "NEED Auditiva" || $table->name == "NEED Motriz" || $table->name == "NEED Cognitiva" || $table->name == "NEED Étnica")
												{!! Form::label($fields_table->id,$fields_table->description) !!}
											@else
												{!! Form::label($fields_table->id,$fields_table->name) !!}
											@endif
											

											{!! Form::select($bandera, $fields_table->options,  $fields_table-> value, ['class' => '', 'required']) !!}	

											<?php $select = 1 ?>

										@elseif($type_field->html == "textarea")

											{!! Form::label($fields_table->id,$fields_table->name) !!}
											<!--<textarea name="{{ $type_field->id}}" ></textarea>-->
											{!! Form::textarea($bandera, $fields_table-> value ,['class' => '','required']) !!}
										
										@elseif($type_field->html == "number")

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
													//"id_user"	=> Auth::user()->id,
													"id_field_table"	=> $fields_table->id,
													"select"		=> $select,
													"defect_value"	=>	$fields_table->value,
													"id_defect"		=> 	$fields_table->id_defect
													//"id_app"	=> $aplication->id,
													//"id_table"	=> $table->id,
													//"id_type_field"		=> $type_field->id,
												);
										 ?>
									
								@endforeach



							</div>
						@endforeach
					</div>
				@endforeach
		</div>
		<br>
		
	@endforeach
		
		<div class="fieldForm">
			{!! Form::hidden('id_user', $user_id,  ['value' => $user_id]) !!}

			{{ Form::hidden('info',serialize($var), ['value' => $var]) }}
		</div>
		
		<div class="buttonTable">
			{!! Form::submit('Guardar',['class' => '']) !!}
			<a href="{{ route('Admin.FieldUser.index') }}">Cancelar</a>
		</div>
					
		{!! Form::close() !!}
	<!--</form>	-->
@endsection