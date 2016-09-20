@extends('template.main')

@section('title', 'Comunidades de apoyo')

@section('content')

    <div class="contentHeader row">
        <h1 class="pull-left">Comunidades de apoyo</h1>
    </div>

    <div class="row">
        <ul>
            <h2><strong>Asesores internacionales</strong></h2>
            <li>
                <p>
                    Ramón Fabregat - Universitat de Girona, España
                </p>
            </li>
            <li>
                <p>
                    Silvia Baldiris - Universitat de Girona, España
                </p>
            </li>
            <li>
                <p>
                    Demetrio G. Sampson - University of Piraeus, Grecia
                </p>
            </li>
            <li>
                <p>
                    Professor Kinshuk - Athabasca University, Canadá
                </p>
            </li>
            <li>
                <p>
                    Sabine Graf - Athabasca University, Canadá
                </p>
            </li>
        </ul>
    </div>

    <div class="row">
        <ul>
            <h2><strong>Investigadores asociados</strong></h2>
            <li>
                <p>
                    Rosa María Vicari - Universidade Federal do Rio Grande do Sul (UFRGS), Brasil
                </p>
            </li>
            <li>
                <p>
                    Cecilia Días Flores - Universidade Federal de Ciências da Saúde de Porto Alegre UFCSPA, Brasil
                </p>
            </li>
            <li>
                <p>
                    Marta Rosecler Bez - Universidade Feevale, Brasil
                </p>
            </li>
            <li>
                <p>
                    Rossangela Bez - Universidade Federal do Rio Grande do Sul (UFRGS), Brasil
                </p>
            </li>
            <li>
                <p>
                    Liliana Passerino - Universidade Federal do Rio Grande do Sul (UFRGS), Brasil
                </p>
            </li>
            <li>
                <p>
                    Angela Carrillo - Pontificia Universidad Javeriana, Colombia
                </p>
            </li>
            <li>
                <p>
                    Ricardo Azambuja Silveira - Universidade Federal de Santa Catarina (UFSC), Brasil
                </p>
            </li>
            <li>
                <p>
                    Silvana Aciar - Universidad Nacional de San Juan, Argentina
                </p>
            </li>
        </ul>
    </div>

    <div class="row">
        <ul>
            <h2><strong>Instituciones</strong></h2>
            <li>
                <p>
                    <a href="http://www.colciencias.gov.co/" target="_blank">
                        <img width="200px" height="112px" src="{{ asset('docs/logo_hetah.png') }}" alt="Logo Fundación HETAH" title="Logo Fundación HETAH">
                    </a>
                </p>
            </li>
        </ul>
    </div>

    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-6">
            <div class="col.md-2">
                <div class="panel panel-default">
                    <div class="panel-body text-center">
                        <img width="400px" height="234px" src="{{ asset('docs/Screenshot_1.png') }}" alt="Imagen encuentro RAIM Brasil 2015" title="Imagen encuentro RAIM Brasil 2015">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-12 col-lg-6">
            <div class="col.md-2">
                <div class="panel panel-default">
                    <div class="panel-body text-center">
                        <img width="400px" height="299px" src="{{ asset('docs/Screenshot_3.png') }}" alt="Imagen asesoras internacionales" title="Imagen asesoras internacionales">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-12 col-lg-6">
            <div class="col.md-2">
                <div class="panel panel-default">
                    <div class="panel-body text-center">
                        <img width="400px" height="229px" src="{{ asset('docs/Screenshot_2.png') }}" alt="Imagen encuentro asesores internacionales" title="Imagen encuentro asesores internacionales">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-12 col-lg-6">
            <div class="col.md-2">
                <div class="panel panel-default">
                    <div class="panel-body text-center">
                        <img width="400px" height="300px" src="{{ asset('docs/Screenshot_4.png') }}" alt="Imagen encuentro asesores internacionales" title="Imagen encuentro asesores internacionales">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection