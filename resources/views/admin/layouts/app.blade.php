<!DOCTYPE html>
<html lang="en" @yield('html-attribute')>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
  <!--plugins-->
  <link href="{{ asset('asserts/admin/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/>
  <link href="{{ asset('asserts/admin/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
  <link href="{{ asset('asserts/admin/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
  <link href="{{ asset('asserts/admin/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="{{ asset('asserts/admin/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('asserts/admin/css/bootstrap-extended.css') }}" rel="stylesheet" />
  <link href="{{ asset('asserts/admin/css/style.css') }}" rel="stylesheet" />
  <link href="{{ asset('asserts/admin/css/icons.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  

  <!-- loader-->
	<link href="{{ asset('asserts/admin/css/pace.min.css') }}" rel="stylesheet" />

  <!--Theme Styles-->
  <link href="{{ asset('asserts/admin/css/dark-theme.css') }}" rel="stylesheet" />
  <link href="{{ asset('asserts/admin/css/light-theme.css') }}" rel="stylesheet" />
  <link href="{{ asset('asserts/admin/css/semi-dark.css') }}" rel="stylesheet" />
  <link href="{{ asset('asserts/admin/css/header-colors.css') }}" rel="stylesheet" />

    <title>Snacked - Bootstrap 5 Admin Template</title>
    @livewireStyles
</head>

<body>
    <div  class="wrapper">
        @include('admin.includes/sidebar')
        @livewire('admin.components.topbar')
       @yield('content')
       <!-- This is where the content from the Livewire component will be injected -->
       <main class="page-content">
        {{$slot}}
       </main>
       
    </div>
    @stack('scripts')
    @livewireScripts
</body>
<footer class="footer card mb-0 rounded-0 justify-content-center align-items-center">
  <!-- Bootstrap bundle JS -->
  <script src="{{asset('assert/admin/js/bootstrap.bundle.min.js')}}"></script>
              
  <script src="{{asset('asserts/aadmin/js/jquery.min.js')}}"></script>
  <script src="{{asset('asserts/aadmin/plugins/simplebar/js/simplebar.min.js')}}"></script>
  <script src="{{asset('asserts/aadmin/plugins/metismenu/js/metisMenu.min.js')}}"></script>
  <script src="{{asset('asserts/aadmin/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
  <script src="{{asset('asserts/aadmin/js/pace.min.js')}}"></script>
  <script src="{{asset('asserts/aadmin/plugins/chartjs/js/Chart.min.js')}}"></script>
  <script src="{{asset('asserts/aadmin/plugins/chartjs/js/Chart.extension.js')}}"></script>
  <script src="{{asset('asserts/aadmin/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
   <!-- Vector map JavaScript -->
   <script src="{{asset('asserts/admin/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
   <script src="{{asset('asserts/admin/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
  <!--app-->
  <script src="{{asset('asserts/admin/js/app.js')}}"></script>
  <script src="{{asset('asserts/admin/js/index.js')}}"></script>
  <!-- Bootstrap 5 JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    new PerfectScrollbar(".review-list")
    new PerfectScrollbar(".chat-talk")
 </script>
</footer>
</html>