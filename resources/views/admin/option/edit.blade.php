@extends('template.main')

@section('title', 'Editar Option')

@section('content')
<!--
	// cabezera del contenido
-->
<div class="contentHeader">
  <h1><span class="label label-primary">Editar:</span><strong>  Opción</strong></label></h1>
</div>

<!--
	//fin de la cabezera del contenido
-->
<div class="row">
  <div class="col-md-7 col-md-offset-2 well">
	{!! Form::model($option,['route' => ['Admin.Option.update', $option], 'method'=> 'PUT' , 'class'=>'form-horizontal']) !!}

		<div class="fieldForm">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('name', null,['class' => '', 'placeholder' => 'Nombre','required']) !!}
		</div>

		<div class="fieldForm">
			{!! Form::label('description','Descripcion') !!}
			{!! Form::textarea('description', null,['class' => '', 'placeholder' => '']) !!}
		</div>

		<div class="fieldForm">
			{!! Form::label('id_field_table','campo de tabla') !!}
			{!! Form::select('id_field_table', $fieldTable ,null, ['class' => '']) !!}
		</div>

		<div class="fieldForm">
			{!! Form::label('id_option_app','id opcion en aplicacion') !!}
			{!! Form::number('id_option_app', null ,['class' => '', 'placeholder' => 'Nombre']) !!}
		</div>

		<div class="">
      <hr>
			{!! Form::submit('Editar',['class' => 'btn btn-primary pull-right']) !!}
			<a href="{{ route('Admin.Option.index') }}"  class="btn btn-danger">Cancelar</a>
		</div>

	{!! Form::close() !!}
  </div>
</div>

@endsection
