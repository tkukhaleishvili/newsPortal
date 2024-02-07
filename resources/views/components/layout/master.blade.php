<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Meta Data -->
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title> Neeon | Home 01 - Main </title>
   <!-- Favicon -->
   <link rel="shortcut icon" type="image/x-icon" href="assets/media/favicon.png">
   <!-- Dependency Stylesheet -->
   <link rel="stylesheet" type="text/css" href="{{asset('assets/dependencies/bootstrap/css/bootstrap.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('assets/dependencies/fontawesome/css/all.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('assets/dependencies/animate/animate.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('assets/dependencies/swiper/css/swiper.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('assets/dependencies/magnific-popup/css/magnific-popup.css')}}">
   <!-- Site Stylesheet -->
   <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
</head>
<body>
   <!-- Start wrapper -->
   <div id="wrapper" class="wrapper">
      <!-- start perloader -->
      <div class="pre-loader" id="preloader">
         <div class="loader"></div>
      </div>
      <!-- end perloader -->
      <!-- Start main-content -->
      <div id="main_content" class="footer-fixed">
        <x-header/>
         <main>
            {{$slot}} 
         </main>
        <x-footer/>
      </div>
      <!-- End main-content -->

      <!-- Start Search  -->
      <x-search/>
      <!-- End Search -->
      <!-- theme-switch-box -->
      <div class="theme-switch-box-wrap">
         <div class="theme-switch-box">
            <span class="theme-switch-box__theme-status"><i class="fas fa-cog"></i></span>
            <label class="theme-switch-box__label" for="themeSwitchCheckbox">
               <input class="theme-switch-box__input" type="checkbox" name="themeSwitchCheckbox"
                  id="themeSwitchCheckbox">
               <span class="theme-switch-box__main"></span>
            </label>
            <span class="theme-switch-box__theme-status"><i class="fas fa-moon"></i></span>
         </div>
      </div>
      <!-- end theme-switch-box -->
      <!-- start back to top -->
      <a href="javascript:void(0)" id="back-to-top">
         <i class="fas fa-angle-double-up"></i>
      </a>
      <!-- End back to top -->
   </div>
   <!-- End wrapper -->
   <!-- Dependency Scripts -->
   <script src="{{asset('assets/dependencies/jquery/jquery.min.js')}}"></script>
   <script src="{{asset('assets/dependencies/popper.js/popper.min.js')}}"></script>
   <script src="{{asset('assets/dependencies/bootstrap/js/bootstrap.min.js')}}"></script>
   <script src="{{asset('assets/dependencies/appear/appear.min.js')}}"></script>
   <script src="{{asset('assets/dependencies/swiper/js/swiper.min.js')}}"></script>
   <script src="{{asset('assets/dependencies/masonry/masonry.min.js')}}"></script>
   <script src="{{asset('assets/dependencies/magnific-popup/js/magnific-popup.min.js')}}"></script>
   <script src="{{asset('assets/dependencies/theia-sticky-sidebar/resize-sensor.min.js')}}"></script>
   <script src="{{asset('assets/dependencies/theia-sticky-sidebar/theia-sticky-sidebar.min.js')}}"></script>
   <script src="{{asset('assets/dependencies/validator/validator.min.js')}}"></script>
   <script src="{{asset('assets/dependencies/tween-max/tween-max.js')}}"></script>
   <script src="{{asset('assets/dependencies/wow/js/wow.min.js')}}"></script>
   <!-- custom -->
   <script src="{{asset('assets/js/app.js')}}"></script>
</body>
<!-- Mirrored from www.radiustheme.com/demo/html/neeon/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2024 12:28:40 GMT -->
</html>