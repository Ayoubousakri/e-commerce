<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
     
    <meta name="description" content="Ecommerce Application">
    <meta name="author" content="Bousakri">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{asset('frontend/vendor/bootstrap/css/bootstrap-grid.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/vendor/bootstrap-select/css/bootsrap-select.min.css')}}" rel="stylesheet">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    {{-- login --}}
   
    
    <title>{{ config('app.name', 'Laravel') }} Dashboard</title>
    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('backend/css/sb-admin-2.min.css')}}" rel="stylesheet">
    @yield('style')
    <link rel="stylesheet" href="{{ asset('frontend/vendor/glightbox/css/glightbox.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/vendor/nouislider/nouislider.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/vendor/choices.js/public/assets/styles/choices.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/vendor/swiper/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.default.css" id="theme-stylesheet')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css')}}">
    <link rel="shortcut icon" href="{{ asset('frontend/img/favicon.png')}}">
</head>

<body class="bg-gradient-primary">

    <div class="container">
            @yield('content')
        </div>

     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" ></script>
        
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('backend/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('backend/js/sb-admin-2.min.js')}}"></script>
    @yield('script')    



     {{-- <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
     <script src="{{ asset('frontend/vendor/glightbox/js/glightbox.min.js')}}"></script>
     <script src="{{ asset('frontend/vendor/nouislider/nouislider.min.js')}}"></script>
     <script src="{{ asset('frontend/vendor/swiper/swiper-bundle.min.js')}}"></script>
     <script src="{{ asset('frontend/vendor/choices.js/public/assets/scripts/choices.min.js')}}"></script>
     <script src="{{ asset('frontend/js/front.js')}}"></script>
     <script>
       // ------------------------------------------------------- //
       //   Inject SVG Sprite - 
       //   see more here 
       //   https://css-tricks.com/ajaxing-svg-sprite/
       // ------------------------------------------------------ //
       function injectSvgSprite(path) {
       
           var ajax = new XMLHttpRequest();
           ajax.open("GET", path, true);
           ajax.send();
           ajax.onload = function(e) {
           var div = document.createElement("div");
           div.className = 'd-none';
           div.innerHTML = ajax.responseText;
           document.body.insertBefore(div, document.body.childNodes[0]);
           }
       }
       // this is set to BootstrapTemple website as you cannot 
       // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
       // while using file:// protocol
       // pls don't forget to change to your domain :)
       injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
       
     </script> --}}
     

</body>
</html>
