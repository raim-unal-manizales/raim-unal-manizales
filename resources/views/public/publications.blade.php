@extends('template.main')

@section('title', 'Publicaciones')

@section('content')

    <div class="contentHeader row">
        <h1 class="pull-left">Publicaciones</h1>
    </div>

    <div class="row">
        <ul>
            <h2><strong>Artículos en revista</strong></h2>
            <li>
                <p>
                    <a href="{{ asset('docs/1_articulo_revista.pdf') }}" target="_blank">
                        Mapeo de Metadatos de Objetos de Aprendizaje con Estilos de Aprendizaje como Estrategia para mejorar la Usabilidad de Repositorios de Recursos Educativos
                    </a>
                </p>
            </li>
            <li>
                <p>
                    <a href="{{ asset('docs/2_articulo_revista.pdf') }}" target="_blank">
                        Evaluación de Accesibilidad en Sitios Web Educativos
                    </a>
                </p>
            </li>
        </ul>
    </div>

    <div class="row">
        <ul>
            <h2><strong>Memorias en eventos</strong></h2>
            <li>
                <p>
                    <a href="{{ asset('docs/1_memoria_evento.pdf') }}" target="_blank">
                        Accesibilidad en Sitios Web Colombianos
                    </a>
                </p>
            </li>
            <li>
                <p>
                    <a href="{{ asset('docs/2_memoria_evento.pdf') }}" target="_blank">
                        Revisión de Expertos para Medir la Calidad de Objetos de Aprendizaje
                    </a>
                </p>
            </li>
            <li>
                <p>
                    <a href="{{ asset('docs/3_memoria_evento.pdf') }}" target="_blank">
                        Evaluación de Herramientas en Entorno Móvil para la Accesibilidad de Objetos de Aprendizaje para Usuarios con Discapacidad Visual
                    </a>
                </p>
            </li>
            <li>
                <p>
                    <a href="{{ asset('docs/4_memoria_evento.pdf') }}" target="_blank">
                        Análisis de Características del Perfil de Usuario para un Sistema de Recomendación de Objetos de Aprendizaje
                    </a>
                </p>
            </li>
            <li>
                <p>
                    <a href="{{ asset('docs/5_memoria_evento.pdf') }}" target="_blank">
                        Personalización de Cursos Virtuales Orientados a Formación Basada en Competencias
                    </a>
                </p>
            </li>
            <li>
                <p>
                    <a href="{{ asset('docs/6_memoria_evento.pdf') }}" target="_blank">
                        Multi-agent System for Expert Evaluation of Learning Objects from Repository
                    </a>
                </p>
            </li>
            <li>
                <p>
                    <a href="{{ asset('docs/7_memoria_evento.pdf') }}" target="_blank">
                        GAIATools: Framework para la Creación de Objetos de Aprendizaje Accesibles
                    </a>
                </p>
            </li>
            <li>
                <p>
                    <a href="{{ asset('docs/8_memoria_evento.pdf') }}" target="_blank">
                        Aplicación para Apoyo a la Etnoeducacion de Comunidad Embera Chami
                    </a>
                </p>
            </li>
            <li>
                <p>
                    <a href="{{ asset('docs/9_memoria_evento.pdf') }}" target="_blank">
                        Evolución en la Accesibilidad de la Federación de Repositorios de Objetos de Aprendizaje Colombia - FROAC
                    </a>
                </p>
            </li>
            <li>
                <p>
                    <a href="{{ asset('docs/10_memoria_evento.pdf') }}" target="_blank">
                        Cartas de Aceptación de Artículos
                    </a>
                </p>
            </li>
        </ul>
    </div>

@endsection