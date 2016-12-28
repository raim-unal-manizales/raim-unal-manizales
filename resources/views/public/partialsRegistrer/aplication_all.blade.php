<?php
	$bandera = 1000;
	$var = [];
 ?>

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
											{!! Form::label($fields_table->id,$fields_table->name) !!}
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
													//"id_user"	=> '',
													"id_field_table"	=> $fields_table->id,
													"select"		=> $select
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
			{{ Form::hidden('info',serialize($var), ['value' => $var]) }}
		</div>
		<div class="fieldForm">
			{{ Form::hidden('Aplication_all','Termine', ['value' => 'Termine']) }}
		</div>
