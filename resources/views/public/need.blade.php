@extends('template.main')

@section('title', 'Necesidades Especiales')

@section('content')

<!-- 
    // cabezera del contenido
-->
  <div class="contentHeader">
        <h1>Necesidades Especiales</h1> 
  </div>

<!-- 
    //fin de la cabezera del contenido
-->
    
    {!! Form::open(['route'=> 'Public.store_need','method'=> 'POST']) !!}

        <div>
            <table class="inicial" id="inicial">

            <!-- Pregunta inicial para saber si el usuario posee alguna NEED-->             
                <tr> 
                    <td><strong><label>¿Presenta algún tipo de necesidad especial?</label></strong></td>                  
                </tr>
                <tr>
                    <td>
                        <input type="radio" name="NEED" id="NEED" value="Si" >
                            <strong> Si </strong> Presento una necesidad especial
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="radio" name="NEED" id="NEED" value="No" >
                            <strong> No </strong> Presento una necesidad especial
                    </td>
                </tr>
            <!-- Fin de pregunta inicial para saber si el usuario posee alguna NEED-->  

            <tr style="display: none;" id="tipo_necesidad" ><td>&nbsp;</td></tr>

            <!-- Pregunta para saber que tipo de necesidades especiales posee un usuario-->

                <tr style="display: none;" id="tipo_necesidad1">
                    <td><strong><label>¿Qué tipo de necesidad especial presenta?</label></strong></td>
                </tr>
                <tr style="display: none;" id="tipo_necesidad2"><td><input type="checkbox" name="V" id="V" value="Si" > Visual</td></tr>
                <tr style="display: none;" id="tipo_necesidad3"><td><input type="checkbox" name="A" id="A" value="Si" > Auditiva</td></tr>
                <tr style="display: none;" id="tipo_necesidad4"><td><input type="checkbox" name="M" id="M" value="Si" > Motriz</td></tr>
                <tr style="display: none;" id="tipo_necesidad5"><td><input type="checkbox" name="C" id="C" value="Si" > Cognitiva</td></tr>
                <tr style="display: none;" id="tipo_necesidad6"><td><input type="checkbox" name="E" id="E" value="Si" > Étnica</td></tr>

            <!-- fin de pregunta para saber que tipo de necesidades especiales posee un usuario-->

            <tr style="display: none;" id="intermedio1" ><td>&nbsp;</td></tr>

            <!-- expancion de necesidades visuales-->
                <tr style="display: none;" class="visual" id="visual">
                    <td>
                        <table style="display: none;" class="visual1" id="visual1">
                            <tr>
                                <td>
                                    <strong><label>¿En qué grado se presenta dicha condición?</label></strong>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="V1" id="V1" value="Vision_Nula">Visión nula</td>
                            <tr>
                                <td><input type="radio" name="V1" id="V1" value="Baja_vision">Baja Visión</td>
                            </tr>
                        </table>
                    </td>    
                </tr>  

                <tr style="display: none;" class="visual2" id="visual2">      

                    <td>
                        <table style="display: none;" class="visual3" id="visual3">
                            <tr>
                                <td>
                                    <strong><label>¿Cuál de los siguientes textos puede comprender con mayor facilidad?</label></strong>
                                </td>
                                <td>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="V2" id="V2" value="V2_OpcionUno">
                                    <img src="/images/img_need_visual/1.1.jpg">
                                </td>
                                <td><input type="radio" name="V2" id="V2" value="V2_OpcionDos">
                                    <img src="/images/img_need_visual/1.3.jpg">
                                </td>
                            <tr>
                            <tr>
                                <td><input type="radio" name="V2" id="V2" value="V2_OpcionTres">
                                    <img src="/images/img_need_visual/1.7.jpg">
                                </td>
                                <td><input type="radio" name="V2" id="V2" value="V2_OpcionCuatro">
                                    <img src="/images/img_need_visual/2.0.jpg">
                                </td>
                            <tr>
                        </table>
                    </td>
                </tr>


            <!-- expancion de necesidades Auditiva-->
                <tr style="display: none;" class="Auditivo" id="Auditivo">
                    <td>
                        <table style="display: none;" class="Auditivo1" id="Auditivo1">
                            <tr>
                                <td>
                                    <strong><label>¿En qué grado se presenta dicha condición?</label></strong>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="A1" id="A1" value="Audicion_Nula">Audición nula</td>
                            <tr>
                                <td><input type="radio" name="A1" id="A1" value="Baja_Audicion">Baja Audición </td>
                            </tr>

                            <tr><td>&nbsp;</td></tr>

                            <tr>
                                <td>
                                    <strong><label>¿Utiliza lenguaje de señas o símbolos?</label></strong>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="radio" name="A2" id="A2" value="Si" >
                                        <strong> Si </strong> Utilizo lengua de señas o simbolos
                                </td>
                            </tr>
                            <td>
                                <input type="radio" name="A2" id="A2" value="No" >
                                    <strong> No </strong> Utilizo lengua de señas o simbolos
                            </td>
                            </tr>

                            <tr><td>&nbsp;</td></tr>

                            <tr>
                                <td>
                                    <strong><label>¿Comprende textos?</label></strong>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="radio" name="A3" id="A3" value="Si" >
                                        <strong> Si </strong> Comprendo textos
                                </td>
                            </tr>
                            <td>
                                <input type="radio" name="A3" id="A3" value="No" >
                                    <strong> No </strong> Comprendo textos
                            </td>
                            </tr>

                        </table>
                    </td>
                </tr>
            <!-- expancion de necesidades Auditiva-->

            <!-- expancion de necesidades Motriz-->
                <tr style="display: none;" class="Motriz" id="Motriz">
                    <td>
                        <table style="display: none;" class="Motriz1" id="Motriz1">
                            <tr>
                                <td>
                                    <strong><label>¿Puede manipular el mouse del computador?</label></strong>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="M1" id="M1" value="Si">
                                    <strong> Si </strong> Puedo manipular el mouse
                                </td>
                            <tr>
                                <td><input type="radio" name="M1" id="M1" value="No">
                                    <strong> No </strong> Puedo manipular el mouse
                                </td>
                            </tr>

                            <tr><td>&nbsp;</td></tr>

                            <tr>
                                <td>
                                    <strong><label>¿Puede manipular el teclado del computador?</label></strong>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="M2" id="M2" value="Si">
                                    <strong> Si </strong> Puedo manipular el teclado
                                </td>
                            <tr>
                                <td><input type="radio" name="M2" id="M2" value="No">
                                    <strong> No </strong> Puedo manipular el teclado
                                </td>
                            </tr>

                            <tr><td>&nbsp;</td></tr>

                            <tr>
                                <td>
                                    <strong><label>¿Utiliza alguna Tecnología Asistiva?</label></strong>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="M3" id="M3" value="Si">
                                    <strong> Si </strong> Utilizo tecnologías asistivas
                                </td>
                            <tr>
                                <td><input type="radio" name="M3" id="M3" value="No">
                                    <strong> No </strong> Utilizo tecnologías asistivas
                                </td>
                            </tr>
                        </table> 
                    </td>
                </tr>


            <!-- expancion de necesidades Motriz-->

            <!-- expancion de necesidades Cognitiva-->
                <tr style="display: none;" class="Cognitiva" id="Cognitiva">
                    <td>
                        <table style="display: none;"  class="Cognitiva1" id="Cognitiva1">
                            <tr>
                                <td>
                                    <strong><label>¿Tiene dificultades para comprender un texto escrito o expresarse a través del mismo?</label></strong>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="C1" id="C1" value="Si">
                                    <strong> Si </strong> Tengo dificultades para comprender  textos escritos o expresarme a través de los mismos
                                </td>
                            <tr>
                                <td><input type="radio" name="C1" id="C1" value="No">
                                    <strong> No </strong> Tengo dificultades para comprender  textos escritos o expresarme a través de los mismo
                                </td>
                            </tr>

                            <tr><td>&nbsp;</td></tr>

                            <tr>
                                <td>
                                    <strong><label>¿Suele tener dificultades para seguir instrucciones o actividades que se le indican?</label></strong>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="C2" id="C2" value="Si">
                                    <strong> Si </strong> Tengo dificultades para seguir instrucciones o actividades que se me indican
                                </td>
                            <tr>
                                <td><input type="radio" name="C2" id="C2" value="No">
                                    <strong> No </strong> Tengo dificultades para seguir instrucciones o actividades que se me indican
                                </td>
                            </tr>

                            <tr><td>&nbsp;</td></tr>
                            
                            <tr>
                                <td>
                                    <strong><label>¿Presenta dificultades para recordar o concentrarse?</label></strong>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="C3" id="C3" value="Si">
                                    <strong> Si </strong> Presento dificultades para recordar o concentrarme
                                </td>
                            <tr>
                                <td><input type="radio" name="C3" id="C3" value="No">
                                    <strong> No </strong> Presento dificultades para recordar o concentrarme
                                </td>
                            </tr>
                        </table> 
                    </td>
                </tr>


            <!-- expancion de necesidades Cognitiva-->

            <!-- expancion de necesidades Cognitiva-->
                <tr style="display: none;" class="Etnica" id="Etnica">
                    <td>
                        <table style="display: none;"  class="Etnica1" id="Etnica1">
                            <tr>
                                <td>
                                    <strong><label>Indique a cuál comunidad étnico pertenece:</label></strong>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" placeholder="Aki va el select para necesidad etnica"></input>
                                </td>
                            </tr>
                        </table> 
                    </td>
                </tr>


            <!-- expancion de necesidades Cognitiva-->


                 <tr style="display: none;" class="Boton" id="Boton">
                     <td>
                         <div class="buttonForm">
                            {!! Form::submit('Aceptar',['class' => '']) !!}
                            <a href="{{ route('Public.index') }}">Cancelar</a>
                        </div>
                     </td>
                 </tr>
        </div>

        <div>
            {{ Form::hidden('user_id','1') }}
        </div>




    {!! Form::close() !!}


@endsection

@section('javascript')

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