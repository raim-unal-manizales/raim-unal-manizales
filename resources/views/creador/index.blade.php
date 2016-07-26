@extends('template.main')

@section('title', 'Seccion de  Creador')

@section('content')

	<div class="contentHeader row">
		<h1 class="pull-left">Listado de aplicaciones</h1>
	</div>
<br>
<div class="row">
	<div class="contentHeader row">
		<h3 class="pull-left">Buscador de Objetos</h3>
	</div>

           	<div class="col-lg-3 col-md-6">
				<div class="col.md-2">
					<div class="panel panel-default">
						<div class="panel-body">
								
							<a href="{{ route('Public.searchOa') }}" class="">
								<img class="img-responsive img-article" src="" alt="...">
							</a>
								
							<a href="{{ route('Public.searchOa') }}" class=""><h3 class="text-center"></h3></a>
							<hr>
							<i class="fa fa-folder-open-o"></i> <a href="{{ route('Public.searchOa') }}">Buscar Objetos</a>
								
							<div class="pull-right">
								<i class="glyphicon glyphicon-share-alt"></i>
							</div>
								
						</div>						
					</div>					
				</div>
            </div>
</div>

<hr>

<div class="row">

	<div class="contentHeader row">
		<h3 class="pull-left">Herrmientas de Autor (Crear Objetos de aprendizaje)</h3>
	</div>

	@foreach($aplications as $aplication)
	
	@if($aplication->type == "Herramienta_Autor")
    <div class="col-lg-3 col-md-6">
		
			<div class="col.md-2">
				<div class="panel panel-default">
					<div class="panel-body text-center">


								
						<a ref="#!" target="_blank" class="btn btn-redicrect" id="{{$aplication->id}}" onclick="enviodatos({{$aplication->id}},{{Auth::user()->id}})" >
							<img class="img-responsive img-article"  style="max-width: 100px; max-height: 100px; min-width: 100px; min-height: 100px;"  src="{{ asset(''.$aplication->logo) }}" alt="...">
						</a>
								
						<a ref="" class=""><h3 class="text-center" onclick="enviodatos({{$aplication->id}},{{Auth::user()->id}})"></h3></a>
						<hr>
						
						<i class="fa fa-folder-open-o"></i>

						 <a ref="{{ $aplication->url }}" target="_blank">{{ $aplication->name }}</a>
														
						<div class="pull-right">
							<i class="glyphicon glyphicon-share-alt"></i>
						</div>
								
					</div>						
				</div>					
			</div>
		
   	</div>
   	@endif
   	@endforeach
</div>

<hr>

<div class="row">

	<div class="contentHeader row center">
		<h3 class="pull-left">Repositorios (Etiquetar Y Subir Objetos)</h3>
	</div>
<br>
	@foreach($aplications as $aplication)
	
	@if($aplication->type == "Repositorio" and $aplication->name != "RAIM")
    <div class="col-lg-3 col-md-6">
		
			<div class="col.md-2">
				<div class="panel panel-default">
					<div class="panel-body text-center">
	
						<a ref="#!" target="_blank" class="btn btn-redicrect" id="{{$aplication->id}}" onclick="enviodatos({{$aplication->id}},{{Auth::user()->id}})" >
							<img class="img-responsive img-article"  style="max-width: 100px; max-height: 100px; min-width: 100px; min-height: 100px;"  src="{{ asset(''.$aplication->logo) }}" alt="...">
						</a>
								
						<a ref="" class=""><h3 class="text-center" onclick="enviodatos({{$aplication->id}},{{Auth::user()->id}})"></h3></a>
						<hr>
						
						<i class="fa fa-folder-open-o"></i>

						 <a ref="{{ $aplication->url }}" target="_blank">{{ $aplication->name }}</a>
														
						<div class="pull-right">
							<i class="glyphicon glyphicon-share-alt"></i>
						</div>
								
					</div>						
				</div>					
			</div>
		
   	</div>
   	@endif
   	@endforeach
</div>


{!! Form::open(['route' => ['RedirectRoute.session'], 'method' => 'POST','id'=>'aplication']) !!}
	{{ Form::hidden('invisible', 'secret', array('id' => 'invisible_id')) }}
{!! Form::close() !!}

<form action="" method=post name="form_salida" id="form_salida"> 
	<input type="hidden" name="Usuario" value="valor"> 
	<input type="hidden" name="Contrasenia" value="otroValor"> 
</form>

@endsection



@section('javascript')

<script>
	function enviodatos(app_id,user_id){

		var array = {
		   app_id: app_id,
		   user_id: user_id,
		};

		document.getElementById("invisible_id").value= array;
		var form = $('#aplication');
		var data = form.serialize();
		var url = form.attr('action');

		$.post(url, array, function (result) {
			
			$('#form_salida').attr('action', result['ruta']);

			window.open(result['ruta']);
						
			console.log(result);
		});

	}
</script>


@endsection