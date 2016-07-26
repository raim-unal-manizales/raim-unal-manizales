<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<title>@yield('title', 'Default') | RAIM</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet"  href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" 	href="{{ asset('plugins/chosen/chosen.css') }}">
	<link rel="stylesheet" 	href="{{ asset('plugins/trumbowyg/ui/trumbowyg.css') }}">
	<link rel="stylesheet" 	href="{{ asset('plugins/table/css/jquery.dataTables.css') }}">
</head>
<body>

	@include('template.partials.nav')

	<section class="st-section">
		@yield('content')
	</section>

	
	<script src="{{ asset('plugins/jquery/js/jquery-2.1.4.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src=" {{ asset('plugins/chosen/chosen.jquery.js') }}"></script>
	<script src=" {{ asset('plugins/trumbowyg/trumbowyg.js') }}"></script>
	<script src=" {{ asset('plugins/table/js/jquery.dataTables.js') }}"></script>

	@yield('js')

</body>
</html>