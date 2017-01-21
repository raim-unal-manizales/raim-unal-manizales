@extends('template.main')

@section('title', 'Editar estilos de aprendizaje')

@section('content')

<div class="row row-centered">
    <br>
    <div class="col-md-12">
        {!! Form::open(['route'=> 'Admin.User.storeEstilosEdit',$id,'method'=> 'POST','id'=>'commentForm', 'class'=>'form-horizontal']) !!}

          <h3>Estilos de Aprendizaje</h3>

          @include('partialsUserProfil.learning_style')
          <div class="">

            <a href="{{ route('Admin.User.show',$id) }}" class="btn btn-danger">Cancelar</a>
            {!! Form::hidden('id_user', $id,  ['value' => $id]) !!}

            {!! Form::submit('Aceptar',['class' => 'btn btn-primary pull-right']) !!}
            <hr>
          </div>

        {!! Form::close() !!}
    </div>
</div>

@endsection
