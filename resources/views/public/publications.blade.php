@extends('template.main')

@section('title', 'Publicaciones')

@section('content')

    <div class="contentHeader row">
        <h1 class="pull-left">Publicaciones</h1>
    </div>

<div class="container">
  <h2><strong>Artículos de revista</strong></h2>
  <div class="panel-group" id="accordion45">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion45" href="#collapse78"><strong>2014</strong></a>
        </h4>
      </div>
      <div id="collapse78" class="panel-collapse collapse">
        <div class="panel-body">
            <ul id="markdown-toc">
              <li><a href="{{ asset('docs/1_articulo_revista.pdf') }}" id="markdown-toc-contents" target="_blank">"Mapeo de Metadatos de Objetos de Aprendizaje con Estilos de Aprendizaje como Estrategia para mejorar la Usabilidad de Repositorios de Recursos Educativos". Revista VAEP-RITA. ISSN: 2255-5706</a></li>
              <li><a href="{{ asset('docs/2_articulo_revista.pdf') }}" id="markdown-toc-example" target="_blank">"Web System for Evaluation of Learning Objects in Repositories Supported by Multi-Agent System". Journal of Convergence Information Technology – JCIT. ISSN: 1975-9320</a></li>
              <li><a href="{{ asset('docs/6_articulo_revista.pdf') }}" id="markdown-toc-example" target="_blank">"Sistema de e-learning ubicuo, sensible al contexto y personalizado para ambientes virtuales de aprendizaje". Revista Colombiana de Computación. ISSN: 1657-2831</a></li>
            </ul>
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion45" href="#collapse79"><strong>2015</strong></a>
        </h4>
      </div>
      <div id="collapse79" class="panel-collapse collapse ">
        <div class="panel-body">
            <ul id="markdown-toc">
                <li><a href="{{ asset('docs/4_articulo_revista.pdf') }}" id="markdown-toc-contents" target="_blank">"Evaluación De Accesibilidad En Sitios Web Educativos. Revista Vínculos". ISSN: 1794-211X</a></li>
                <li><a href="{{ asset('docs/5_articulo_revista.pdf') }}" id="markdown-toc-contents" target="_blank">"Evolución en la Accesibilidad de la Federación de Repositorios de Objetos de Aprendizaje Colombia – FROAC". Revista Ingeniería e Innovación. ISSN: 2346­0466</a></li>
            </ul>
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion45" href="#collapse80"><strong>2016</strong></a>
        </h4>
      </div>
      <div id="collapse80" class="panel-collapse collapse ">
        <div class="panel-body">
            <ul id="markdown-toc">
                <li><a href="{{ asset('docs/3_articulo_revista.pdf') }}" id="markdown-toc-contents" target="_blank">"Learning Object Metadata Mapping with Learning Styles as a Strategy for Improving Usability of Educational Resource Repositories". Revista Iberoamericana de Tecnologías del Aprendizaje - IEEE-RITA. ISSN: 1932-8540</a></li>
            </ul>
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion45" href="#collapse81"><strong>2017</strong></a>
        </h4>
      </div>
      <div id="collapse81" class="panel-collapse collapse ">
        <div class="panel-body">
            <ul id="markdown-toc">
              <li><a href="{{ asset('docs/21_articulo_revista.pdf') }}" id="markdown-toc-contents" target="_blank">"Modelo por Capas para Evaluación de la Calidad de Objetos de Aprendizaje en Repositorios". Revista Electrónica de Investigación Educativa – REDIE. ISSN: 1607-4041</a></li>

            </ul>
        </div>
      </div>
    </div>


  </div>
</div>





