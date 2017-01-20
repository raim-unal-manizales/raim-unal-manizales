@extends('template.main')

@section('title', 'Página Principal')

@section('content')

@include('flash::message')

    <div class="contentHeader row">
        <h1 class="pull-left">RAIM: Implementación de un framework apoyado en tecnologías móviles y de realidad aumentada para entornos educativos ubicuos, adaptativos, accesibles e interactivos para todos.</h1>
    </div>

    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-6">
            <div class="col.md-2">
                <div class="panel panel-default">
                    <div class="panel-body text-center">
                        <img width="400px" height="462px" src="{{ asset('docs/cubo.png') }}" alt="Imagen modelo conceptual RAIM" title="Imagen modelo conceptual RAIM">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-12 col-lg-6">
            <div class="col.md-2">
                <div class="panel panel-default">
                    <div class="panel-body text-center">
                        <img width="400px" height="273px" src="{{ asset('docs/apps.png') }}" alt="Imagen mosaico aplicaciones RAIM" title="Imagen mosaico aplicaciones RAIM">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="col.md-2">
                <div class="panel panel-default">
                    <div class="panel-body text-center">
                        <a href="http://www.colciencias.gov.co/" target="_blank">
                            <img width="325px" height="75px" src="{{ asset('docs/logo_colciencias.png') }}" alt="Logo Colciencias" title="Logo Colciencias">
                        </a>
                        <a href="http://www.mineducacion.gov.co/1759/w3-channel.html" target="_blank">
                            <img width="307px" height="75px" src="{{ asset('docs/logo_min_educacion.png') }}" alt="Logo Ministerio de Educación" title="Logo Ministerio de Educación">
                        </a>
                        <a href="http://www.manizales.unal.edu.co/" target="_blank">
                            <img width="181px" height="75px" src="{{ asset('docs/escudo_un_sede_manizales.jpg') }}" alt="Escudo Universidad Nacional de Colombia - Sede Manizales" title="Escudo Universidad Nacional de Colombia - Sede Manizales">
                        </a>
                        <a href="http://medellin.unal.edu.co/" target="_blank">
                            <img width="182px" height="75px" src="{{ asset('docs/escudo_un_sede_medellin.png') }}" alt="Escudo Universidad Nacional de Colombia - Sede Medellín" title="Escudo Universidad Nacional de Colombia - Sede Medellín">
                        </a>
                        <a href="http://froac.manizales.unal.edu.co/GAIA/" target="_blank">
                            <img width="138px" height="75px" src="{{ asset('docs/logo_gaia.jpg') }}" alt="Logo Grupo de Ambientes Inteligentes Adaptativos - GAIA" title="Logo Grupo de Ambientes Inteligentes Adaptativos - GAIA">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
