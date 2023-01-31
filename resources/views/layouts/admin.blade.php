<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Ecommerce Appplication">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} Dashboard</title>

   {{-- index --}}
   
   

   <title>SB Admin 2 - Dashboard</title>

   <!-- Custom fonts for this template-->
   <link href="{{ asset('backend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet')}}" type="text/css">
   <link
       href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
       rel="stylesheet">
  @yield('style')
   <!-- Custom styles for this template-->
   <link href="{{ asset('backend/css/sb-admin-2.min.css')}}" rel="stylesheet">
   {{-- index --}}



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('frontend/vendor/bootstrap/css/bootstrap-grid.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/vendor/bootstrap-select/css/bootsrap-select.min.css')}}" rel="stylesheet">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="{{ asset('frontend/vendor/glightbox/css/glightbox.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/vendor/nouislider/nouislider.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/vendor/choices.js/public/assets/styles/choices.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/vendor/swiper/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.default.css" id="theme-stylesheet')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css')}}">
    <link rel="shortcut icon" href="{{ asset('frontend/img/favicon.png')}}">
</head>
<body id="page-top">

  <div id="app">
    <div id="wrapper">
      @include('partial.backend.sidebar')
      
          <!-- Content Wrapper -->
          <div id="content-wrapper" class="d-flex flex-column">
  
            <!-- Main Content -->
            <div id="content">
                @include('partial.backend.navbar')
                                <!-- Begin Page Content -->
                                <div class="container-fluid">
                                    @yield('content')
                                </div>
            </div> 
            @include('partial.backend.footer')
          </div>
    </div>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
          <i class="fas fa-angle-up"></i>
      </a>
  
      @include('partial.backend.modal')
  
  </div>
  

     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" ></script>

     
      <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('backend/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('backend/js/sb-admin-2.min.js')}}"></script>

    @yield('script')
  

</body>
</html>
