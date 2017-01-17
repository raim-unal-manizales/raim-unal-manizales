
        <div class="fieldForm">
            {!! Form::label('fondSize','Tamaño de fuente') !!}
            {!! Form::number('fondSize', 'value',['class' => '','id'=>'fondSize', 'placeholder' => '¿Desea Aumentar o Disrminuir el Tamaño de Fuente?', 'min'=>'1', 'max'=>'99' ])!!}
        </div>

       	<div class="fieldForm">
            {!! Form::label('interline','Tamaño de interlineado') !!}
            {!! Form::number('interline', 'value',['class' => '','id'=>'interline', 'placeholder' => '¿Desea Aumentar o Disrminuir el Tamaño del Interlineado?' , 'min'=>'1', 'max'=>'99' ])!!}
        </div>

        <div class="fieldForm">
            {!! Form::label('contrast','Contraste') !!}
            {!! Form::select('contrast', ['highContrast0'=>'Normal','highContrast1'=>'Negro - Blanco','highContrast2'=>'Amarillo - Negro','highContrast3'=>'Azul - Naranja'] ,null, ['class' => '','id'=>'contrast']) !!}
        </div>

        <div class="fieldForm">
            {!! Form::label('font','Fuente') !!}
            {!! Form::select('font',
            		[	'Normal'=>'Normal',
            			'Arial'=>'Arial',
            			'Georgia'=>'Georgia',
            			'Helvetica'=>'Helvetica',
            			'Courier'=>'Courier',
            			'monospace'=>'monospace',
            			'Serif'=>'Serif',
            			'Comic Sans MS'=>'Comic Sans MS'
            		],null, ['class' => '','id'=>'font']) !!}
        </div>

        <div>
            {{ Form::hidden('user_id','') }}
        </div>

        <div class="fieldForm">
            {{ Form::hidden('Personalization','Termine', ['value' => 'Termine']) }}
        </div>
