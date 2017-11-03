@extends('template.main')

@section('title', 'Buscador de Objetos')

@section('content')

    <div class="contentHeader row">
        <h1 class="pull-left">Buscador de Objetos de Aprendizaje</h1>
    </div>

    <!--<div class="row">-->
        {!! Form::open(['id'=>'formulario', 'method'=>'post', 'enctype'=>'multipart/form-data','class' => 'form-group']) !!}
            <div class="form-group">
                <label for="text" >Buscar objetos:</label>
                <input type="text" id="text" name="buscar" class="form-control" placeholder="Buscar">
            </div>
            <input type="submit" value="Buscar objetos" name="submit" class="btn btn-primary">
        {!! Form::close() !!}
   <!-- </div>-->

    {{-- dd($data) --}}
    {{-- dd($usuario[0]) --}}

    <div class="row" id="recomendedLo">
        <div class="contentHeader row">
            <h4 class="pull-left">Objetos de aprendizaje recomendados</h4>
        </div>
        <div class="resultado">

        </div>
    </div>

    <div class="row" id="othersLo">
        <div class="contentHeader row">
            <h4 class="pull-left">Otros objetos de aprendizaje</h4>
        </div>
        <div class="resultado">

        </div>
    </div>

    <div class="row" id="notResults">
    </div>

@endsection

