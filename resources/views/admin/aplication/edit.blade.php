@extends('template.main')

@section('title', 'Editar Aplicacion ')

@section('content')

<!--
	// cabezera del contenido
-->
<div class="contentHeader">
    <h1><span class="label label-primary">Editar:</span><strong>  Aplicación</strong></label></h1>
</div>

<!--
	//fin de la cabezera del contenido
-->
@include('partials.displayErrors')

<div class="row">
  <div class="col-md-7 col-md-offset-2 well">

	{!! Form::model($aplication,['route' => ['Admin.Aplication.update', $aplication], 'files' => true, 'method'=> 'PUT', 'class'=>'form-horizontal']) !!}

		<div class="fieldForm">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('name', null,['class' => '', 'placeholder' => 'Nombre Del Rol']) !!}
		</div>

		<div class="fieldForm">
			{!! Form::label('url','Url') !!}
			{!! Form::text('url', null,['class' => '']) !!}
		</div>

		<div class="fieldForm">
			{!! Form::label('type','Tipo') !!}
			{!! Form::select('type',['Herramienta_Autor'=> 'Herramienta de Autor', 'Repositorio'=> 'Repositorio'], null, ['class' => '']) !!}
		</div>

		<div class="fieldForm">
			{!! Form::label('state','Estado') !!}
			{!! Form::select('state',['Activo'=> 'Activo', 'Inactivo'=> 'Inactivo'], null, ['class' => '']) !!}
		</div>

		<div class="fieldForm">
			{!! Form::label('rquiered_information','¿Requiere Información?') !!}
			{!! Form::select('rquiered_information',['True'=> 'Si', 'False'=> 'No'], null, ['class' => '']) !!}
		</div>

		<div class="fieldForm">
			{!! Form::label('rquiered_personalization','¿Requiere Personalización?') !!}
			{!! Form::select('rquiered_personalization',['True'=> 'Si', 'False'=> 'No'], null, ['class' => '']) !!}
		</div>

		<div class="fieldForm">
			{!! Form::label('rquiered_NEDD','¿Requiere NEED?') !!}
			{!! Form::select('rquiered_NEDD',['True'=> 'Si', 'False'=> 'No'], null, ['class' => '']) !!}
		</div>

		<div class="fieldForm">
			{!! Form::label('rquiered_learningStyle','¿Requiere Estilos de Aprendizaje?') !!}
			{!! Form::select('rquiered_learningStyle',['True'=> 'Si', 'False'=> 'No'], null, ['class' => '']) !!}
		</div>

    <div class="fieldForm">
      {!! Form::label('systemRoute','¿Rutas definidad por framework?') !!}
      {!! Form::select('systemRoute',['True'=> 'Si', 'False'=> 'No'], null, ['class' => '']) !!}
    </div>

		<div class="fieldForm">
			{!! Form::label('description','Descripcion') !!}
			{!! Form::textarea('description', null ,['class' => '']) !!}
		</div>

		<div class="fieldForm">
			{!! Form::label('logo','logo') !!}
			{!! Form::file('logo') !!}
		</div>

		<div class="">
			{!! Form::submit('Guardar',['class' => 'btn btn-primary pull-right']) !!}
			<a href="{{ route('Admin.Aplication.index') }}" class="btn btn-danger">Cancelar</a>
		</div>

	{!! Form::close() !!}
  </div>
</div>
@endsection
