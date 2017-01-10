@extends('template.main')

@section('title', 'Editar Rol ')

@section('content')

<!--
	// cabezera del contenido
-->
  <div class="contentHeader">
  		<h1><span class="label label-primary">Editar:</span><strong>  Rol</strong></label></h1>
  </div>
<!--
	//fin de la cabezera del contenido
-->
@include('partials.displayErrors')
<div class="row">
  <div class="col-md-7 col-md-offset-2 well">
  	{!! Form::model($rol,['route' => ['Admin.Rol.update', $rol], 'method'=> 'PUT', 'class'=>'form-horizontal']) !!}

      <div class="fieldForm">
  			{!! Form::label('name','Nombre') !!}
  			{!! Form::text('name', null,['class' => '', 'placeholder' => 'Nombre Del Rol']) !!}
  		</div>

  		<div class="fieldForm">
  			{!! Form::label('description','Descripcion') !!}
  			{!! Form::textarea('description', null ,['class' => '']) !!}
  		</div>

  		<div class="">
        <hr>
  			{!! Form::submit('Actualizar',['class' => 'btn btn-primary pull-right']) !!}
  			<a href="{{ route('Admin.Rol.index') }}" class="btn btn-danger">Cancelar</a>
  		</div>
  	{!! Form::close() !!}
  </div>
</div>
@endsection
