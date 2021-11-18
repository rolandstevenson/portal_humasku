
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Atlantis Lite - Bootstrap 4 Admin Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{ asset('back/img/icon.ico')}}" type="image/x-icon"/>

	{{-- Font Awesome and Icons --}}
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
	<!-- Fonts and icons -->
	<script src="{{ asset('back/js/plugin/webfont/webfont.min.js')}}"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['{{ asset('back/css/fonts.min.css')}}']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{ asset('back/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('back/css/atlantis.min.css')}}">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="{{ asset('back/css/demo.css')}}">

	<body>
		<div class="wrapper">
			{{-- Header --}}
			@include('includes.header')
			<!-- Sidebar -->
			@include('includes.sidebar')
			<!-- End Sidebar -->

			<div class="main-panel">
				<div class="content">
					{{-- Content Dashboard --}}

					@yield('content')
					
				</div>
				{{-- Footer --}}
				@include('includes.footer')
			</div>
			
			
		</div>
		<!--   Core JS Files   -->
		@include('includes.js')
		
		{{-- Sweet Alert --}}
		@include('sweetalert::alert')
		

	</body>
</head>
	
</html>