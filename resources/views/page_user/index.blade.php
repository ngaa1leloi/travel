<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Adventure - Free Bootstrap 4 Template by Colorlib</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
        <base href="{{ asset('') }}">
        <link rel="stylesheet" href="{{ asset('resource/css/open-iconic-bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('resource/css/animate.css') }}">
        
        <link rel="stylesheet" href="{{ asset('resource/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('resource/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('resource/css/magnific-popup.css') }}">

        <link rel="stylesheet" href="{{ asset('resource/css/aos.css') }}">

        <link rel="stylesheet" href="{{ asset('resource/css/ionicons.min.css') }}">

        <link rel="stylesheet" href="{{ asset('resource/css/bootstrap-datepicker.css') }}">
        <link rel="stylesheet" href="{{ asset('resource/css/jquery.timepicker.css') }}">

        
        <link rel="stylesheet" href="{{ asset('resource/css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('resource/css/icomoon.css') }}">
        <link rel="stylesheet" href="{{ asset('resource/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/simplemde.min.css') }}">
    </head>
    <body>
    
        @include('page_user.layout.menu')
    
        @yield('content')

        @include('page_user.layout.footer')
    
    
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ asset('resource/js/jquery.min.js') }}"></script>
  <script src="{{ asset('resource/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('resource/js/popper.min.js') }}"></script>
  <script src="{{ asset('resource/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('resource/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('resource/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('resource/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('resource/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('resource/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('resource/js/aos.js') }}"></script>
  <script src="{{ asset('resource/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('resource/js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ asset('js/simplemde.min.js') }}"></script>
  <script src="{{ asset('js/notify.js') }}"></script>
  <script src="{{ asset('js/notify.min.js') }}"></script>

  {{-- <script src="{{ asset('resource/js/jquery.timepicker.min.js') }}"></script> --}}
  <script src="{{ asset('resource/js/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('resource/js/google-map.js') }}"></script>
  <script src="{{ asset('resource/js/main.js') }}"></script>
  <script type="text/javascript" src="https://cdnjs.com/libraries/jquery-timepicker"></script>
   <script type="text/javascript">
        var simplemde_news = new SimpleMDE({ element: document.getElementById("content_news") });
    </script>

    <script type="text/javascript">
    //let a = document.getElementsByClass("nav-link");
    $('.navbar-nav li').click(function(){
     $('.navbar-nav li').removeClass('active');
     $(this).addClass('active');

 });
</script>
 @yield('script')   
  </body>
</html>
