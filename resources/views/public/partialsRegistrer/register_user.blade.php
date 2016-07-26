@extends('template.main')

@section('title', 'Crear Usuario')

@section('content')

<div class="row"> 
<div class="col-md-12">
{!! Form::open(['route'=> 'Public.store_create_user','method'=> 'POST','id'=>'SignupForm']) !!}
  <input type='hidden' name="issubmit" value="1">
<!-- Tabs -->
        <div id="wizard" class="swMain">
            <ul>
                <li><a href="#step-1">
                <span class="stepNumber">1</span>
                <span class="stepDesc">Información </br> Básica</span>
            </a></li>
                <li><a href="#step-2">
                <span class="stepNumber">2</span>
                <span class="stepDesc">Informacion  de </br> Aplicaciones</span>
            </a></li>
                <li><a href="#step-3">
                <span class="stepNumber">3</span>
                <span class="stepDesc">Estilos de </br> Aprendizaje<br />
                   <small></small>
                </span>
             </a></li>
                <li><a href="#step-4">
                <span class="stepNumber">4</span>
                <span class="stepDesc">Necesidades </br> Especiales<br/>
                   <small></small>
                </span>
            </a></li>
            <li><a href="#step-5">
                <span class="stepNumber">5</span>
                <span class="stepDesc">Personalización</br> de Interfaz<br/>
                   <small></small>
                </span>
            </a></li>
            </ul>

            <div id="step-1">   
                <h2 class="StepTitle">Paso 1: Información Básica</h2>
                 @include('public.partialsRegistrer.user')
            </div>
            <div id="step-2">   
                <h2 class="StepTitle">Paso 2: Informacion  de  Aplicaciones</h2>
                 @include('public.partialsRegistrer.aplication_all')
            </div>
            <div id="step-3">   
                <h2 class="StepTitle">Paso 3: Estilos de Aprendizaje</h2>
                 @include('public.partialsRegistrer.learning_style')
            </div>
            <div id="step-4">   
                <h2 class="StepTitle">Paso 4: Necesidades Especiales</h2>
                  @include('public.partialsRegistrer.need')
            </div>
            <div id="step-5">   
                <h2 class="StepTitle">Paso 5: Personalización de Interfaz</h2>
                  @include('public.partialsRegistrer.personalization')
            </div>
            
        </div>

<!-- End SmartWizard Content -->        
{!! Form::close() !!} 

</div>
</div>

@endsection

@section('javascript')
    <script type="text/javascript">
        $(document).ready(function(){

            $('#wizard').smartWizard();

            var actionOne = document.getElementById('step0Next');
            actionOne.onclick = saveUser;

    

        });

        function saveUser(){
            alert('link Uno')
        }




    </script>

    <script type="text/javascript">                        

        $(document).ready(function()
            {
               $("input[name=NEED]").click(function () {    
                    
                    if ($('input:radio[name=NEED]:checked').val() == "Si") {
                            
                        verTr(document.getElementById('tipo_necesidad'));
                        verTr(document.getElementById('tipo_necesidad1'));
                        verTr(document.getElementById('tipo_necesidad2'));
                        verTr(document.getElementById('tipo_necesidad3'));
                        verTr(document.getElementById('tipo_necesidad4'));
                        verTr(document.getElementById('tipo_necesidad5'));
                        verTr(document.getElementById('tipo_necesidad6'));

                        verTr(document.getElementById('Boton'));
                    }else{
                        
                        ocultarTr(document.getElementById('tipo_necesidad'));
                        ocultarTr(document.getElementById('tipo_necesidad1'));
                        ocultarTr(document.getElementById('tipo_necesidad2'));
                        ocultarTr(document.getElementById('tipo_necesidad3'));
                        ocultarTr(document.getElementById('tipo_necesidad4'));
                        ocultarTr(document.getElementById('tipo_necesidad5'));
                        ocultarTr(document.getElementById('tipo_necesidad6'));

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

    </script>
@endsection