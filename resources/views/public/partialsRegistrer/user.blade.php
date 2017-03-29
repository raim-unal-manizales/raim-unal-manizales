        <div class="fieldForm">
            {!! Form::label('user_name','Nombre de Usuario') !!}
            {!! Form::text('user_name', null ,['class' => 'form-control', 'placeholder' => 'Nombre de Usuario','required']) !!}
        </div>

        <div class="fieldForm">
            {!! Form::label('first_name','Primer Nombre') !!}
            {!! Form::text('first_name', null ,['class' => 'form-control', 'placeholder' => 'Primer Nombre','required']) !!}
        </div>

        <div class="fieldForm">
            {!! Form::label('second_name','Segundo Nombre') !!}
            {!! Form::text('second_name', null ,['class' => 'form-control', 'placeholder' => 'Segundo Nombre']) !!}
        </div>

        <div class="fieldForm">
            {!! Form::label('last_name','Apellido') !!}
            {!! Form::text('last_name', null ,['class' => 'form-control', 'placeholder' => 'Apellido','required']) !!}

        </div>

        <div class="fieldForm">
            {!! Form::label('email','Correo electrónico') !!}
            {!! Form::email('email', null ,['class' => 'form-control', 'placeholder' => 'exmple@gmail.com','required']) !!}

        </div>

        <div class="fieldForm">
            {!! Form::label('educativeLevel','Nivel Educativo') !!}
            {!! Form::select('educativeLevel', ['Preescolar'=>'Preescolar','Basica Primaria'=>'Básica Primaria','Basica Secundaria'=>'Básica Secundaria','Media'=>'Media','Superior'=>'Superior','Otro'=>'Otro'] ,null, ['class' => 'form-control', 'required']) !!}
        </div>
        
        <div class="fieldForm">
            {!! Form::label('institution','Institución') !!}
            {!! Form::text('institution', null ,['class' => 'form-control', 'placeholder' => '','required']) !!}

        </div>
        <div class="fieldForm">
            {!! Form::label('birth_date','Fecha de Nacimiento') !!}
            {!! Form::date('birth_date', null, ['class' => 'form-control ','required']) !!}

        </div>
        <div class="fieldForm">
            {!! Form::label('language','Idioma') !!}
            {!! Form::select('language', ['Español'=>'Español','Ingles'=>'Inglés'] , null, ['class' => 'form-control','required']) !!}

        </div>

        
        <div class="fieldForm">
            {!! Form::label('id_rol','Rol') !!}
            {!! Form::select('id_rol', $rol ,null, ['class' => 'form-control','required']) !!}

        </div>


        <div class="fieldForm">
            {!! Form::label('password','Contraseña') !!}  
            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '**********','required']) !!}

        </div>

        <div class="fieldForm">
                {!! Form::label('password_confirmation','Confirmación de Contraseña') !!}
                {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => '**********', 'required']) !!}
        </div>

        <div class="fieldForm">
            {{ Form::hidden('User','Termine', ['value' => 'Termine']) }}
        </div>
