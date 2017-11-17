@extends('template.main')

@section('title', 'Publicaciones')

@section('content')

    <div class="contentHeader row">
        <h1 class="pull-left">Documentos de soporte</h1>
    </div>

<div class="container">
  <div class="panel-group" id="accordion">

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><strong>Fichas de creación OA</strong></a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse ">
        <div class="panel-body">
          <!--*********************************-->
                    <div class="container">
                      <div class="panel-group" id="accordion71">
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse71"><strong>Biomas</strong></a>
                            </h4>
                          </div>
                          <div id="collapse71" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">
                                <li><a href="{{ asset('fichas_de_creacion/biomas/formato_los_biomas_actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/biomas/formato_los_biomas_contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/biomas/formato_los_biomas_video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/biomas/formato_los_biomas_ra.pdf') }}" id="markdown-toc-contents" target="_blank">RA</a></li>

                              </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse72"><strong>Calentamiento global</strong></a>
                            </h4>
                          </div>
                          <div id="collapse72" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">
                                <li><a href="{{ asset('fichas_de_creacion/calentamiento_global/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/calentamiento_global/video.pdf') }}" id="markdown-toc-example" target="_blank">Video</a></li>

                              </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse73"><strong>Célula animal</strong></a>
                            </h4>
                          </div>
                          <div id="collapse73" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">
                                <li><a href="{{ asset('fichas_de_creacion/celula_animal/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/celula_animal/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/celula_animal/video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/celula_animal/ra.pdf') }}" id="markdown-toc-contents" target="_blank">RA</a></li>

                              </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse74"><strong>Célula vegetal</strong></a>
                            </h4>
                          </div>
                          <div id="collapse74" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">
                                <li><a href="{{ asset('fichas_de_creacion/celula_vegetal/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/celula_vegetal/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/celula_vegetal/video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/celula_vegetal/ra.pdf') }}" id="markdown-toc-contents" target="_blank">RA</a></li>

                              </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse75"><strong>Ciclo del agua</strong></a>
                            </h4>
                          </div>
                          <div id="collapse75" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">
                                <li><a href="{{ asset('fichas_de_creacion/ciclo_agua/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/ciclo_agua/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/ciclo_agua/video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/ciclo_agua/ra.pdf') }}" id="markdown-toc-contents" target="_blank">RA</a></li>

                              </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse76"><strong>División celular meiosis</strong></a>
                            </h4>
                          </div>
                          <div id="collapse76" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">
                                <li><a href="{{ asset('fichas_de_creacion/division_celular_meiosis/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/division_celular_meiosis/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/division_celular_meiosis/video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>

                              </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse77"><strong>División celular mitosis</strong></a>
                            </h4>
                          </div>
                          <div id="collapse77" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">
                                <li><a href="{{ asset('fichas_de_creacion/division_celular_mitosis/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/division_celular_mitosis/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/division_celular_mitosis/video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/division_celular_mitosis/ra.pdf') }}" id="markdown-toc-contents" target="_blank">RA</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse78"><strong>Ecosistema</strong></a>
                            </h4>
                          </div>
                          <div id="collapse78" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">
                                <li><a href="{{ asset('fichas_de_creacion/ecosistema/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/ecosistema/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/ecosistema/video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse79"><strong>Ecosistema acuático</strong></a>
                            </h4>
                          </div>
                          <div id="collapse79" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">
                                <li><a href="{{ asset('fichas_de_creacion/ecosistema_acuatico/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/ecosistema_acuatico/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/ecosistema_acuatico/video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse80"><strong>Ecosistema aéreo</strong></a>
                            </h4>
                          </div>
                          <div id="collapse80" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">
                                <li><a href="{{ asset('fichas_de_creacion/ecosistema_aereo/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/ecosistema_aereo/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/ecosistema_aereo/video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse81"><strong>Ecosistema terrestre</strong></a>
                            </h4>
                          </div>
                          <div id="collapse81" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">
                                <li><a href="{{ asset('fichas_de_creacion/ecosistema_terrestre/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/ecosistema_terrestre/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/ecosistema_terrestre/video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse82"><strong>Edad media</strong></a>
                            </h4>
                          </div>
                          <div id="collapse82" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">
                                <li><a href="{{ asset('fichas_de_creacion/edad_media/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/edad_media/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/edad_media/ra.pdf') }}" id="markdown-toc-contents" target="_blank">RA</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse83"><strong>Estados de la materia</strong></a>
                            </h4>
                          </div>
                          <div id="collapse83" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">
                                <li><a href="{{ asset('fichas_de_creacion/estados_de_la_materia/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/estados_de_la_materia/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/estados_de_la_materia/video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/estados_de_la_materia/ra.pdf') }}" id="markdown-toc-contents" target="_blank">RA</a></li>

                              </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse84"><strong>Fotosíntesis</strong></a>
                            </h4>
                          </div>
                          <div id="collapse84" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">
                                <li><a href="{{ asset('fichas_de_creacion/fotosintesis/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/fotosintesis/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/fotosintesis/video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/fotosintesis/ra.pdf') }}" id="markdown-toc-contents" target="_blank">RA</a></li>

                              </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse85"><strong>Fuentes de energía alternativa</strong></a>
                            </h4>
                          </div>
                          <div id="collapse85" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">
                                <li><a href="{{ asset('fichas_de_creacion/fuentes_energia_alternativa/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/fuentes_energia_alternativa/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/fuentes_energia_alternativa/video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/fuentes_energia_alternativa/ra.pdf') }}" id="markdown-toc-contents" target="_blank">RA</a></li>

                              </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse86"><strong>Huesos del cráneo</strong></a>
                            </h4>
                          </div>
                          <div id="collapse86" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">
                                <li><a href="{{ asset('fichas_de_creacion/huesos_craneo/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/huesos_craneo/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/huesos_craneo/video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>

                              </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse87"><strong>Huesos del tronco</strong></a>
                            </h4>
                          </div>
                          <div id="collapse87" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">
                                <li><a href="{{ asset('fichas_de_creacion/huesos_tronco/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/huesos_tronco/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/huesos_tronco/video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>

                              </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse88"><strong>La era Napoleónica</strong></a>
                            </h4>
                          </div>
                          <div id="collapse88" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">
                                <li><a href="{{ asset('fichas_de_creacion/era_napoleonica/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/era_napoleonica/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/era_napoleonica/video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/era_napoleonica/ra.pdf') }}" id="markdown-toc-contents" target="_blank">RA</a></li>

                              </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse89"><strong>La Nueva Granada a finales del siglo XVIII</strong></a>
                            </h4>
                          </div>
                          <div id="collapse89" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">
                                <li><a href="{{ asset('fichas_de_creacion/nueva_granada/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/nueva_granada/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/nueva_granada/video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>

                              </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse90"><strong>La red trófica</strong></a>
                            </h4>
                          </div>
                          <div id="collapse90" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">
                                <li><a href="{{ asset('fichas_de_creacion/red_trofica/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/red_trofica/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/red_trofica/video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/red_trofica/ra.pdf') }}" id="markdown-toc-contents" target="_blank">RA</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse91"><strong>Los problemas ambientales en Colombia</strong></a>
                            </h4>
                          </div>
                          <div id="collapse91" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">
                                <li><a href="{{ asset('fichas_de_creacion/problemas_ambiente_colombia/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/problemas_ambiente_colombia/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/problemas_ambiente_colombia/video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>
                                </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse92"><strong>Medio ambiente</strong></a>
                            </h4>
                          </div>
                          <div id="collapse92" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">
                                <li><a href="{{ asset('fichas_de_creacion/medio_ambiente/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/medio_ambiente/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/medio_ambiente/video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>
                                </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse93"><strong>Medios de comunicación</strong></a>
                            </h4>
                          </div>
                          <div id="collapse93" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">
                                <li><a href="{{ asset('fichas_de_creacion/medios_comunicacion/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/medios_comunicacion/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/medios_comunicacion/video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>
                                </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse94"><strong>Normas de tránsito</strong></a>
                            </h4>
                          </div>
                          <div id="collapse94" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">
                                <li><a href="{{ asset('fichas_de_creacion/normas_transito/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/normas_transito/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/normas_transito/video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>
                                </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse95"><strong>Partes de la planta</strong></a>
                            </h4>
                          </div>
                          <div id="collapse95" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">
                                <li><a href="{{ asset('fichas_de_creacion/partes_planta/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/partes_planta/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/partes_planta/video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/partes_planta/ra.pdf') }}" id="markdown-toc-contents" target="_blank">RA</a></li>

                                </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse96"><strong>Problemas del medio ambiente</strong></a>
                            </h4>
                          </div>
                          <div id="collapse96" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">
                                <li><a href="{{ asset('fichas_de_creacion/medio_ambiente_general/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/medio_ambiente_general/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/medio_ambiente_general/video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/medio_ambiente_general/ra.pdf') }}" id="markdown-toc-contents" target="_blank">RA</a></li>

                                </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse97"><strong>Reciclaje</strong></a>
                            </h4>
                          </div>
                          <div id="collapse97" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">
                                <li><a href="{{ asset('fichas_de_creacion/reciclaje/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/reciclaje/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/reciclaje/video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>

                                </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse98"><strong>Reconquista e independencia de las colonias hispanoamericanas</strong></a>
                            </h4>
                          </div>
                          <div id="collapse98" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">
                                <li><a href="{{ asset('fichas_de_creacion/reconquista/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/reconquista/video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>

                                </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse100"><strong>Región Amazónica</strong></a>
                            </h4>
                          </div>
                          <div id="collapse100" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">
                                <li><a href="{{ asset('fichas_de_creacion/region_amazonica/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/region_amazonica/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/region_amazonica/video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>

                                </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse101"><strong>Región Andina</strong></a>
                            </h4>
                          </div>
                          <div id="collapse101" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">
                                <li><a href="{{ asset('fichas_de_creacion/region_andina/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/region_andina/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/region_andina/video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/region_andina/ra.pdf') }}" id="markdown-toc-contents" target="_blank">RA  </a></li>

                                </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse102"><strong>Región Caribe</strong></a>
                            </h4>
                          </div>
                          <div id="collapse102" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">
                                <li><a href="{{ asset('fichas_de_creacion/region_caribe/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/region_caribe/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/region_caribe/video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>

                                </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse103"><strong>Región Insular</strong></a>
                            </h4>
                          </div>
                          <div id="collapse103" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">
                                <li><a href="{{ asset('fichas_de_creacion/region_insular/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/region_insular/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/region_insular/video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/region_insular/ra.pdf') }}" id="markdown-toc-contents" target="_blank">RA</a></li>

                                </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse104"><strong>Región Orinoquía</strong></a>
                            </h4>
                          </div>
                          <div id="collapse104" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">
                                <li><a href="{{ asset('fichas_de_creacion/region_orinoquia/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/region_orinoquia/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/region_orinoquia/video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>

                                </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse105"><strong>Región Pacífica</strong></a>
                            </h4>
                          </div>
                          <div id="collapse105" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">
                                <li><a href="{{ asset('fichas_de_creacion/region_pacifica/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/region_pacifica/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/region_pacifica/video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/region_pacifica/ra.pdf') }}" id="markdown-toc-contents" target="_blank">RA</a></li>

                                </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse106"><strong>Revolución Francesa</strong></a>
                            </h4>
                          </div>
                          <div id="collapse106" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">

                                <li><a href="{{ asset('fichas_de_creacion/revoluacion_francesa/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/revoluacion_francesa/video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>
                                </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse107"><strong>Revolución Industrial</strong></a>
                            </h4>
                          </div>
                          <div id="collapse107" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">

                                <li><a href="{{ asset('fichas_de_creacion/revolucion_industrial/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/revolucion_industrial/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/revolucion_industrial/video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/revolucion_industrial/ra.pdf') }}" id="markdown-toc-contents" target="_blank">RA</a></li>

                                </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse108"><strong>Sentido de la vista</strong></a>
                            </h4>
                          </div>
                          <div id="collapse108" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">

                                <li><a href="{{ asset('fichas_de_creacion/sentido_vista/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/sentido_vista/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/sentido_vista/video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/sentido_vista/ra.pdf') }}" id="markdown-toc-contents" target="_blank">RA</a></li>

                                </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse109"><strong>Sentido del gusto</strong></a>
                            </h4>
                          </div>
                          <div id="collapse109" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">

                                <li><a href="{{ asset('fichas_de_creacion/sentido_gusto/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/sentido_gusto/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/sentido_gusto/video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/sentido_gusto/ra.pdf') }}" id="markdown-toc-contents" target="_blank">RA</a></li>

                                </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse110"><strong>Sentido del oído</strong></a>
                            </h4>
                          </div>
                          <div id="collapse110" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">

                                <li><a href="{{ asset('fichas_de_creacion/sentido_oido/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/sentido_oido/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/sentido_oido/video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>

                                </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse111"><strong>Sentido del olfato</strong></a>
                            </h4>
                          </div>
                          <div id="collapse111" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">

                                <li><a href="{{ asset('fichas_de_creacion/sentido_olfato/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/sentido_olfato/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/sentido_olfato/video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>

                                </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse112"><strong>Sentido del tacto</strong></a>
                            </h4>
                          </div>
                          <div id="collapse112" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">

                                <li><a href="{{ asset('fichas_de_creacion/sentido_tacto/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/sentido_tacto/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/sentido_tacto/video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/sentido_tacto/ra.pdf') }}" id="markdown-toc-contents" target="_blank">RA</a></li>

                                </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse113"><strong>Servicios del hogar</strong></a>
                            </h4>
                          </div>
                          <div id="collapse113" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">

                                <li><a href="{{ asset('fichas_de_creacion/servicios_hogar/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/servicios_hogar/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/servicios_hogar/video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>

                                </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse114"><strong>Sistema digestivo</strong></a>
                            </h4>
                          </div>
                          <div id="collapse114" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">

                                <li><a href="{{ asset('fichas_de_creacion/sistema_digestivo/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/sistema_digestivo/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/sistema_digestivo/video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/sistema_digestivo/ra.pdf') }}" id="markdown-toc-contents" target="_blank">RA</a></li>

                                </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse115"><strong>Sistema endocrino</strong></a>
                            </h4>
                          </div>
                          <div id="collapse115" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">

                                <li><a href="{{ asset('fichas_de_creacion/sistema_endocrino/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/sistema_endocrino/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/sistema_endocrino/ra.pdf') }}" id="markdown-toc-contents" target="_blank">RA</a></li>

                                </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse116"><strong>Sistema muscular</strong></a>
                            </h4>
                          </div>
                          <div id="collapse116" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">

                                <li><a href="{{ asset('fichas_de_creacion/sistema_muscular/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/sistema_muscular/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/sistema_muscular/video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>

                                </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse117"><strong>Sistema nervioso central</strong></a>
                            </h4>
                          </div>
                          <div id="collapse117" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">

                                <li><a href="{{ asset('fichas_de_creacion/sistema_nervioso/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/sistema_nervioso/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/sistema_nervioso/video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>

                                </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse118"><strong>Sistema reproductor femenino</strong></a>
                            </h4>
                          </div>
                          <div id="collapse118" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">

                                <li><a href="{{ asset('fichas_de_creacion/sistema_reproductor_femenino/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/sistema_reproductor_femenino/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/sistema_reproductor_femenino/ra.pdf') }}" id="markdown-toc-contents" target="_blank">RA</a></li>

                                </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse119"><strong>Sistema reproductor masculino</strong></a>
                            </h4>
                          </div>
                          <div id="collapse119" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">

                                <li><a href="{{ asset('fichas_de_creacion/sistema_reproductor_masculino/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/sistema_reproductor_masculino/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/sistema_reproductor_masculino/ra.pdf') }}" id="markdown-toc-contents" target="_blank">RA</a></li>

                                </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse120"><strong>Sistema respiratorio</strong></a>
                            </h4>
                          </div>
                          <div id="collapse120" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">

                                <li><a href="{{ asset('fichas_de_creacion/sistema_respiratorio/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/sistema_respiratorio/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/sistema_respiratorio/video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/sistema_respiratorio/ra.pdf') }}" id="markdown-toc-contents" target="_blank">RA</a></li>

                                </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse121"><strong>Sistema solar</strong></a>
                            </h4>
                          </div>
                          <div id="collapse121" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">

                                <li><a href="{{ asset('fichas_de_creacion/sistema_solar/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/sistema_solar/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/sistema_solar/video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/sistema_solar/ra.pdf') }}" id="markdown-toc-contents" target="_blank">RA</a></li>

                                </ul>
                            </div>
                          </div>
                        </div>
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion71" href="#collapse122"><strong>Zona rural y zona urbana</strong></a>
                            </h4>
                          </div>
                          <div id="collapse122" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">

                                <li><a href="{{ asset('fichas_de_creacion/zona_rural_urbana/actividad.pdf') }}" id="markdown-toc-contents" target="_blank">Actividad</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/zona_rural_urbana/contenido.pdf') }}" id="markdown-toc-contents" target="_blank">Contenido</a></li>
                                <li><a href="{{ asset('fichas_de_creacion/zona_rural_urbana/video.pdf') }}" id="markdown-toc-contents" target="_blank">Video</a></li>

                                </ul>
                            </div>
                          </div>
                        </div>






                      </div>
                    </div>

          <!--*********************************-->

        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><strong>Videos OA - realidad aumentada</strong></a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">
        <!--columna 1-->
            <div class="col-sm-4">
                <!--fila1-->
                <div class="panel panel-info">
                    <div class="panel-heading">
                          <center>  <h3 class="panel-title">Sistema solar</h3> </center>
                    </div>
                    <div class="panel-body">
                      <video width="320"  controls="" class="img-responsive">
                          <source src="{{ asset('videos/Video_APP_Sistema_Solar.mp4')}}" type="video/mp4">
                          Your browser does not support HTML5 video.
                      </video>
                    </div>
                </div>

                <!--fila2-->
                <div class="panel panel-info">
                    <div class="panel-heading">
                          <center>  <h3 class="panel-title">Partes de la flor</h3> </center>
                    </div>
                    <div class="panel-body">
                      <video width="320"  controls="" class="img-responsive">
                          <source src="{{ asset('videos/Video_APP_Partes de_la_Flor.mp4')}}" type="video/mp4">
                          Your browser does not support HTML5 video.
                      </video>
                    </div>
                </div>

                <!--fila3-->
                <div class="panel panel-info">
                    <div class="panel-heading">
                          <center>  <h3 class="panel-title">Generación de la APP</h3> </center>
                    </div>
                    <div class="panel-body">
                      <video width="320"  controls="" class="img-responsive">
                          <source src="{{ asset('videos/Presentacion_general.mp4')}}" type="video/mp4">
                          Your browser does not support HTML5 video.
                      </video>
                    </div>
                </div>
                <!--fila4-->
                <div class="panel panel-info">
                    <div class="panel-heading">
                          <center>  <h3 class="panel-title">Edad media</h3> </center>
                    </div>
                    <div class="panel-body">
                      <video width="320"  controls="" class="img-responsive">
                          <source src="{{ asset('videos/edad_media.mp4')}}" type="video/mp4">
                          Your browser does not support HTML5 video.
                      </video>
                    </div>
                </div>
                <!--fila5-->
                <div class="panel panel-info">
                    <div class="panel-heading">
                          <center>  <h3 class="panel-title">Región pacífico</h3> </center>
                    </div>
                    <div class="panel-body">
                      <video width="320"  controls="" class="img-responsive">
                          <source src="{{ asset('videos/region_pacifico.mp4')}}" type="video/mp4">
                          Your browser does not support HTML5 video.
                      </video>
                    </div>
                </div>

            </div>

            <!--columna 2-->
            <div class="col-sm-4">
              <!--fila1-->
                <div class="panel panel-info">
                    <div class="panel-heading">
                          <center>  <h3 class="panel-title">Sentido del gusto</h3> </center>
                    </div>
                    <div class="panel-body">
                      <video width="320"  controls="" class="img-responsive">
                          <source src="{{ asset('videos/Video_APP_Sentido_del_Gusto.mp4')}}" type="video/mp4">
                          Your browser does not support HTML5 video.
                      </video>
                    </div>
                </div>
                <!--fila2-->
                <div class="panel panel-info">
                    <div class="panel-heading">
                          <center>  <h3 class="panel-title">Cuerpo humano</h3> </center>
                    </div>
                    <div class="panel-body">
                      <video width="320"  controls="" class="img-responsive">
                          <source src="{{ asset('videos/Video_APP_Cuerpo_Humano.mp4')}}" type="video/mp4">
                          Your browser does not support HTML5 video.
                      </video>
                    </div>
                </div>
                <!--fila3-->
                <div class="panel panel-info">
                    <div class="panel-heading">
                          <center>  <h3 class="panel-title">Ciclo de vida del agua</h3> </center>
                    </div>
                    <div class="panel-body">
                      <video width="320"  controls="" class="img-responsive">
                          <source src="{{ asset('videos/ciclo_de_vida_del_agua.mp4')}}" type="video/mp4">
                          Your browser does not support HTML5 video.
                      </video>
                    </div>
                </div>
                <!--fila4-->
                <div class="panel panel-info">
                    <div class="panel-heading">
                          <center>  <h3 class="panel-title">Energías alternativas</h3> </center>
                    </div>
                    <div class="panel-body">
                      <video width="320"  controls="" class="img-responsive">
                          <source src="{{ asset('videos/energias_alternativas.mp4')}}" type="video/mp4">
                          Your browser does not support HTML5 video.
                      </video>
                    </div>
                </div>
                <!--fila5-->
                <div class="panel panel-info">
                    <div class="panel-heading">
                          <center>  <h3 class="panel-title">Revolución industrial</h3> </center>
                    </div>
                    <div class="panel-body">
                      <video width="320"  controls="" class="img-responsive">
                          <source src="{{ asset('videos/revolucion_industrial.mp4')}}" type="video/mp4">
                          Your browser does not support HTML5 video.
                      </video>
                    </div>
                </div>
            </div>

            <!--columna 3-->
            <div class="col-sm-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                          <center>  <h3 class="panel-title">Rotación y traslación</h3> </center>
                    </div>
                    <div class="panel-body">
                      <video width="320"  controls="" class="img-responsive">
                          <source src="{{ asset('videos/Video_APP_Rotacion_y_Traslacion.mp4')}}" type="video/mp4">
                          Your browser does not support HTML5 video.
                      </video>
                    </div>
                </div>

                <!--fila2-->
                <div class="panel panel-info">
                    <div class="panel-heading">
                          <center>  <h3 class="panel-title">Célula vegetal</h3> </center>
                    </div>
                    <div class="panel-body">
                      <video width="320"  controls="" class="img-responsive" >
                          <source src="{{ asset('videos/Video_APP_Celula_Vegetal.mp4')}}" type="video/mp4">
                          Your browser does not support HTML5 video.
                      </video>
                    </div>
                </div>
                <!--fila3-->
                <div class="panel panel-info">
                    <div class="panel-heading">
                          <center>  <h3 class="panel-title">Contaminación ambiental</h3> </center>
                    </div>
                    <div class="panel-body">
                      <video width="320"  controls="" class="img-responsive">
                          <source src="{{ asset('videos/contaminacion_ambiental.mp4')}}" type="video/mp4">
                          Your browser does not support HTML5 video.
                      </video>
                    </div>
                </div>
                <!--fila4-->
                <div class="panel panel-info">
                    <div class="panel-heading">
                          <center>  <h3 class="panel-title">Estados de la materia</h3> </center>
                    </div>
                    <div class="panel-body">
                      <video width="320"  controls="" class="img-responsive">
                          <source src="{{ asset('videos/estados_de_la_materia.mp4')}}" type="video/mp4">
                          Your browser does not support HTML5 video.
                      </video>
                    </div>
                </div>

            </div>
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><strong>Formatos de evaluación OA</strong></a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
            <ul id="markdown-toc">
              <li><a href="{{ asset('formatos_evaluacion/formato.xlsx') }}" id="markdown-toc-contents" download="Formato">Formato</a></li>
            </ul>
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><strong>Manuales de aplicaciones</strong></a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">
          <!--*********************************-->
                    <div class="container">
                      <div class="panel-group" id="accordion3">
                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion3" href="#collapse14"><strong>Plataforma RAIM</strong></a>
                            </h4>
                          </div>
                          <div id="collapse14" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">
                                <li><a href="{{ asset('manuales/manual_tecnico_plataforma_raim.pdf') }}" id="markdown-toc-contents" target="_blank">Manual técnico</a></li>
                                <li><a href="{{ asset('manuales/manual_usuario_plataforma_raim.pdf') }}" id="markdown-toc-example" target="_blank">Manual de usuario</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>

                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion3" href="#collapse53"><strong>GAIA Tools</strong></a>
                            </h4>
                          </div>
                          <div id="collapse53" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">
                                <li><a href="{{ asset('manuales/manual_tecnico_gaiatools.pdf') }}" id="markdown-toc-contents" target="_blank">Manual técnico</a></li>
                                <li><a href="{{ asset('manuales/manual_usuario_gaiatools.pdf') }}" id="markdown-toc-example" target="_blank">Manual de usuario</a></li>
                                <!--<li><a href="{{ asset('manuales/manual_autor_gaiatools.pdf') }}" id="markdown-toc-example" target="_blank">Manual de autor</a></li>
                                <li><a href="{{ asset('manuales/manual_administrador_gaiatools.pdf') }}" id="markdown-toc-example" target="_blank">Manual de administrador</a></li>-->
                              </ul>
                            </div>
                          </div>
                        </div>

                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion3" href="#collapse54"><strong>Aprendiendo LSC</strong></a>
                            </h4>
                          </div>
                          <div id="collapse54" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">
                                <li><a href="{{ asset('manuales/manual_usuario_lsc.pdf') }}" id="markdown-toc-example" target="_blank">Manual de usuario</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>

                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion3" href="#collapse55"><strong>EduTools</strong></a>
                            </h4>
                          </div>
                          <div id="collapse55" class="panel-collapse collapse">
                            <div class="panel-body">
                              <div class="panel-body">
                                <ul id="markdown-toc">
                                  <li><a href="{{ asset('manuales/manual_usuario_edutools.pdf') }}" id="markdown-toc-example" target="_blank">Manual de usuario</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion2" href="#collapse56"><strong>Indilenguas</strong></a>
                            </h4>
                          </div>
                          <div id="collapse56" class="panel-collapse collapse">
                            <div class="panel-body">
                              <div class="panel-body">
                                <ul id="markdown-toc">
                                  <li><a href="{{ asset('manuales/manual_tecnico_indilenguas.pdf') }}" id="markdown-toc-contents" target="_blank">Manual técnico</a></li>
                                  <li><a href="{{ asset('manuales/manual_usuario_indilenguas.pdf') }}" id="markdown-toc-example" target="_blank">Manual de usuario</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion3" href="#collapse57"><strong>AR Tools</strong></a>
                            </h4>
                          </div>
                          <div id="collapse57" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">
                                <li><a href="{{ asset('manuales/manual_tecnico_artools.pdf') }}" id="markdown-toc-contents" target="_blank">Manual técnico</a></li>
                                <li><a href="{{ asset('manuales/manual_usuario_artools.pdf') }}" id="markdown-toc-example" target="_blank">Manual de usuario</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>

                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion3" href="#collapse58"><strong>AET</strong></a>
                            </h4>
                          </div>
                          <div id="collapse58" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">
                                <li><a href="{{ asset('manuales/manual_tecnico_aet.pdf') }}" id="markdown-toc-contents" target="_blank">Manual técnico</a></li>
                                <li><a href="{{ asset('manuales/manual_usuario_aet.pdf') }}" id="markdown-toc-contents" target="_blank">Manual de usuario</a></li>

                              </ul>
                            </div>
                          </div>
                        </div>

                        <!--*********************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion3" href="#collapse59"><strong>IMU-Mouse</strong></a>
                            </h4>
                          </div>
                          <div id="collapse59" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">
                                <li><a href="{{ asset('manuales/manual_tecnico_imumouse.pdf') }}" id="markdown-toc-contents" target="_blank">Manual técnico</a></li>

                              </ul>
                            </div>
                          </div>
                        </div>

                        <!--******************************-->
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion3" href="#collapse60"><strong>Otros</strong></a>
                            </h4>
                          </div>
                          <div id="collapse60" class="panel-collapse collapse">
                            <div class="panel-body">
                              <ul id="markdown-toc">
                                <li><a href="{{ asset('manuales/manual_creacion_oas_unityvuforia.pdf') }}" id="markdown-toc-contents" target="_blank">Manual de creación de OAs con Unity y Vuforia</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>

          <!--*********************************-->
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5"><strong>Metodología de evaluación de aplicaciones</strong></a>
        </h4>
      </div>
      <div id="collapse5" class="panel-collapse collapse">
        <div class="panel-body">

