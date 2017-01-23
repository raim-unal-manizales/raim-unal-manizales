<?php
  $bandera = 1000;
  $var = [];
 ?>
  @foreach($aplications as $aplication)

    <h5>{{ $aplication->name }}</h5>
    <div id="aplicaicon" class="well well-sm">

        @foreach($aplication->tables as $table)
          <div id="tables">
            {{ $table->name }}

            @foreach($table->fields_tables as $fields_table)
              <div id="fields_tables" class="fieldForm">
                  <?php
                    $locale_relation = false;
                    $select = 0;
                    $userFieldTable = infoUserFielTable($fields_table,$user_id);
                   ?>
                   @if ($fields_table->locale_relation !== "Otro")
                      {{ Form::hidden($bandera, $fields_table->locale_relation , ['value' => $fields_table->locale_relation]) }}
                      <?php $locale_relation = true ?>


                  @elseif($fields_table->types_field->html == "select")

                      {!! Form::label($fields_table->id,$fields_table->name) !!}
                      {!! Form::select(
                                $bandera,
                                $fields_table->options->lists('name','id'),
                                $userFieldTable->value,
                                [
                                  'class' => '',
                                  'required'
                                ]
                          )
                      !!}

                      <?php $select = 1 ?>

                    @elseif($fields_table->types_field->html == "textarea")

                      {!! Form::label($fields_table->id,$fields_table->name) !!}
                      {!! Form::textarea($bandera, $userFieldTable->value ,['class' => '','required']) !!}

                    @elseif($fields_table->types_field->html == "number")

                      {!! Form::label($fields_table->id,$fields_table->name) !!}
                      {!! Form::number($bandera, $userFieldTable->value ,['class' => '','required']) !!}

                    @else
                      {!! Form::label($fields_table->id,$fields_table->name) !!}
                      {!! Form::text($bandera, $userFieldTable->value, ['class' => '','required']) !!}
                    @endif

                    <?php
                      $bandera++;
                      $var[$bandera] = array(
                          "position" 				=> $bandera,
                          "id_field_table"	=> $fields_table->id,
                          "select"					=> $select,
                          "defect_value"		=> $userFieldTable->value,
                          "id_defect"				=> $userFieldTable->id,
                          "locale_relation" => $locale_relation
                        );
                     ?>
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
