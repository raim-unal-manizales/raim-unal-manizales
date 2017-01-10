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
                                    <img src="{{ asset('/images/img_need_visual/1.1.jpg') }} ">
                                </td>
                                <td><input type="radio" name="V2" id="V2" value="V2_OpcionDos">
                                    <img src="{{ asset('/images/img_need_visual/1.3.jpg') }}">
                                </td>
                            <tr>
                            <tr>
                                <td><input type="radio" name="V2" id="V2" value="V2_OpcionTres">
                                    <img src="{{ asset('/images/img_need_visual/1.7.jpg ') }}">
                                </td>
                                <td><input type="radio" name="V2" id="V2" value="V2_OpcionCuatro">
                                    <img src="{{ asset('/images/img_need_visual/2.0.jpg') }}">
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


        <div>
            {{ Form::hidden('user_id','') }}
        </div>

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
                                    <select class="E1" id="E1" name="E1">

                                        <?php foreach ($needEtnica as $key => $value): ?>
                                            <option value="{{$value}}">{{ $value}}</option>
                                        <?php endforeach ?>
                                    </select>
                                    <div id="OtraNeedEtnica">

                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
         </div>

        <div class="fieldForm">
            {{ Form::hidden('Need','Termine', ['value' => 'Termine']) }}
        </div>

            <!-- expancion de necesidades Cognitiva-->
