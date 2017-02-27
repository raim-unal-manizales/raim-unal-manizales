
        <div class="fieldForm">
            {!! Form::label('fontSize','Tamaño de fuente') !!}
            {!! Form::number('fontSize', 'value',['class' => 'fontSize','id'=>'fontSize', 'placeholder' => '¿Desea Aumentar o Disrminuir el Tamaño de Fuente?', 'min'=>'1', 'max'=>'99' ])!!}
        </div>

       	<div class="fieldForm">
            {!! Form::label('interline','Tamaño de interlineado') !!}
            {!! Form::number('interline', 'value',['class' => 'interline','id'=>'interline', 'placeholder' => '¿Desea Aumentar o Disrminuir el Tamaño del Interlineado?' , 'min'=>'1', 'max'=>'99' ])!!}
        </div>

        <div class="fieldForm">
            {!! Form::label('contrast','Contraste') !!}
            {!! Form::select('contrast', [''=>'Normal','highContrast1'=>'Negro - Blanco','highContrast2'=>'Amarillo - Negro','highContrast3'=>'Azul - Naranja'] ,null, ['class' => '','id'=>'contrast']) !!}
        </div>

        <div class="fieldForm">
            {!! Form::label('font','Fuente') !!}
            {!! Form::select('font',
            		[	''=>'Normal',
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