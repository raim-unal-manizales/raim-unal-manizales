@extends('template.main')

@section('title', 'Crear Usuario')

@section('content')
<!-- 
    // cabezera del contenido
-->
  <div class="contentHeader">
        <h1>Crear Usuario</h1> 
  </div>

<!-- 
    //fin de la cabezera del contenido
-->
    
    {!! Form::open(['route'=> 'Public.store','method'=> 'POST']) !!}
        
        <div class="fieldForm">
            {!! Form::label('user_name','Nombre de Usuario') !!}
            {!! Form::text('user_name', null ,['class' => '', 'placeholder' => 'Nombre de Usuario','required']) !!}         
        </div>

        <div class="fieldForm">
            {!! Form::label('first_name','Primer Nombre') !!}
            {!! Form::text('first_name', null ,['class' => '', 'placeholder' => 'Primer Nombre','required']) !!}
        </div>

        <div class="fieldForm">
            {!! Form::label('second_name','Segundo Nombre') !!}
            {!! Form::text('second_name', null ,['class' => '', 'placeholder' => 'Segundo Nombre','required']) !!}
        </div>

        <div class="fieldForm">
            {!! Form::label('last_name','Apellido') !!}
            {!! Form::text('last_name', null ,['class' => '', 'placeholder' => 'Apellido','required']) !!}

        </div>

        <div class="fieldForm">
            {!! Form::label('email','Correo electrónico') !!}
            {!! Form::email('email', null ,['class' => '', 'placeholder' => 'exmple@gmail.com','required']) !!}         

        </div>
        <div class="fieldForm">
            {!! Form::label('educativeLevel','Nivel Educativo') !!}
            {!! Form::select('educativeLevel', ['Pescolar'=>'Pescolar','Basica Primaria'=>'Basica Primaria','Basica secundaria'=>'Basica secundaria','Media'=>'Media','Superior'=>'Superior','General'=>'General'] ,null, ['class' => '', 'required']) !!}           
        </div>
        
        <div class="fieldForm">
            {!! Form::label('institution','Institución') !!}
            {!! Form::text('institution', null ,['class' => '', 'placeholder' => '','required']) !!}           

        </div>
        <div class="fieldForm">
            {!! Form::label('birth_date','Fecha de Nacimiento') !!}
            {!! Form::date('birth_date', null, ['class' => '','required']) !!}     

        </div>
        <div class="fieldForm">
            {!! Form::label('language','Idioma') !!}
            {!! Form::select('language', ['Español'=>'Español','Inglés'=>'Inglés', 'Portugués'=>'Portugués'] ,null, ['class' => '','required']) !!}

        </div>

        <br>
        
        <div class="fieldForm">
            {!! Form::label('id_rol','Rol') !!}
            {!! Form::select('id_rol', $rol ,null, ['class' => '','required']) !!}         

        </div>


        <div class="fieldForm">
            {!! Form::label('password','Contraseña') !!}  
            {!! Form::password('password', ['class' => '', 'placeholder' => '**********','required']) !!}           
                                        

        </div>

        <div class="buttonForm">
            {!! Form::submit('Registrar',['class' => '']) !!}
            <a href="{{ route('Public.index') }}">Cancelar</a>
        </div>

  
<!--

        <div class="buttonForm">
            <a href="#ventana1" class="btn btn-primary btn-lg" data-toggle="modal">Personalizar Interfaz</a>
        </div>

        <div class="modal fade" id="ventana1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button tyle="button" class="close" data-dismiss="modal" aria-hiden="true">&times;</button>
                        <h2 class="modal-title">Personaliza Tu Interfaz</h2>
                    </div>
                    <div class="modal-body">

                        <ul class="nav nav-primary-level">
                            <li>
                                <a><label id="increase" for="">Aumentar Fuente</label></a>
                            </li>
                            <li>
                                <a><label id="decrease" for="">Disminuir Fuente</label></a>
                            </li>
                            <li>
                                <a><label id="increaseInterline" for="">Aumentar Interlineado</label></a>
                            </li>
                            <li>
                                <a><label id="decreaseInterline" for="">Disminuir Interlineado</label></a>
                            </li>
                            <li>
                                <a><label id="" for="contrast">Contraste</label>
                                    <select class="form-control" id="contrast">
                                        <option value="">Normal</option>
                                        <option value="highContrast1">Negro - Blanco</option>
                                        <option value="highContrast2">Amarillo - Negro</option>
                                        <option value="highContrast3">Azul - Naranja</option>
                                    </select>
                                </a>
                            </li>
                            <li>
                                <a><label id="" for="font">Fuente</label>
                                    <select class="form-control" id="font">
                                        <option value="">Normal</option>
                                        <option value="Arial">Arial</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Helvetica">Helvetica</option>
                                        <option value="Courier">Courier</option>
                                        <option value="monospace">Monospace</option>
                                        <option value="Serif">Serif</option>
                                        <option value="'Comic Sans MS'">Comic Sans</option>
                                    </select>
                                </a>
                            </li>
                        </ul>
                        
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" >Guardar</button>

                    </div>    
                </div>
            </div>
        </div>

-->

    {!! Form::close() !!}


@endsection