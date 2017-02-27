@extends('template.main')

@section('title', 'Crear Usuario')

@section('content')

<div class="row row-centered">
    <br>
    <div class="col-md-12">
        {!! Form::open(['route'=> 'Public.store_create_user','method'=> 'POST','id'=>'commentForm', 'class'=>'form-horizontal']) !!}
            <div id="rootwizard" class="col-md-11 col-centered">
                <ul class="">
                    <li><a href="#tab1" class="tab1" data-toggle="tab">Paso 1 : Información <br> Básica</a></li>
                    <li><a href="#tab2" class="tab2" data-toggle="tab">Paso 2 : Información De <br> Aplicaciones</a></li>
                    <li><a href="#tab4"  class="tab4" data-toggle="tab">Paso 3 : Necesidades <br> Especiales</a></li>
                    <li><a href="#tab3" class="tab3" data-toggle="tab">Paso 4 : Estilos de <br> Aprendizaje</a></li> 
                    <li><a href="#tab5" class="tab5" data-toggle="tab">Paso 5 : Personalización <br> de Interfaz</a></li>
                    
                </ul>
                    <div class="tab-content">
                        <div class="tab-pane" id="tab1">
                            <h3>Información Básica</h3>
                            @include('public.partialsRegistrer.user')
                        </div>
                        <div class="tab-pane" id="tab2">
                            <h3>Iformación De Aplicaciones</h3>
                            @include('public.partialsRegistrer.aplication_all')
                        </div>
                        <div class="tab-pane" id="tab3">
                            <h3>Estilos de Aprendizaje</h3>
                            @include('public.partialsRegistrer.learning_style')
                        </div>     
                        <div class="tab-pane" id="tab4">
                            <h3>Necesidades Especiales</h3>
                            @include('public.partialsRegistrer.need')
                        </div>
                        <div class="tab-pane" id="tab5">
                            <h3>Personalización de Interfaz</h3>
                            @include('public.partialsRegistrer.personalization')
                        </div>

                        <ul class="pager wizard">
                            <li class="previous first" style="display:none;"><a href="#">Inicio</a></li>
                            <li class="previous"><a href="#">Anterior</a></li>
                            <li class="next last" style="display:none;"><a href="#">Final</a></li>
                            <li class="next"><a href="#">Siguiente</a></li>
                            <li class="finish"><input id="sendRegistry" type="submit" class="btn" value="enviar" href="javascript:;"></input></li>
                        </ul>
                    </div>
            </div>
        {!! Form::close() !!} keyword
    </div>
</div>

@endsection

@section('javascript')

<script type="text/javascript">


$(document).ready(function(){
    $("select[name='E1']").change(function(){
        if ($('select[name=E1]').val() == 'Otra') {
            $('#OtraNeedEtnica').append(insertOptionNew());
        }else{
            if ($("#contentNeedNew").length > 0) {
                $("#contentNeedNew").remove();
            }
        }
    });
});

function insertNeedFunction(){
    var nuevo = $("input[id='insertNeed']").val();
    $('select[name=E1]').append("<option value='"+nuevo+"' selected='selected'>"+nuevo+"</option>");
    $("#contentNeedNew").remove();
}

function cancelNeedFunction(){
    $("#contentNeedNew").remove();
}

function insertOptionNew() {
    return "<div id='contentNeedNew'><input id='insertNeed' type='text'> <button class='btn btn-success' type='button' id='insertNeedBTN' onclick='insertNeedFunction()'>Aceptar</button><button  class='btn btn-danger' type='button' id='cancelarNeedBTN' onclick='cancelNeedFunction()'>Cancelar</button>";
}


</script>



<script type="text/javascript">
    $(document).ready(function() {
        var $validator = $("#commentForm").validate({

            });
     
            $('#rootwizard').bootstrapWizard({
                'tabClass': 'nav nav-pills',
                'onNext': function(tab, navigation, index) {
                    var $valid = $("#commentForm").valid();
                    
                    if(!$valid) {
                        $validator.focusInvalid();
                        return false;
                    }
                }
            });
        $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
            var $total = navigation.find('li').length;
            var $current = index+1;
            var $percent = ($current/$total) * 100;
            $('#rootwizard').find('.bar').css({width:$percent+'%'});
        }});

        $('.next').click(function (argument) {

        });    

        $('#rootwizard .finish').click(function() {

        });


    });
