<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="RAIM">
    <meta name="author" content="GAIA - Universidad Nacional de Colombia Sede Manizales">

    <title>@yield('title', 'RAIM')</title>


    <!-- Pluguin formularios por pasos-->
    <link href="{{ asset('plugins/SmartWizard/styles/smart_wizard.css') }}" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('template/bower_components/bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('template/bower_components/metisMenu/dist/metisMenu.min.css') }}" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="{{ asset('template/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}" rel="stylesheet">

    {{--
    <!-- DataTables Responsive CSS -->
    <link href="{{ asset('template/bower_components/datatables-responsive/css/dataTables.responsive.css') }}" rel="stylesheet">
    --}}

    <!-- Custom CSS -->
    <link href="{{ asset('template/dist/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('template/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">


    {{--
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    --}}

</head>
<body>



<div id="wrapper">

    <div class="nav">
        @include('template.partials.nav2')
    </div>

    <div id="page-wrapper">
      
        @yield('content')
    </div>
    <!-- /#page-wrapper -->
</div>


<!-- /#wrapper -->
    <div style="display: none;" class="information">

        @include('template.partials.information')

    </div>



<!-- jQuery -->
<script src="{{ asset('template/bower_components/jquery/dist/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('template/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{ asset('template/bower_components/metisMenu/dist/metisMenu.min.js') }}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{ asset('template/dist/js/sb-admin-2.js') }}"></script>

<!-- DataTables JavaScript -->
<script src="{{ asset('template/bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('template/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('template/bower_components/datatables-responsive/js/dataTables.responsive.js') }}"></script>

<!-- Pluguin formularios por pasos-->
<script src="{{ asset('plugins/SmartWizard/js/jquery.smartWizard-2.0.min.js') }}"></script>
<script src="{{ asset('bower_components/twitter-bootstrap-wizard/jquery.bootstrap.wizard.js') }}"></script>
<script src="{{ asset('bower_components/jquery-validation/dist/jquery.validate.js') }}"></script>


<!-- Pluguin Comunicacion con el usuario por toastr bootstrap-->
<script src="{{ asset('plugins/toastr-master/build/toastr.min.js') }}"></script>

<!-- Scripts -->
{{--

<script src="{{ asset('js/jquery-2.2.1.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

--}}
<script src="{{ asset('js/modifyStyle.js') }}"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>

<script>
    $(document).ready(function() {
        jQuery.extend(jQuery.validator.messages, {

          required: "Este campo es obligatorio.",
          remote: "Por favor, rellena este campo.",
          email: "Por favor, escribe una dirección de correo válida",
          url: "Por favor, escribe una URL válida.",
          date: "Por favor, escribe una fecha válida.",
          dateISO: "Por favor, escribe una fecha (ISO) válida.",
          number: "Por favor, escribe un número entero válido.",
          digits: "Por favor, escribe sólo dígitos.",
          creditcard: "Por favor, escribe un número de tarjeta válido.",
          equalTo: "Por favor, escribe el mismo valor de nuevo.",
          accept: "Por favor, escribe un valor con una extensión aceptada.",
          maxlength: jQuery.validator.format("Por favor, no escribas más de {0} caracteres."),
          minlength: jQuery.validator.format("Por favor, no escribas menos de {0} caracteres."),
          rangelength: jQuery.validator.format("Por favor, escribe un valor entre {0} y {1} caracteres."),
          range: jQuery.validator.format("Por favor, escribe un valor entre {0} y {1}."),
          max: jQuery.validator.format("Por favor, escribe un valor menor o igual a {0}."),
          min: jQuery.validator.format("Por favor, escribe un valor mayor o igual a {0}.")

        });
    });
</script>

@yield('javascript')
</body>
</html>
