@extends('template.main')

@section('title', 'Crear Campo de Tabla')

@section('content')
<!--
	// cabezera del contenido
-->
  <div class="contentHeader">
  		<h1><span class="label label-primary">Crear:</span><strong>  Campo de Tabla</strong></label></h1>
  </div>

<!--
	//fin de la cabezera del contenido
-->
@include('partials.displayErrors')

<div class="row">
  <div class="col-md-7 col-md-offset-2 well">

  	{!! Form::open(['route'=> 'Admin.FieldTable.store','method'=> 'POST' , 'class'=>'form-horizontal']) !!}
  		<div class="form-group">
  			{!! Form::label('name','Nombre: ') !!}
  			{!! Form::text('name', null ,['class' => '', 'placeholder' => 'Nombre']) !!}
  		</div>

  		<div class="fieldForm">
  			{!! Form::label('name_db','Nombre base datos: ') !!}
  			{!! Form::text('name_db', null ,['class' => '', 'placeholder' => 'Nombre en modelo externo']) !!}
  		</div>

  		<div class="fieldForm">
  			{!! Form::label('description','Descripción: ') !!}
  			{!! Form::textarea('description', null ,['class' => '']) !!}
  		</div>

  		<div class="fieldForm">
  			{!! Form::label('field_recommendation','¿Campo Para Recomendacion?: ') !!}
  			{!! Form::select('field_recommendation', ['False'=>'No','True'=>'Si'] ,null, ['class' => '']) !!}
  		</div>

  		<div class="fieldForm">
  			{!! Form::label('field_required','¿Campo Requerido?: ') !!}
  			{!! Form::select('field_required', ['False'=>'No','True'=>'Si'] ,null, ['class' => '']) !!}
  		</div>

  		<div class="fieldForm">
  			{!! Form::label('id_table','Tabla: ') !!}
  			{!! Form::select('id_table', $table ,null, ['class' => '']) !!}

  		</div>
  		<div class="fieldForm">
  			{!! Form::label('id_type_field','Tipo de Campo: ') !!}
  			{!! Form::select('id_type_field', $typeField ,null, ['class' => '']) !!}

  		</div>

      <div class="fieldForm">
        {!! Form::label('locale_relation','Relación Local: ') !!}
        {!! Form::select(
                'locale_relation',
                [
                  'Otro'            => 'No Existente',
                  'user_name'       => 'Nombre de Usuario',
                  'first_name'      => 'Primer Nombre',
                  'second_name'     => 'Segundo Nombre',
                  'last_name'       => 'Apellido',
                  'educativeLevel'  => 'Nivel Educativo',
                  'institution'     => 'Institución Educativo',
                  'email'           => 'Correo Electronico',
                  'encript'         => 'Contraseña',
                  'birth_date'      => 'Fecha de Nacimiento',
                  'language'        => 'Lengua Nativa'
                ] ,
                null,
                ['class' => '']
            )
        !!}
      </div>

  		<div class="">
        <hr>
  			<a href="{{ route('Admin.FieldTable.index') }}" class="btn btn-danger">Cancelar</a>
        {!! Form::submit('Registrar',['class' => 'btn btn-primary pull-right']) !!}
  		</div>

  	{!! Form::close() !!}
  </div>
</div>

@endsection
