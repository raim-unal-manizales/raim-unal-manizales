@extends('template.main')

@section('title', 'Listar Roles')

@section('content')

<!--
	// cabezera del contenido
-->
  <div class="contentHeader">
  		<h1>Listar Aplicaciones</h1>
   		<a href=" {{ route('Admin.Aplication.create') }}" class="">Nueva Aplicacion</a>

  </div>

<!--
	//fin de la cabezera del contenido
-->
<!--
	//cuerpo del contenido
-->
@include('flash::message')
  <div class="">

	<table class="zebraTabla">
		<thead>
			<th>#</th>
			<th>Name</th>
			<th>Tipo</th>
      <th>Estado</th>
      <th>Requiere Información</th>
      <th>Requiere Personalización</th>
      <th>Requiere NEED</th>
      <th>Requiere Estilos de Aprendizaje</th>
      <th>framework</th>

			<th>Acciones</th>
		</thead>
		<tbody>

			@foreach($aplications as $aplication)
				<tr>
					<td>{{ $aplication-> id}}</td>
					<td>{{ $aplication-> name}}</td>
          <td>
            @if($aplication-> type == "Repositorio")
              <span class="label label-primary">Repositorio</span>
            @elseif($aplication-> type == "Herramienta_Autor")
              <span class="label label-warning">Herramienta de Autor</span>
            @elseif($aplication-> type == "otro")
              <span class="label label-default">{{ $aplication-> type}}</span>
            @endif
          </td>
          <td>
            @if($aplication-> state == "Activo")
              <span class="label label-success">{{ $aplication-> state}}</span>
            @elseif($aplication-> state == "Inactivo")
              <span class="label label-default">{{ $aplication-> state}}</span>
            @endif
          </td>
          <td>
            @if($aplication-> rquiered_information == "True")
              <span class="label label-success">{{ $aplication-> rquiered_information}}</span>
            @elseif($aplication-> rquiered_information == "False")
              <span class="label label-default">{{ $aplication-> rquiered_information}}</span>
            @endif
          </td>
          <td>
            @if($aplication-> rquiered_personalization == "True")
              <span class="label label-success">{{ $aplication-> rquiered_personalization}}</span>
            @elseif($aplication-> rquiered_personalization == "False")
              <span class="label label-default">{{ $aplication-> rquiered_personalization}}</span>
            @endif
          </td>
          <td>
            @if($aplication-> rquiered_NEDD == "True")
              <span class="label label-success">{{ $aplication-> rquiered_NEDD}}</span>
            @elseif($aplication-> rquiered_NEDD == "False")
              <span class="label label-default">{{ $aplication-> rquiered_NEDD}}</span>
            @endif
          </td>
          <td>
            @if($aplication-> rquiered_learningStyle == "True")
              <span class="label label-success">{{ $aplication-> rquiered_learningStyle}}</span>
            @elseif($aplication-> rquiered_learningStyle == "False")
              <span class="label label-default">{{ $aplication-> rquiered_learningStyle}}</span>
            @endif
          </td>
          <td>
            @if($aplication-> systemRoute == "True")
              <span class="label label-success">{{ $aplication-> systemRoute}}</span>
            @elseif($aplication-> systemRoute == "False")
              <span class="label label-default">{{ $aplication-> systemRoute}}</span>
            @endif
          </td>
					<td>
						<div class="buttonsTable">
							<a href="{{ route('Admin.Aplication.show', $aplication->id) }}" class="" title="Ver" alt="Ver" value="ver"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>

							<a href="{{ route('Admin.Aplication.edit', $aplication->id) }}" class="" title="Editar" alt="Editar" value="Editar"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>

							<a href="{{ route('Admin.Aplication.delete', $aplication->id) }}" class="" title="Eliminar" alt="Eliminar" value="Eliminar"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
						</div>
					</td>
				</tr>
			@endforeach

		</tbody>

	</table>
	{!! $aplications->render() !!}
  </div>
<!--
	//fin del cuerpo del contenido
-->

@endsection
