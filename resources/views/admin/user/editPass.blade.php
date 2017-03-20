@extends('template.main')

@section('title', 'Sobreescribir Contraseña')

@section('content')
    <!--
	// cabezera del contenido
-->
    <div class="contentHeader">
        <h1><span class="label label-primary">Editar:</span><strong>  Contraseña de usuario</strong></label></h1>
    </div>
    <!--
        //fin de la cabezera del contenido
    -->
    @include('partials.displayErrors')

    <div class="row">
        <div class="col-md-7 col-md-offset-2 well">
            {!! Form::open(['route' => ['Admin.User.storePass', $id_user], 'method'=> 'POST' , 'class'=>'form-horizontal']) !!}


            <div class="fieldForm">
                {!! Form::label('password','Contraseña') !!}
                {!! Form::password('password', ['class' => '', 'placeholder' => '**********','required']) !!}

            </div>

            <div class="fieldForm">
                {!! Form::label('password_confirmation','Confirmación de Contraseña') !!}
                {!! Form::password('password_confirmation', ['class' => '', 'required']) !!}
            </div>
            <div class="fieldForm">
                {{ Form::hidden('id_user',$id_user, ['value' => $id_user]) }}
            </div>
            <div class="">
                {!! Form::submit('Aceptar',['class' => 'btn btn-primary pull-right']) !!}
                <a href="{{ route('Admin.User.show', $id_user) }}" class="btn btn-danger">Cancelar</a>
            </div>


            {!! Form::close() !!}
        </div>
    </div>

@endsection