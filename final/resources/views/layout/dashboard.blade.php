<!--

=========================================================
* Argon Dashboard - v1.1.2
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2020 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Film App
  </title>
  <!-- Favicon -->
  <link href="{{asset('/template/assets/img/brand/favicon.png" rel="icon')}}" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{asset('/template/assets/js/plugins/nucleo/css/nucleo.css')}}" rel="stylesheet" />
  <link href="{{asset('/template/assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{asset('/template/assets/css/argon-dashboard.css?v=1.1.2')}}" rel="stylesheet" />
</head>

<body class=""> 
  @include('partial.sidebar')
  <div class="main-content">
    @if (request()->is('film') || request()->is('genre') || request()->is('cast'))
      @include('partial.nav')  
      @include('partial.header')
    @else 
      <div class="header bg-gradient-primary custom-border-radius mx-5 mt-3 mb-3 pb-3 pt-1 pt-md-3">
        {{-- @yield('judul') --}}
      </div>
    @endif


<!-- Konten halaman lainnya -->
    <div class= "content mx-5">
      @yield('content')
    </div>
    </div>
  </div>
  <!--   Core   -->
  <script src="{{asset('/template/assets/js/plugins/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('/template/assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <!--   Optional JS   -->
  <script src="{{asset('/template/assets/js/plugins/chart.js/dist/Chart.min.js')}}"></script>
  <script src="./assets/js/plugins/chart.js/dist/Chart.extension.js"></script>
  <!--   Argon JS   -->
  <script src="{{asset('/template/assets/js/argon-dashboard.min.js?v=1.1.2')}}"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
</body>

</html>