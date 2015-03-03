<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Amarterra Villa Bali Nusa Dua</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="shortcut icon" href="{{ asset('asset/images/favicon.ico') }}">

<!-- Stylesheets & Javascripts -->
@include('home.asset')
<!-- <script src="{{ asset('asset/js/app/reservation.js') }}"></script> -->

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- Top header -->
@include('home.top-header')

<!-- Header -->
<header>
  <!-- Navigation -->
  @include('home.header')
</header>

<!-- Content -->
  @yield('content')
  
<!-- Footer -->
<footer>
  @include('home.footer')
</footer>

<!-- Go-top Button -->
<div id="go-top"><i class="fa fa-angle-up fa-2x"></i></div>

</body>
</html>