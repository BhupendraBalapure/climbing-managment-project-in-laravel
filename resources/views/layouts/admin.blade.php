<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CMS @yield('title')</title>
    <link href="{{ url('css/styles.css') }}" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
     

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>


    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

</head>
<body class="sb-nav-fixed">
	

	@section('sidebar')

		@include('includes.topbar')

		@include('includes.topbar_menu')

		@include('includes.sidebar')
        
    @show

        
	<div id="layoutSidenav_content">

        @yield('content')

        @include('includes.footer')
        
    </div>
      
            
                
        
    </body>
    @stack('scripts')
    <!-- @livewireScripts -->
</html>

  </head>
  <body>
  
  