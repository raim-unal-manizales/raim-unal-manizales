<?php
	$bandera = 1000;
	$var = [];
 ?>

	<br>
	<div class="panel panel-default">

		<div class="panel-body">
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
											{!! Form::select($bandera, $fields_table->options->lists('name','id'),  $fields_table-> value, ['class' => '', 'required']) !!}

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
													"position" 	=> $bandera,
													//"id_user"	=> '',
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
					{{ Form::hidden('info',serialize($var), ['value' => $var]) }}
				</div>
				<div class="fieldForm">
					{{ Form::hidden('Aplication_all','Termine', ['value' => 'Termine']) }}
				</div>

		</div>
	</div>
