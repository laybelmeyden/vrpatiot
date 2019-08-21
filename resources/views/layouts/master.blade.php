<!DOCTYPE html>
<html>

<head>
  <title>ВСЕРОССИЙСКИЙ КОНКУРС - интерактивных военно-исторических реконструкций</title>
  <!--meta-->
  <meta charset="UTF-8">
  <meta name="description" content="ВСЕРОССИЙСКИЙ КОНКУРС - интерактивных военно-исторических реконструкций"/>
  <META NAME="keywords" CONTENT="ВСЕРОССИЙСКИЙ КОНКУРС - интерактивных военно-исторических реконструкций">
  <META NAME="AUTHOR" CONTENT="https://vk.com/glrlcocks">
  <meta name="revisit-after" content="5 days">
  <link rel="SHORTCUT ICON" href="assets/img/Group7.png" type="image/x-icon">
  <!--соц сети-->
  <meta property="og:type" content="article" />
  <meta property="og:title" content="ВСЕРОССИЙСКИЙ КОНКУРС - интерактивных военно-исторических реконструкций" />
  <meta property="og:description" content="ВСЕРОССИЙСКИЙ КОНКУРС - интерактивных военно-исторических реконструкций" />
  <meta property="og:image" href="" />
  <meta property="og:url" content="ccskm" />
  <meta property="og:site_name" content="AIR" />

  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/materialize.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
@include('layouts.nav')
        <!-- @if ($flash = session('message'))
  <div class="alert1">
   <div class="toast" style="    background-color: #fff;
    border: 1px solid #ccc;
    box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.2);
    position: absolute;
    left: 0px;
    top: 0px;
    transition: visibility 0s linear 0.3s, opacity 0.3s linear;
    visibility: visible;
    z-index: 2000000000;
    position: fixed;
    color: black;">{{ $flash }}</div>
   </div>
  @endif
  -->
@yield('content')
@include('layouts.footer')
@include('layouts.scripts')

</body>
</html>
