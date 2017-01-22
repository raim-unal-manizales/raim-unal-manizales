@extends('template.main')

@section('title', 'Vista de Usuario')

@section('content')
  <div class="contentHeader">
  		<h1>Perfil de usuario</h1>
  </div>
@include('flash::message')
  <div class="row">
    <!-- Inicio de Informacion Basica-->
    <div class="col-md-4">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="">
            <img class="profile-user-img img-responsive img-circle center-block" width="100" height="100" src="{{ asset('images/user-init.png') }}" alt="User profile picture">
            <h3 class="profile-username text-center">{!! $user->user_name !!}</h3>
            <p class="text-muted text-center">{!! $user->email !!}</p>
          </div>

          <ul class="list-group">
            <li class="list-group-item">
              <b>Nombre</b>
              <p class="pull-right">{!! $user->first_name.' '.$user->second_name.' '.$user->last_name !!}</p>
            </li>
            <li class="list-group-item">
              <b>Rol</b>
              <p class="pull-right">{!! $user->rol->name!!}</p>
            </li>
            <li class="list-group-item">
              <b>Nacimiento</b>
              <p class="pull-right">{!! $user->birth_date !!}</</p>
            </li>
            <li class="list-group-item">
              <b>Lenguaje</b>
              <p class="pull-right">{!! $user->language !!}</p>
            </li>
            <li class="list-group-item">
              <p class="text-center"><b>{!! $user->institution !!}</b></p>
            </li>
          </ul>
        </div>
        <div class="panel-footer">
          <a href="{{ route('Admin.User.index') }}" class="btn btn-danger">Volver</a>
          <a href="{{ route('Admin.User.edit', $user->id) }}" class="btn btn-primary pull-right">Editar</a>
        </div>
      </div>
    </div>
    <div class="col-md-8">
     <!-- Inicio de estilos de aprendizaje -->
            <div class="panel panel-default">
              <div class="panel-body">
                @if ($user->learningStyle()->first()->reference_learning_styles !== 1 )
                  <div class="col-md-7">
                    <h4>Estilo de aprendizaje dominante</h4>
                    <hr>
                    <p class="text-justify">
                      <strong>
                        {!! $user->learningStyle->first()->reference_styles->learningStile !!}:
                      </strong>
                      {!! $user->learningStyle->first()->reference_styles->description !!}
                    </p>
                    <hr>
                    <a href="{{ route('Admin.User.estilosEdit', $user->id) }}" class="btn btn-primary center-block">Volver a realizar test</a>
                  </div>
                  <div class="col-md-5">
                    <h4>Distribucion de estilos</h4>
                    <hr>
                    <div class="col-md-12">
                      <b>visual: </b>
                      <p class="pull-right">{!! $user->learningStyle->first()->visual !!}%</p>
                    </div>
                    <div class="col-md-12">
                      <b>Kinestesico: </b>
                      <p class="pull-right">{!! $user->learningStyle->first()->kinestesic !!}%</p>
                    </div>
                    <div class="col-md-12">
                      <b>Auditivo: </b>
                      <p class="pull-right">{!! $user->learningStyle->first()->auditory !!}%</p>
                    </div>
                    <div class="col-md-12">
                      <b>Lector: </b>
                      <p class="pull-right">{!! $user->learningStyle->first()->reader !!}%</p>
                    </div>
                    <div class="col-md-12">
                      <b>Global: </b>
                      <p class="pull-right">{!! $user->learningStyle->first()->global !!}%</p>
                    </div>
                    <div class="col-md-12">
                      <b>Secuencial: </b>
                      <p class="pull-right">{!! $user->learningStyle->first()->sequential !!}%</p>
                    </div>
                  </div>
                @else
                  <div class="col-md-12">
                    <h4>Estilo de aprendizaje dominante</h4>
                    <p class="text-justify">
                      Aun no tienes completado el test de estilos de aprendizaje, esta información es importante
                      para poder recomendarte objetos de aprendizaje mas acordes con tu forma de entender el mundo.
                      Por favor realiza el test en el siguiente enlace:
                    </p>
                    <a href="{{ route('Admin.User.estilosEdit', $user->id) }}" class="btn btn-primary center-block">Realizar test</a>
                  </div>
                @endif

              </div>

            </div>
            <!-- Inicio de necesidades especiales-->

            <div class="panel panel-default">
              <div class="panel-body">
                @if ($user->need->NEED == "Si")
                  <h4>Necesidades Espiciales de aprendizaje</h4>
                  <hr>
                  <div class="col-md-2">
                    <b>Visual: </b> @if ($user->need->V == "Si") <label class="label label-success">Si</label> @else <label class="label label-danger"> No </label> @endif
                  </div>
                  <div class="col-md-3">
                    <b>Auditiva: </b>@if ($user->need->A == "Si") <label class="label label-success">Si</label> @else <label class="label label-danger"> No </label> @endif

                  </div>
                  <div class="col-md-2">
                    <b>Motriz: </b>@if ($user->need->M == "Si") <label class="label label-success">Si</label> @else <label class="label label-danger"> No </label> @endif

                  </div>
                  <div class="col-md-3">
                    <b>Cognitiva: </b>@if ($user->need->C == "Si") <label class="label label-success">Si</label> @else <label class="label label-danger"> No </label> @endif

                  </div>
                  <div class="col-md-2">
                    <b>Etnica: </b>@if ($user->need->E == "Si") <label class="label label-success">Si</label> @else <label class="label label-danger"> No </label> @endif
                  </div>
                @else
                  no tengo neet
                @endif

              </div>
              <div class="panel-footer text-right">
                  <a href="{{ route('Admin.User.edit', $user->id) }}" class="btn btn-primary">Editar Needs</a>
              </div>
            </div>
    </div>
  </div>

<!-- Informacion de aplicaciones -->
<div class="panel panel-default">
  <div class="panel-heading text-right">
        <h3 class="panel-title text-left">Infomación de aplicaciones</h3>
        <a href=" {{ route('Admin.FieldUser.EditApps', $user->id) }}" class="btn btn-primary">Editar información de aplicaciones</a>
  </div>
  <div class="panel panel-body">
    @foreach ($aplications as $aplication)
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="col-md-4 text-cente">
              <img class="profile-user-img img-responsive img-rounded center-block" width="150" height="150" src="{{asset($aplication->logo)}} " alt="User profile picture">
              <h4><p class="text-center">{{ $aplication->name }}</p></h4>
            </div>
            <div class="col-md-8">
              @if ($aplication->tablas->first() != null)
                @foreach ($aplication->tablas as $table)
                  <div class="panel panel-default">
                    <div class="panel-body">
                      <h5 class="panel-title">{{ $table->name }}</h5>
                      <ul class="list-group">
                        @foreach($table->fields_tables as $fields_table)
                          @if ($fields_table->name !== "contraseña")
                            <li class="list-group-item">
                              <b>{{ $fields_table->name }}: </b>
                              <p class="pull-right">{{ $fields_table->value }}</p>
                            </li>
                          @endif
                        @endforeach
                      </ul>
                    </div>
                  </div>
                @endforeach
              @else
                <div class="">
                  <div class="panel panel-default">
                    <div class="panel-body">
                      <p class="text-center">No requiere Información para funcionar</p>
                    </div>
                  </div>
                </div>
              @endif
            </div>
          </div>
          <div class="panel-footer text-right"><a href="{{ route('Admin.User.edit', $user->id) }}" class="">Visitar</a></div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection
