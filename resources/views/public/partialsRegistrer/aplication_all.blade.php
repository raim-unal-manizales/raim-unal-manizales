<?php
	$bandera = 1000;
	$var = [];
	$locale_relation = false;
	$select = 0;
 ?>

	<br>
	<div class="panel panel-default">

		<div class="panel-body">

			@foreach($aplications as $aplication)

				<h5>{{ $aplication->name }}</h5>
				<div id="aplicaicon" class="well well-sm">
						@foreach($aplication->tables as $table)
							<div id="tables" class="">
								{{ $table->name }}
								@foreach($table->fields_tables as $fields_table)
									<div id="fields_tables" class="fieldForm">

										<?php
											$locale_relation = false;
											$select = 0;
										 ?>
										 
										@if ($fields_table->locale_relation !== "Otro")
												{{ Form::hidden($bandera, $fields_table->locale_relation , ['value' => $fields_table->locale_relation]) }}
												<?php $locale_relation = true ?>

										@elseif($fields_table->types_field->html == "select")

												{!! Form::label($fields_table->id,$fields_table->name) !!}
												{!! Form::select(
																	$bandera,
																	$fields_table->options->lists('name','id'),
																	$fields_table-> value,
																	[
																		'class' => '',
																		'required'
																	]
														)
												!!}

												<?php $select = 1 ?>

											@elseif($fields_table->types_field->html == "textarea")

												{!! Form::label($fields_table->id,$fields_table->name) !!}
												{!! Form::textarea($bandera, $fields_table-> value ,['class' => '','required']) !!}

											@elseif($fields_table->types_field->html == "number")

												{!! Form::label($fields_table->id,$fields_table->name) !!}
												{!! Form::number($bandera, $fields_table-> value ,['class' => '','required']) !!}

											@else
												{!! Form::label($fields_table->id,$fields_table->name) !!}
												{!! Form::text($bandera, $fields_table-> value ,['class' => '','required']) !!}
											@endif


										<?php
											$bandera++;
											$var[$bandera] = array(
													"position" 				=> $bandera,
													//"id_user"				=> '',
													"id_field_table"	=> $fields_table->id,
													"select"					=> $select,
													//"id_app"				=> $aplication->id,
													//"id_table"			=> $table->id,
													//"id_type_field"	=> $type_field->id,
													"locale_relation" => $locale_relation
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
					{{ Form::hidden('info',serialize($var), ['value' => $var]) }}
				</div>
				<div class="fieldForm">
					{{ Form::hidden('Aplication_all','Termine', ['value' => 'Termine']) }}
				</div>

		</div>
	</div>