<!--*********************************-->
          <div class="container">
            <div class="panel-group" id="accordion2">
              <!--*********************************-->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapse12"><strong>Instrumentos diligenciados</strong></a>
                  </h4>
                </div>
                <div id="collapse12" class="panel-collapse collapse">
                  <div class="panel-body">
                    <!--*********************************-->
                              <div class="container">
                                <div class="panel-group" id="accordion4">
                                  <!--*********************************-->
                                  <div class="panel panel-default">
                                    <div class="panel-heading">
                                      <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion4" href="#collapse21"><strong>Plataforma RAIM</strong></a>
                                      </h4>
                                    </div>
                                    <div id="collapse21" class="panel-collapse collapse">
                                      <div class="panel-body">
                                        <ul id="markdown-toc">
                                          <li><a href="{{ asset('instrumentos_diligenciados/raim/etapa1.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 1</a></li>
                                          <li><a href="{{ asset('instrumentos_diligenciados/raim/etapa2_1.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 2.1</a></li>
                                          <li><a href="{{ asset('instrumentos_diligenciados/raim/etapa2_2.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 2.2</a></li>
                                          <li><a href="{{ asset('instrumentos_diligenciados/raim/etapa3_arabelly.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 3 fase 1 arabelly</a></li>
                                          <li><a href="{{ asset('instrumentos_diligenciados/raim/etapa3_cecilia.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 3 fase 1 cecilia</a></li>
                                          <li><a href="{{ asset('instrumentos_diligenciados/raim/etapa3_silvia.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 3 fase 1 silvia</a></li>
                                          <li><a href="{{ asset('instrumentos_diligenciados/raim/etapa4_1.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 4.1 PCD visual</a></li>
                                          <li><a href="{{ asset('instrumentos_diligenciados/raim/etapa4_2.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 4.2 PCD visual</a></li>
                                          <li><a href="{{ asset('instrumentos_diligenciados/raim/etapa4_3.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 4.3 PCD visual</a></li>
                                          <li><a href="{{ asset('instrumentos_diligenciados/raim/etapa4_4.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 4.1 PCD auditiva</a></li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>

                                  <!--*********************************-->
                                  <div class="panel panel-default">
                                    <div class="panel-heading">
                                      <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion4" href="#collapse22"><strong>GAIA Tools</strong></a>
                                      </h4>
                                    </div>
                                    <div id="collapse22" class="panel-collapse collapse">
                                      <div class="panel-body">
                                        <ul id="markdown-toc">
                                          <li><a href="{{ asset('instrumentos_diligenciados/gaiatools/etapa1.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 1</a></li>
                                          <li><a href="{{ asset('instrumentos_diligenciados/gaiatools/etapa2_1.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 2.1</a></li>
                                          <li><a href="{{ asset('instrumentos_diligenciados/gaiatools/etapa2_2.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 2.2</a></li>
                                          <li><a href="{{ asset('instrumentos_diligenciados/gaiatools/etapa3_arabelly.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 3 fase 1 arabelly</a></li>
                                          <li><a href="{{ asset('instrumentos_diligenciados/gaiatools/etapa3_cecilia_jorge.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 3 fase 1 cecilia y jorge</a></li>
                                          <li><a href="{{ asset('instrumentos_diligenciados/gaiatools/etapa3_mery_pablo.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 3 fase 1 mery y juan pablo</a></li>
                                          <li><a href="{{ asset('instrumentos_diligenciados/gaiatools/etapa3_silvia.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 3 fase 1 silvia</a></li>
                                          <li><a href="{{ asset('instrumentos_diligenciados/gaiatools/etapa3_pedro.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 3 fase 1 pedro</a></li>
                                          <li><a href="{{ asset('instrumentos_diligenciados/gaiatools/etapa4_1.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 4.1 </a></li>
                                          <li><a href="{{ asset('instrumentos_diligenciados/gaiatools/etapa4_2.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 4.2 </a></li>
                                          <li><a href="{{ asset('instrumentos_diligenciados/gaiatools/etapa4_3.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 4.3</a></li>
                                          <li><a href="{{ asset('instrumentos_diligenciados/gaiatools/etapa4_4.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 4.1 </a></li>
                                        </ul>

                                      </div>
                                    </div>
                                  </div>

                                  <!--*********************************-->
                                  <div class="panel panel-default">
                                    <div class="panel-heading">
                                      <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion4" href="#collapse23"><strong>Aprendiendo LSC</strong></a>
                                      </h4>
                                    </div>
                                    <div id="collapse23" class="panel-collapse collapse">
                                      <div class="panel-body">
                                        <ul id="markdown-toc">
                                          <li><a href="{{ asset('instrumentos_diligenciados/lsc/etapa1_1.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 1.1</a></li>
                                          <li><a href="{{ asset('instrumentos_diligenciados/lsc/etapa1_2.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 1.2</a></li>
                                          <li><a href="{{ asset('instrumentos_diligenciados/lsc/etapa2_1.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 2.1</a></li>
                                          <li><a href="{{ asset('instrumentos_diligenciados/lsc/etapa2_2.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 2.2</a></li>
                                          <li><a href="{{ asset('instrumentos_diligenciados/lsc/etapa3_docentes.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 3 fase 1 aprendiendo LSC docentes INEM</a></li>
                                          <li><a href="{{ asset('instrumentos_diligenciados/lsc/etapa3_interprete.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 3 fase 1 aprendiendo LSC interprete LSC ASORCAL</a></li>
                                          <li><a href="{{ asset('instrumentos_diligenciados/lsc/etapa3_jorge_cecilia.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 3 fase 1 Aprendiendo LSC jorge y cecilia</a></li>
                                          <li><a href="{{ asset('instrumentos_diligenciados/lsc/etapa3_mery.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 3 fase 1 aprendiendo LSC mery y juan pablo</a></li>
                                          <li><a href="{{ asset('instrumentos_diligenciados/lsc/etapa3_silvia.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 3 fase 1 aprendiendo LSC silvia </a></li>
                                          <li><a href="{{ asset('instrumentos_diligenciados/lsc/etapa4.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 4 INEM </a></li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>

                                  <!--*********************************-->
                                  <div class="panel panel-default">
                                    <div class="panel-heading">
                                      <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion4" href="#collapse24"><strong>EduTools</strong></a>
                                      </h4>
                                    </div>
                                    <div id="collapse24" class="panel-collapse collapse">
                                      <div class="panel-body">
                                        <div class="panel-body">
                                          <ul id="markdown-toc">
                                            <li><a href="{{ asset('instrumentos_diligenciados/edutools/etapa1.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 1</a></li>
                                            <li><a href="{{ asset('instrumentos_diligenciados/edutools/etapa2_2.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 2.1</a></li>
                                            <li><a href="{{ asset('instrumentos_diligenciados/edutools/etapa2_2.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 2.2</a></li>
                                            <li><a href="{{ asset('instrumentos_diligenciados/edutools/etapa3_jorge_cecilia.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 3 fase 1 EduTools jorge y cecilia</a></li>
                                            <li><a href="{{ asset('instrumentos_diligenciados/edutools/etapa3_mery_pablo.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 3 fase 1 EduTools mery y juan pablo</a></li>
                                            <li><a href="{{ asset('instrumentos_diligenciados/edutools/etapa3_ramon.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 3 fase 1 EduTools ramon</a></li>
                                            <li><a href="{{ asset('instrumentos_diligenciados/edutools/etapa3_teodor.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 3 fase 1 EduTools teodor</a></li>
                                            <li><a href="{{ asset('instrumentos_diligenciados/edutools/etapa4_1.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 4.1</a></li>
                                            <li><a href="{{ asset('instrumentos_diligenciados/edutools/etapa4_2.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 4.2</a></li>
                                            <li><a href="{{ asset('instrumentos_diligenciados/edutools/etapa4_3.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 4.3</a></li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <!--*********************************-->
                                  <div class="panel panel-default">
                                    <div class="panel-heading">
                                      <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion4" href="#collapse25"><strong>Indilenguas</strong></a>
                                      </h4>
                                    </div>
                                    <div id="collapse25" class="panel-collapse collapse">
                                      <div class="panel-body">
                                        <div class="panel-body">
                                          <ul id="markdown-toc">
                                            <li><a href="{{ asset('instrumentos_diligenciados/indilenguas/etapa1.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 1</a></li>
                                            <li><a href="{{ asset('instrumentos_diligenciados/indilenguas/etapa2_1.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 2.1</a></li>
                                            <li><a href="{{ asset('instrumentos_diligenciados/indilenguas/etapa2_2.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 2.2</a></li>
                                            <li><a href="{{ asset('instrumentos_diligenciados/indilenguas/etapa3_jorge.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 3 fase 1 Indilenguas jorge y cecilia</a></li>
                                            <li><a href="{{ asset('instrumentos_diligenciados/indilenguas/etapa3_mery.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 3 fase 1 Indilenguas mery y juan pablo</a></li>
                                            <li><a href="{{ asset('instrumentos_diligenciados/indilenguas/etapa3_silvia.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 3 fase 1 Indilenguas silvia</a></li>
                                            <li><a href="{{ asset('instrumentos_diligenciados/indilenguas/list.pdf') }}" id="markdown-toc-contents" target="_blank">Check list etapa 1 y 2</a></li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <!--*********************************-->
                                  <div class="panel panel-default">
                                    <div class="panel-heading">
                                      <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion4" href="#collapse26"><strong>AR Tools</strong></a>
                                      </h4>
                                    </div>
                                    <div id="collapse26" class="panel-collapse collapse">
                                      <div class="panel-body">

                                      </div>
                                    </div>
                                  </div>

                                  <!--*********************************-->
                                  <div class="panel panel-default">
                                    <div class="panel-heading">
                                      <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion4" href="#collapse27"><strong>EasyLaban</strong></a>
                                      </h4>
                                    </div>
                                    <div id="collapse27" class="panel-collapse collapse">
                                      <div class="panel-body">
                                        <ul id="markdown-toc">
                                        <li><a href="{{ asset('instrumentos_diligenciados/easylaban/etapa1.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 1</a></li>
                                        <li><a href="{{ asset('instrumentos_diligenciados/easylaban/etapa2.pdf') }}" id="markdown-toc-contents" target="_blank">Etapa 2</a></li>
                                        <li><a href="{{ asset('instrumentos_diligenciados/easylaban/list.pdf') }}" id="markdown-toc-contents" target="_blank">Check List etapa 1 y 2</a></li>
                                      </ul>
                                      </div>
                                    </div>
                                  </div>
                                  <!--*********************************-->
                                  <div class="panel panel-default">
                                    <div class="panel-heading">
                                      <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion4" href="#collapse28"><strong>IMU-Mouse</strong></a>
                                      </h4>
                                    </div>
                                    <div id="collapse28" class="panel-collapse collapse">
                                      <div class="panel-body">
                                        <ul id="markdown-toc">
                                        <li><a href="{{ asset('instrumentos_diligenciados/imu/encuesta_apoyo.pdf') }}" id="markdown-toc-contents" target="_blank">Encuesta de apoyo para comparar las técnicas de activación del cursor en el IMU-Mouse</a></li>
                                        <li><a href="{{ asset('instrumentos_diligenciados/imu/encuesta_utilizada.pdf') }}" id="markdown-toc-contents" target="_blank">Encuesta utilizada para la evaluación del dispositivo IMU-Mouse</a></li>
                                        <li><a href="{{ asset('instrumentos_diligenciados/imu/formato.pdf') }}" id="markdown-toc-contents" target="_blank">Formato captura datos demográficos IMU-Mouse</a></li>
                                      </ul>
                                      </div>
                                    </div>
                                  </div>

                                </div>
                              </div>
                  </div>
                </div>
              </div>

              <!--*********************************-->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapse13"><strong>Instrumentos guía</strong></a>
                  </h4>
                </div>
                <div id="collapse13" class="panel-collapse collapse">
                  <div class="panel-body">
                    <ul id="markdown-toc">
                      <li><a href="{{ asset('instrumentos_guia/autorizacion_fotografias_y_pruebas_con_menores_de_edad.pdf') }}" id="markdown-toc-contents" target="_blank">Autorización fotografías  y pruebas con menores de edad</a></li>
                      <li><a href="{{ asset('instrumentos_guia/instrumento_etapa_1_y_2_desarrolladores.pdf') }}" id="markdown-toc-contents" target="_blank">Instrumento etapa 1 y 2 desarrolladores</a></li>
                      <li><a href="{{ asset('instrumentos_guia/instrumento_etapa_3_expertos.pdf') }}" id="markdown-toc-contents" target="_blank">Instrumento etapa 3 expertos</a></li>
                      <li><a href="{{ asset('instrumentos_guia/instrumento_etapa_4_usuarios_adultos.pdf') }}" id="markdown-toc-contents" target="_blank">Instrumento etapa 4 usuarios adultos</a></li>
                      <li><a href="{{ asset('instrumentos_guia/instrumento_etapa_4_usuarios_ninos.pdf') }}" id="markdown-toc-contents" target="_blank">Instrumento etapa 4 usuarios niños</a></li>
                      <li><a href="{{ asset('instrumentos_guia/protocolo_etapa_4.pdf') }}" id="markdown-toc-contents" target="_blank">Protocolo para pruebas etapa 4</a></li>

                    </ul>
                  </div>
                </div>
              </div>



            </div>
          </div>

<!--*********************************-->

        </div>
      </div>
    </div>




<!--*********************************VIDEO-->
        <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2000"><strong>Video RAIM</strong></a>
        </h4>
      </div>
      <div id="collapse2000" class="panel-collapse collapse">
        <div class="panel-body">
            <ul id="markdown-toc">
              <li><a href="https://www.youtube.com/watch?v=qHseT7FIY_I" id="markdown-toc-contents" >Video de yotube</a></li>
            </ul>
        </div>
      </div>
    </div>




  </div>

</div>

@endsection
