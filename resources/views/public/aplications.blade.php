@extends('template.main')

@section('title', 'Listado Aplicaciones')

@section('content')

<div class="contentHeader row">
	<h1 class="pull-left">Listado de aplicaciones</h1>
</div>

<div class="row">
	@foreach($aplications as $aplication)
    <div class="col-lg-3 col-md-6">

			<div class="col.md-2">
				<div class="panel panel-default">
					<div class="panel-body text-center">

						<a href="{{ asset(''.$aplication->url) }} " target="_blank" class="">
							<img class="img-responsive img-article"  style="max-width: 100px; max-height: 100px; min-width: 100px; min-height: 100px;"  src="{{ asset($aplication->logo) }}" alt="...">
						</a>

						<a href="" class=""><h3 class="text-center"></h3></a>
						<hr>

						<i class="fa fa-folder-open-o"></i>

						 <a href="{{ asset(''.$aplication->url) }}" target="_blank">{{ $aplication->name }}</a>

						<div class="pull-right">
							<i class="glyphicon glyphicon-share-alt"></i>
						</div>

					</div>
				</div>
			</div>

   	</div>
   	@endforeach
</div>

@endsection
