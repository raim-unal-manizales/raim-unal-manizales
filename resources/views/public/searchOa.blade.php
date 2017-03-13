@extends('template.main')

@section('title', 'Buscador de Objetos')

@section('content')

    <div class="contentHeader row">
        <h1 class="pull-left">Buscador de Objetos de Aprendizaje</h1>
    </div>

    <div class="row">

        {!! Form::open(['id'=>'formulario', 'method'=>'post', 'enctype'=>'multipart/form-data']) !!}
            <div class="form-group">
                <label for="text" class="">Buscar objetos:</label>
                <input type="text" id="text" name="buscar" class="" placeholder="Buscar">
            </div>
            <input type="submit" value="Buscar objetos" name="submit">
        {!! Form::close() !!}
    </div>

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
                    data: "raim=" + searchString,
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

                        if(existUserProfile && listaOA.length > 0){

                            var listaOAInicial = filtroReglasIniciales(listaOA, userProfile);

                            var listaOAMostrar = [];

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
                            }

                            //Muestra los objetos filtrados
                            mostrarLOSecciones(listaOAMostrar);

                        }else if(listaOA.length <= 0){

                            $('#notResults')
                                .append('No existen objetos de aprendizaje que cumplan con los criterios de búsqueda');
                        }else{

                            mostrarLOSecciones(listaOA);
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
                    }

                }

                //Previene que se realice la redirección con el submit del formulario
                return false;
            });
        });

        function mostrarLOSecciones(listaOA){

            $('#recomendedLo .resultado').html('');
            $('#othersLo .resultado').html('');

            var contadorLORecomendados = 0;
            var contadorOtrosLO = 0;

            $.each(listaOA, function(index, lom){

                if(lom.value > 0){
                    showLO(lom, '#recomendedLo');
                    contadorLORecomendados ++;
                }else{
                    showLO(lom, '#othersLo');
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

        function showLO(lom, idDiv){

            $(idDiv + ' > .resultado').append('' +
                    '<div class="row">' +
                    '<div class="col-lg-12 col-md-12">' +
                    '<div class="col.md-2">' +
                    '<div class="panel panel-default">' +
                    '<div class="panel-heading">' +
                    '<a href="' + lom.location + '" onclick="store_visited_lo(' +
                    lom.rep_id + ',' + lom.lo_id + ')" target="_blank" class="">' + lom.title + '</a>' +
                    '</div>' +
                    '<div class="panel-body" style="text-align: justify;">' +
                    '<strong>Ubicación: </strong>' + lom.coverage + '<br>' +
                    '<strong>Descripción: </strong><a class="descripcion-lo" href="' +
                    lom.location + '" target="_blank">' + lom.description + '</a><br>' +
                    '<strong>Palabras clave: </strong>' + lom.keyword + '<br>' +
                    '<strong>Formato: </strong>' + lom.format + '<br>' +
                    '<strong>Puntuación de adpatación: </strong>' + lom.value + '<br>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>');
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

        function store_visited_lo(rep_id, lo_id) {
          if(existUserProfile){

            $("#formulario").append('<input type="hidden" name="rep_id" id="rep_id" value="' +
                rep_id + '">');
            $("#formulario").append('<input type="hidden" name="lo_id" id="lo_id" value="' +
                lo_id + '">');

            $.ajax({
                type: "POST",
                data: $("#formulario").serialize(),
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

    </script>
@endsection