<div class="container">
  <h2><strong>Memorias</strong></h2>
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><strong>2014</strong></a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body">
            <ul id="markdown-toc">
              <li><a href="{{ asset('docs/1_memoria_evento.pdf') }}" id="markdown-toc-contents" target="_blank">CAVA 2014 - Accesibilidad en Sitios Web Colombianos</a></li>
              <li><a href="{{ asset('docs/2_memoria_evento.pdf') }}" id="markdown-toc-example" target="_blank">CAVA 2014 - Revisión de Expertos para Medir la Calidad de Objetos de Aprendizaje</a></li>
              <li><a href="{{ asset('docs/3_memoria_evento.pdf') }}" id="markdown-toc-accordion-example" target="_blank">LACLO 2014 - Evaluación de Herramientas en Entorno Móvil para la Accesibilidad de Objetos de Aprendizaje para Usuarios con Discapacidad Visual</a></li>
              <li><a href="{{ asset('docs/4_memoria_evento.pdf') }}" id="markdown-toc-accessibility" target="_blank">LACLO 2014 - Análisis de Características del Perfil de Usuario para un Sistema de Recomendación de Objetos de Aprendizaje</a></li>
              <li><a href="{{ asset('docs/11_memoria_evento.pdf') }}" target="_blank">LACLO 2014 - Sistema Multi-Agente para Recomendación de Recursos Educativos utilizando Servicios de Awareness y Dispositivos Móviles</a>
              <li><a href="{{ asset('docs/5_memoria_evento.pdf') }}" id="markdown-toc-usage" target="_blank">CIIISI 2014 - Personalización de cursos virtuales orientados a formación basada en competencias basada en perfil dinámico del estudiante</a>
              <li><a href="{{ asset('docs/20_congreso_2015.pdf') }}" id="markdown-toc-usage" target="_blank">Interacción 2014 - Interfaces Adaptativas Personalizadas para brindar Recomendaciones en Repositorios de Objetos de Aprendizaje</a></li>
            </ul>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><strong>2015</strong></a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
            <ul id="markdown-toc">
              <li><a href="{{ asset('docs/6_memoria_evento.pdf') }}" id="markdown-toc-contents" target="_blank">PAAMS 2015 - Multi-agent System for Expert Evaluation of Learning Objects from Repository</a></li>
              <li><a href="https://link.springer.com/chapter/10.1007/978-3-319-19033-4_28" id="markdown-toc-example" target="_blank">PAAMS 2015 - Incorporating Context-Awareness Services in Adaptive U-MAS Learning Environments</a></li>
              <li><a href="{{ asset('docs/21_HCI_2015_Adaptive and personalized educational ubiquitous multiagent.pdf') }}" id="markdown-toc-accordion-example" target="_blank">HCI International 2015 - Adaptive and personalized educational ubiquitous multiagent system using context-awareness services and mobile devices</a></li>

              <li><a href="{{ asset('docs/7_memoria_evento.pdf') }}" id="markdown-toc-usage" target="_blank">CAVA 2015 - GAIATools: Framework para la creación de objetos de aprendizaje accesibles</a>
              <li><a href="{{ asset('docs/8_memoria_evento.pdf') }}" id="markdown-toc-usage" target="_blank">CAVA 2015 – Aplicación para Apoyo a la Etnoeducación de Comunidad Embera Chami</a>
              <li><a href="{{ asset('docs/9_memoria_evento.pdf') }}" id="markdown-toc-usage" target="_blank">CAVA 2015 - Evolución en la Accesibilidad de la Federación de Repositorios de Objetos de Aprendizaje Colombia - FROAC</a>

            </ul>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><strong>2016</strong></a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
            <ul id="markdown-toc">
              <li><a href="{{ asset('docs/10_CAVA_2016.pdf') }}" id="markdown-toc-contents" target="_blank">CAVA 2016 - Recurso educativo web para la enseñanza de Lengua de Señas Colombiana</a></li>
              <li><a href="{{ asset('docs/11_CAVA_2016.pdf') }}" id="markdown-toc-example" target="_blank">CAVA 2016 - Interprete virtual de Lengua de Señas Colombiana</a></li>
              <li><a href="{{ asset('docs/12_CAVA_2016.pdf') }}" id="markdown-toc-accordion-example" target="_blank">CAVA 2016 - Propuesta metodológica para la evaluación de software que apoye procesos de inclusión educativa – Poster</a></li>
              <li><a href="{{ asset('docs/13_CAVA_2016.pdf') }}" id="markdown-toc-accessibility" target="_blank">CAVA 2016 - Accesibilidad Web, una Evaluación desde la Perspectiva de Usuarios con Discapacidad Visual Total</a></li>
              <li><a href="{{ asset('docs/15_CAVA_2016.pdf') }}" id="markdown-toc-usage" target="_blank">CAVA 2016 - Diseño y creación de recursos digitales etnoeducativos con contenido lúdico</a>
              <li><a href="{{ asset('docs/22_HCI_2016.pdf') }}" id="markdown-toc-usage" target="_blank">HCI International 2016 - Adaptable and Adaptive Human-Computer Interface to Recommend Learning Objects from Repositories</a>
              <li><a href="{{ asset('docs/16_LACLO_2016.pdf') }}" id="markdown-toc-usage" target="_blank">LACLO 2016 - Aplicación de una herramienta técnica de apoyo al proceso de inclusión de personas con discapacidad visual en una plataforma educativa web</a>
              <li><a href="{{ asset('docs/17_LACLO_2016.pdf') }}" id="markdown-toc-usage" target="_blank">LACLO 2016 - Plataforma Adaptativa para la Búsqueda y Recuperación de Recursos Educativos Digitales</a>

            </ul>
        </div>
      </div>
    </div>
  </div>

</div>

<div class="container">
  <h2><strong>Libro</strong></h2>
  <div class="panel-group" id="accordion">

    <div class="panel panel-default">
      <div class="panel-heading">
      <h4 class="panel-title">
        <ul id="markdown-toc">
          <li>
            <a href="#" >En construcción...</a>
          </li>
        </ul>
        </h4>
      </div>
    </div>

  </div>
</div>

<div class="container">
  <h2><strong>Capítulos libro</strong></h2>
  <div class="panel-group" id="accordion">

    <div class="panel panel-default">
      <div class="panel-heading">
      <h4 class="panel-title">
        <ul id="markdown-toc">
          <li>
            <a href="#" >En construcción...</a>
          </li>
        </ul>
        <ul id="markdown-toc">
          <li>
            <a href="#" >En construcción...</a>
          </li>
        </ul>
        </h4>
      </div>
    </div>

  </div>
</div>



    <ul id="markdown-toc">
      <li>
        <a href="{{ asset('docs/10_memoria_evento.pdf') }}" target="_blank">Cartas de Aceptación de Artículos</a>
      </li>
    </ul>

@endsection