@section('javascript')

    <script src="{{ asset('js/LomMetadata.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/UserProfile.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/initialAdaptionRules.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/needAdaptionRules.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/lsAdaptionRules.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/RulesConstants.js') }}" type="text/javascript"></script>

    <script src="{{ asset('auxiliary-rater/rater.js') }}" type="text/javascript"></script>

    {{--<link href="{{ asset('star-rating/css/star-rating.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('star-rating/themes/krajee-fa/theme.css') }}" media="all" rel="stylesheet" type="text/css" />

    <script src="{{ asset('star-rating/js/star-rating.js') }}" type="text/javascript"></script>
    <script src="{{ asset('star-rating/themes/krajee-fa/theme.js') }}" type="text/javascript"></script>
    <script src="{{ asset('star-rating/js/locales/es.js') }}" type="text/javascript"></script>--}}

    <script>
        $(document).ready(function (){

            var userProfile = null;

            var regex = new RegExp('^PT|(\d*H+)|(\d*M+)');
            var existUserProfile;

            @if ($data !== null and  $usuario !== null)

                @if (
                    !empty($data["learningStyle"]) and
                    !empty($data["need"]) //and
                    //!empty($data["personalization"])
                    )

                    existUserProfile = true;
                    userProfile = getUserProfile();

                    console.log(userProfile);
                @else
                    existUserProfile = false;
                @endif
            @else
                existUserProfile = false;
            @endif

            $('#formulario').submit(function (){

                $('#recomendedLo .resultado').html('');
                $('#othersLo .resultado').html('');
                $('#notResults').html('');

                //Obtiene la palabra de busqueda del formulario
                var searchString = $('#text').val().trim();

                //store_search_lo();
                if (searchString.length !== 0) {
                    $.ajax({
                        type: "GET",
                        //data: "raim=" + searchString,
                        data: "raim_brazil=" + searchString,
                        url: "http://froac.manizales.unal.edu.co/froacn",
                        dataType: "jsonp",
                        async: true,
                        success: function(datos){
                            var dataJson = eval(datos);

                            var items = [];
                            $.each(dataJson, function(key, val) {
                                //console.log(key);
                                items.push({'rep_id': val.rep_id, 'lo_id': val.lo_id, 'xml': val.xml});
                            });

                            console.dir('Lista inicial: ' + items.length);

                            var listaOA = [];

                            $.each(items, function(index, xml){

                                //console.log(xml);

                                var lom = processXml(xml.xml, xml.rep_id, xml.lo_id);
                                console.log(lom);
                                listaOA.push(lom);

                                lom.typicalLearningTimeHours = 0;
                                lom.typicalLearningTimeMinutes = 0;

                                if(regex.test(lom.typicalLearningTime)){

                                    var dato = '0';

                                    for(var i = 2; i < lom.typicalLearningTime.length; i ++){

                                        if(lom.typicalLearningTime.charAt(i) === 'H'){
                                            lom.typicalLearningTimeHours = parseInt(dato);
                                            dato = '0';
                                        }else if(lom.typicalLearningTime.charAt(i) === 'M'){
                                            lom.typicalLearningTimeMinutes = parseInt(dato);
                                            dato = '0';
                                        }else{
                                            dato = dato + lom.typicalLearningTime.charAt(i);
                                        }
                                    }
                                }

                            });

                            console.dir('Primer filtro: ' + listaOA.length);

                            if(existUserProfile && listaOA.length > 0){

                                var listaOAInicial = filtroReglasIniciales(listaOA, userProfile);

                                console.dir('Filtro reglas iniciales: ' + listaOAInicial.length);

                                var listaOAMostrar = listaOAInicial;

                                //Filtros need
                                if(userProfile.need.toLocaleLowerCase().trim() === 'si' &&
                                    listaOAInicial.length > 0){

                                    //Filtros need visión
                                    if(userProfile.need_visual.toLocaleLowerCase().trim() === 'si'){
                                        listaOAMostrar = filtroReglasNeedVision(listaOAInicial, userProfile);
                                    }

                                    //Filtros need auditiva
                                    if(userProfile.need_auditiva.toLocaleLowerCase().trim() === 'si'){
                                        listaOAMostrar = filtroReglasNeedAuditiva(listaOAInicial, userProfile);
                                    }

                                    //Filtros need motriz
                                    if(userProfile.need_motriz.toLocaleLowerCase().trim() === 'si'){
                                        listaOAMostrar = filtroReglasNeedMotriz(listaOAInicial, userProfile);
                                    }

                                    //Filtros need cognitiva
                                    if(userProfile.need_cognitiva.toLocaleLowerCase().trim() === 'si'){
                                        listaOAMostrar = filtroReglasNeedCognitiva(listaOAInicial, userProfile);
                                    }

                                    //Filtros need étnica
                                    if(userProfile.need_etnica.toLocaleLowerCase().trim() === 'si'){
                                        listaOAMostrar = filtroReglasNeedEtnica(listaOAInicial, userProfile);
                                    }

                                    console.dir('Filtro reglas need: ' + listaOAMostrar.length);

                                    //Filtros ls
                                }else if(userProfile.estilo_aprendizaje.toLocaleLowerCase().trim() !== 'no definido' &&
                                    listaOAInicial.length > 0){

                                    //Filtros ls visual-global visual-secuencial
                                    if(userProfile.ls_vark.toLocaleLowerCase().trim() === 'v'){
                                        listaOAMostrar = filtroReglasLsVisual(listaOAInicial, userProfile);
                                    }

                                    //Filtros ls auditivo-global auditivo-secuencial
                                    if(userProfile.ls_vark.toLocaleLowerCase().trim() === 'a'){
                                        listaOAMostrar = filtroReglasLsAuditivo(listaOAInicial, userProfile);
                                    }

                                    //Filtros ls lector-global lector-secuencial
                                    if(userProfile.ls_vark.toLocaleLowerCase().trim() === 'l'){
                                        listaOAMostrar = filtroReglasLsLector(listaOAInicial, userProfile);
                                    }

                                    //Filtros ls kinestesico-global kinestesico-secuencial
                                    if(userProfile.ls_vark.toLocaleLowerCase().trim() === 'k'){
                                        listaOAMostrar = filtroReglasLsKinestesico(listaOAInicial, userProfile);
                                    }

                                    console.dir('Filtro reglas ls: ' + listaOAMostrar.length);
                                }

                                //Muestra los objetos filtrados
                                mostrarLOSecciones(listaOAMostrar, existUserProfile);

                            }else if(listaOA.length <= 0){

                                $('#notResults')
                                    .append('No existen objetos de aprendizaje que cumplan con los criterios de búsqueda');
                            }else{

                                mostrarLOSecciones(listaOA, existUserProfile);
                            }

                        },
                        error: function (obj, error, objError){
                            //avisar que ocurrió un error
                            console.log(obj);
                            console.log(error);
                            console.log(objError);
                        }
                    });

                    if(existUserProfile){
                        // funcionalidad de guardar historial de busqueda
                        store_search_lo();

                        $.ajax({
                            type: "POST",
                            data: { _token: $('[name=\'_token\']').val() },
                            url: "{{ route('Lo.get_user_rates') }}",
                            async: true,
                            success: function(datos){
                                var dataJson = eval(datos);
                                console.log(dataJson);
                                $.each(dataJson, function(index, rate){
                                    $('#' + rate.repository_id + '-' + rate.object_id + '-general').rate('setValue', rate.calification);
                                    $('#' + rate.repository_id + '-' + rate.object_id + '-contribution').rate('setValue', rate.contribution);
                                    $('#' + rate.repository_id + '-' + rate.object_id + '-design').rate('setValue', rate.design);
                                    $('#' + rate.repository_id + '-' + rate.object_id + '-quality').rate('setValue', rate.quality);
                                    $('#' + rate.repository_id + '-' + rate.object_id + '-recommended').rate('setValue', rate.recommended);
                                });

                                $('div.rate').on('change', function(ev){
                                    var idSeparated = ev.target.id.split('-');
                                    console.dir(idSeparated);
                                    //$('button#' + idSeparated[0] + '-' + idSeparated[1] + '-saveAssessment').attr('disabled', false);
                                });
                            },
                            error: function (obj, error, objError){
                                //avisar que ocurrió un error
                                console.log(obj);
                                console.log(error);
                                console.log(objError);
                            }
                        });
                    }
                }

                //Previene que se realice la redirección con el submit del formulario
                return false;
            });


        });

        function store_visited_lo(rep_id, lo_id, existUserProfile) {

            if(existUserProfile){

                var formulario =  $('#formulario');

                formulario.append('<input type="hidden" name="rep_id" id="rep_id" value="' +
                    rep_id + '">');
                formulario.append('<input type="hidden" name="lo_id" id="lo_id" value="' +
                    lo_id + '">');

                $.ajax({
                    type: "POST",
                    data: formulario.serialize(),
                    url: "{{ route('Lo.save_visited') }}",
                    async: true,
                    success: function(datos){
                        var dataJson = eval(datos);
                        console.log(dataJson);
                        $("#rep_id").remove();
                        $("#lo_id").remove();
                    },
                    error: function (obj, error, objError){
                        //avisar que ocurrió un error
                        console.log(obj);
                        console.log(error);
                        console.log(objError);
                    }
                });
            }
        }

        function store_lo_rate(rep_id, lo_id, generalRate, contributionRate, designRate, qualityRate, recommendedRate, existUserProfile) {

            generalRate = generalRate || 0;
            contributionRate = contributionRate || 0;
            designRate = designRate || 0;
            qualityRate = qualityRate || 0;
            recommendedRate = recommendedRate || 0;

            if(existUserProfile){

                var formulario =  $('#formulario');

                formulario.append('<input type="hidden" name="repository_id" id="repository_id" value="' +
                    rep_id + '">');
                formulario.append('<input type="hidden" name="object_id" id="object_id" value="' +
                    lo_id + '">');
                formulario.append('<input type="hidden" name="calification" id="calification" value="' +
                    generalRate + '">');
                formulario.append('<input type="hidden" name="contribution" id="contribution" value="' +
                    contributionRate + '">');
                formulario.append('<input type="hidden" name="design" id="design" value="' +
                    designRate + '">');
                formulario.append('<input type="hidden" name="quality" id="quality" value="' +
                    qualityRate + '">');
                formulario.append('<input type="hidden" name="recommended" id="recommended" value="' +
                    recommendedRate + '">');

                $.ajax({
                    type: "POST",
                    data: formulario.serialize(),
                    url: "{{ route('Lo.save_calification') }}",
                    async: true,
                    success: function(datos){
                        var dataJson = eval(datos);
                        console.log('Calificación guardada ' + dataJson);

                        $("#repository_id").remove();
                        $("#object_id").remove();
                        $("#calification").remove();
                        $("#contribution").remove();
                        $("#design").remove();
                        $("#quality").remove();
                        $("#recommended").remove();
                    },
                    error: function (obj, error, objError){
                        //avisar que ocurrió un error
                        console.log(obj);
                        console.log(error);
                        console.log(objError);
                    }
                });
            }
        }

        function mostrarLOSecciones(listaOA, existUserProfile){

            $('#recomendedLo .resultado').html('');
            $('#othersLo .resultado').html('');

            var contadorLORecomendados = 0;
            var contadorOtrosLO = 0;

            $.each(listaOA, function(index, lom){

                if(lom.value > 0){
                    showLO(lom, '#recomendedLo', existUserProfile);
                    contadorLORecomendados ++;
                }else{
                    showLO(lom, '#othersLo', existUserProfile);
                    contadorOtrosLO ++;
                }
            });

            if(contadorLORecomendados === 0){
                $('#recomendedLo .resultado').append('<div class"row">' +
                    'No existen objetos de aprendizaje recomendados' +
                    '</div>');
            }
            if(contadorOtrosLO === 0){
                $('#othersLo .resultado').append('<div class"row">' +
                    'No existen más objetos de aprendizaje para mostrar' +
                    '</div>');
            }
        }

        function showLO(lom, idDiv, existUserProfile){

            if(existUserProfile){
                $(idDiv + ' > .resultado').append('' +
                    '<div class="row">' +
                    '<div class="col-lg-12 col-md-12">' +
                    '<div class="col.md-2">' +
                    '<div class="panel panel-default">' +
                    '<div class="panel-heading">' +
                    '<a href="' + lom.location + '" onclick="store_visited_lo(' +
                    lom.rep_id + ',' + lom.lo_id + ',' + existUserProfile + ')" target="_blank" class="">' + lom.title + '</a>' +
                    '</div>' +
                    '<div class="panel-body" style="text-align: justify;">' +
                    '<strong>Ubicación: </strong>' + lom.coverage + '<br>' +
                    '<strong>Descripción: </strong><a class="descripcion-lo" href="' +
                    lom.location + '" target="_blank">' + lom.description + '</a><br>' +
                    '<strong>Palabras clave: </strong>' + lom.keyword + '<br>' +
                    '<strong>Formato: </strong>' + lom.format + '<br>' +
                    '<strong>Puntuación de adaptación: </strong>' + lom.value + '<br>' +
                    '<strong>Valoración general del objeto: </strong><div style="display: inline-block;" id="' + lom.rep_id + '-' + lom.lo_id + '-general" class="rate"></div><br>' +
                    '<strong>Valoración según lo que aportó a tu aprendizaje: </strong><div style="display: inline-block;" id="' + lom.rep_id + '-' + lom.lo_id + '-contribution" class="rate"></div><br>' +
                    '<strong>Valoración del diseño: </strong><div style="display: inline-block;" id="' + lom.rep_id + '-' + lom.lo_id + '-design" class="rate"></div><br>' +
                    '<strong>Valoración de la calidad del contenido: </strong><div style="display: inline-block;" id="' + lom.rep_id + '-' + lom.lo_id + '-quality" class="rate"></div><br>' +
                    '<strong>¿Recomendarías este objeto?: </strong><div style="display: inline-block;" id="' + lom.rep_id + '-' + lom.lo_id + '-recommended" class="rate"></div><br>' +
                    //'<button disabled="disabled" class="btn btn-primary" id="' + lom.rep_id + '-' + lom.lo_id + '-saveAssessment">Guardar Calificación</button>' +
                    '<button class="btn btn-primary" id="' + lom.rep_id + '-' + lom.lo_id + '-saveAssessment">Guardar Calificación</button>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>');

                var options = {
                    max_value: 5,
                    step_size: 1,
                    initial_value: 0
                };

                var rate = $('.rate');

                rate.rate(options);

                $('button#' + lom.rep_id + '-' + lom.lo_id + '-saveAssessment').on('click', function(ev, data){
                    var generalRate = $('#' + lom.rep_id + '-' + lom.lo_id + '-general').rate("getValue");
                    var contributionRate = $('#' + lom.rep_id + '-' + lom.lo_id + '-contribution').rate("getValue");
                    var designRate = $('#' + lom.rep_id + '-' + lom.lo_id + '-design').rate("getValue");
                    var qualityRate = $('#' + lom.rep_id + '-' + lom.lo_id + '-quality').rate("getValue");
                    var recommendedRate = $('#' + lom.rep_id + '-' + lom.lo_id + '-recommended').rate("getValue");
                    //$(this).attr('disabled', true);
                    store_lo_rate(lom.rep_id, lom.lo_id, generalRate, contributionRate, designRate, qualityRate, recommendedRate, existUserProfile);
                });
            }else{
                $(idDiv + ' > .resultado').append('' +
                    '<div class="row">' +
                    '<div class="col-lg-12 col-md-12">' +
                    '<div class="col.md-2">' +
                    '<div class="panel panel-default">' +
                    '<div class="panel-heading">' +
                    '<a href="' + lom.location + '" onclick="store_visited_lo(' +
                    lom.rep_id + ',' + lom.lo_id + ',' + existUserProfile + ')" target="_blank" class="">' + lom.title + '</a>' +
                    '</div>' +
                    '<div class="panel-body" style="text-align: justify;">' +
                    '<strong>Ubicación: </strong>' + lom.coverage + '<br>' +
                    '<strong>Descripción: </strong><a class="descripcion-lo" href="' +
                    lom.location + '" target="_blank">' + lom.description + '</a><br>' +
                    '<strong>Palabras clave: </strong>' + lom.keyword + '<br>' +
                    '<strong>Formato: </strong>' + lom.format + '<br>' +
                    '<strong>Puntuación de adaptación: </strong>' + lom.value + '<br>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>');
            }
        }

        function getUserProfile(){

            var userProfile = new UserProfile();

            @if ($usuario !== null)
                    userProfile.idioma = '{!! $usuario[0]->language !!}';
                    userProfile.nivel_escolaridad = '{!! $usuario[0]->educativeLevel !!}';
            @endif

            @if ($data !== null)

                @if (
                    !empty($data["learningStyle"]) and
                    !empty($data["need"]) //and
                    //!empty($data["personalization"])
                    )

                    //Estilo de aprendizaje
                    userProfile.id_estilo_aprendizaje = '{!! $data["learningStyle"][0]["reference_learning_styles"] !!}';
                    userProfile.ls_vark = '';
                    userProfile.ls_dicotomia = '';
                    userProfile.ls_visual = '{!! $data["learningStyle"][0]["visual"] !!}';
                    userProfile.ls_kinestesico = '{!! $data["learningStyle"][0]["kinestesic"] !!}';
                    userProfile.ls_auditivo = '{!! $data["learningStyle"][0]["auditory"] !!}';
                    userProfile.ls_lector = '{!! $data["learningStyle"][0]["reader"] !!}';
                    userProfile.ls_global = '{!! $data["learningStyle"][0]["global"] !!}';
                    userProfile.ls_secuencial = '{!! $data["learningStyle"][0]["sequential"] !!}';

                    //Need
                    userProfile.need = '{!! $data["need"][0]["NEED"] !!}';

                    userProfile.need_visual = '{!! $data["need"][0]["V"] !!}';
                    userProfile.need_v1 = '{!! $data["need"][0]["V1"] !!}';
                    userProfile.need_v2 = '{!! $data["need"][0]["V2"] !!}';

                    userProfile.need_auditiva = '{!! $data["need"][0]["A"] !!}';
                    userProfile.need_a1 = '{!! $data["need"][0]["A1"] !!}';
                    userProfile.need_a2 = '{!! $data["need"][0]["A2"] !!}';
                    userProfile.need_a3 = '{!! $data["need"][0]["A3"] !!}';

                    userProfile.need_motriz = '{!! $data["need"][0]["M"] !!}';
                    userProfile.need_m1 = '{!! $data["need"][0]["M1"] !!}';
                    userProfile.need_m2 = '{!! $data["need"][0]["M2"] !!}';
                    userProfile.need_m3 = '{!! $data["need"][0]["M3"] !!}';

                    userProfile.need_cognitiva = '{!! $data["need"][0]["C"] !!}';
                    userProfile.need_c1 = '{!! $data["need"][0]["C1"] !!}';
                    userProfile.need_c2 = '{!! $data["need"][0]["C2"] !!}';
                    userProfile.need_c3 = '{!! $data["need"][0]["C3"] !!}';

                    userProfile.need_etnica = '{!! $data["need"][0]["E"] !!}';
                    userProfile.need_e1 = '{!! $data["need"][0]["E1"] !!}';
                @endif
            @endif

            userProfile = varificarLs(userProfile);

            return userProfile;

        }

        function processXml(xml, rep_id, lo_id) {

            var lom = new LOMMetadata();

            lom.rep_id = rep_id;

            lom.lo_id = lo_id;

            lom.value = 0;

            lom.title = $(xml).find("lom\\:general").find("lom\\:title").text();

            lom.language = $(xml).find("lom\\:general").find("lom\\:language").text();

            lom.description = $(xml).find("lom\\:general").find("lom\\:description").text();

            lom.format = [];
            for(var i = 0; i < $(xml).find("lom\\:technical").find("lom\\:format").length; i ++){
                lom.format.push($(xml).find("lom\\:technical").find("lom\\:format").get(i).innerText.toLowerCase().trim());
            }

            lom.location = $(xml).find("lom\\:technical").find("lom\\:location").text();

            lom.educationalLanguage = $(xml).find("lom\\:educational").find("lom\\:language").text();

            /************************************************************************/

            lom.type = $(xml).find("lom\\:type").text();

            lom.name = $(xml).find("lom\\:name").text();

            lom.minimumVersion = $(xml).find("lom\\:minimumversion").text();

            lom.maximumVersion = $(xml).find("lom\\:maximumversion").text();

            lom.interactivityType = $(xml).find("lom\\:interactivitytype").text();

            lom.learningResourceType = [];
            for(var j = 0; j < $(xml).find("lom\\:learningresourcetype").length; j ++){
                lom.learningResourceType.push($(xml).find("lom\\:learningresourcetype").get(j).innerText.toLowerCase().trim());
            }

            lom.interactivityLevel = $(xml).find("lom\\:interactivitylevel").text();

            lom.intendedEndUserRole = $(xml).find("lom\\:intendedenduserrole").text();

            lom.context = $(xml).find("lom\\:context").text();

            lom.typicalAgeRange = $(xml).find("lom\\:typicalagerange").text();

            lom.difficulty = $(xml).find("lom\\:difficulty").text();

            lom.typicalLearningTime = $(xml).find("lom\\:typicallearningtime").text();

            lom.auditory = $(xml).find("lom\\:auditory").text();

            lom.textual = $(xml).find("lom\\:textual").text();

            lom.visual = $(xml).find("lom\\:visual").text();

            lom.keyboard = $(xml).find("lom\\:keyboard").text();

            lom.mouse = $(xml).find("lom\\:mouse").text();

            lom.voiceRecognition = $(xml).find("lom\\:voicerecognition").text();

            lom.audioDescription = $(xml).find("lom\\:audiodescription").text();

            lom.hearingAlternative = $(xml).find("lom\\:hearingalternative").text();

            lom.textualAlternative = $(xml).find("lom\\:textualalternative").text();

            lom.signLanguage = $(xml).find("lom\\:signlanguage").text();

            lom.subtitles = $(xml).find("lom\\:subtitles").text();

            lom.keyword = [];
            for(var k = 0; k < $(xml).find("lom\\:general").find("lom\\:keyword").length; k ++){
                lom.keyword.push($(xml).find("lom\\:general").find("lom\\:keyword").get(k).innerText.toLowerCase().trim());
            }

            lom.coverage = $(xml).find("lom\\:coverage").text();

            return lom;
        }


        function store_search_lo() {
            $.ajax({
                type: "POST",
                data: $("#formulario").serialize(),
                url: "{{ route('Lo.save_search') }}",
                async: true,
                success: function(datos){
                  var dataJson = eval(datos);
                  console.log(dataJson);
                },
                error: function (obj, error, objError){
                  //avisar que ocurrió un error
                  console.log(obj);
                  console.log(error);
                  console.log(objError);
                }
            });

        }

    </script>
@endsection