</script>

     <script type="text/javascript">                        

        $(document).ready(function()
            {
                $("input[name=inicial-Learning]").click(function () {
                    if ($('input:radio[name=inicial-Learning]:checked').val() == "Si") {

                        verTr(document.getElementById('test-learning-style'));

                    }else{
                        ocultarTr(document.getElementById('test-learning-style'));
                    }
                    
                });

               $("input[name=NEED]").click(function () {    
                    
                    if ($('input:radio[name=NEED]:checked').val() == "Si") {
                            
                        verTr(document.getElementById('tipo_necesidad'));
                        verTr(document.getElementById('tipo_necesidad1'));
                        verTr(document.getElementById('tipo_necesidad2'));
                        verTr(document.getElementById('tipo_necesidad3'));
                        verTr(document.getElementById('tipo_necesidad4'));
                        verTr(document.getElementById('tipo_necesidad5'));
                        verTr(document.getElementById('tipo_necesidad6'));

                        notLearningStyle();

                        verTr(document.getElementById('Boton'));
                    }else{
                        
                        ocultarTr(document.getElementById('tipo_necesidad'));
                        ocultarTr(document.getElementById('tipo_necesidad1'));
                        ocultarTr(document.getElementById('tipo_necesidad2'));
                        ocultarTr(document.getElementById('tipo_necesidad3'));
                        ocultarTr(document.getElementById('tipo_necesidad4'));
                        ocultarTr(document.getElementById('tipo_necesidad5'));
                        ocultarTr(document.getElementById('tipo_necesidad6'));

                        indefineLearningStile();

                        verTr(document.getElementById('Boton'));
                    }

                });

                $("input[name=V]").click(function () {    
                    
                    if ($('input:checkbox[name=V]:checked').val() == "Si") {
                            
                        verTr(document.getElementById('intermedio1'));
                        verTr(document.getElementById('visual'));
                        verTr(document.getElementById('visual1'));

                    }else{
                        
                        ocultarTr(document.getElementById('intermedio1'));
                        ocultarTr(document.getElementById('visual'));
                        ocultarTr(document.getElementById('visual1'));

                    }

                });

                $("input[name=V1]").click(function () {    
                    
                    if ($('input:radio[name=V1]:checked').val() == "Baja_vision") {
                            
                        verTr(document.getElementById('visual2'));
                        verTr(document.getElementById('visual3'));

                    }else{
                        
                        ocultarTr(document.getElementById('visual2'));
                        ocultarTr(document.getElementById('visual3'));
                    }

                });


                $("input[name=A]").click(function () {    
                    
                    if ($('input:checkbox[name=A]:checked').val() == "Si") {
                            
                        verTr(document.getElementById('Auditivo'));
                        verTr(document.getElementById('Auditivo1'));

                    }else{
                        
                        ocultarTr(document.getElementById('Auditivo'));
                        ocultarTr(document.getElementById('Auditivo1'));
                    }

                });


                $("input[name=M]").click(function () {    
                    
                    if ($('input:checkbox[name=M]:checked').val() == "Si") {
                            
                        verTr(document.getElementById('Motriz'));
                        verTr(document.getElementById('Motriz1'));

                    }else{
                        
                        ocultarTr(document.getElementById('Motriz'));
                        ocultarTr(document.getElementById('Motriz1'));
                    }

                });

                $("input[name=C]").click(function () {    
                    
                    if ($('input:checkbox[name=C]:checked').val() == "Si") {
                            
                        verTr(document.getElementById('Cognitiva'));
                        verTr(document.getElementById('Cognitiva1'));

                    }else{
                        
                        ocultarTr(document.getElementById('Cognitiva'));
                        ocultarTr(document.getElementById('Cognitiva1'));
                    }

                });

                $("input[name=E]").click(function () {    
                    
                    if ($('input:checkbox[name=E]:checked').val() == "Si") {
                            
                        verTr(document.getElementById('Etnica'));
                        verTr(document.getElementById('Etnica1'));

                    }else{
                        
                        ocultarTr(document.getElementById('Etnica'));
                        ocultarTr(document.getElementById('Etnica1'));
                    }

                });
            });


        function  verTr(fila){
            fila.style.display = ""; 
        }

        function ocultarTr(fila){
            fila.style.display = "none";
        }

        function notLearningStyle(){
           
        }

        function indefineLearningStile(){
           
        }

    </script>
@endsection