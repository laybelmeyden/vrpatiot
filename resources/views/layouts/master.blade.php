<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>ВСЕРОССИЙСКИЙ КОНКУРС - интерактивных военно-исторических реконструкций</title>
  <!--meta-->
  <meta charset="UTF-8">
  <meta name="yandex-verification" content="dc70469ab3fdb89d" />
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="description" content="ВСЕРОССИЙСКИЙ КОНКУРС - интерактивных военно-исторических реконструкций" />
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

<body class="body">
  @if(session('message'))
  <div id="modalflat" class="modal modal-fixed-footer modal_alert visible" onclick="modal_main_toggle_close();">
    <div class="modal-content">
      <h4 class="alert_title">{{ session('message') }}</h4>
      <p class="alert_down">{{ session('message_1') }}</p>
    </div>
    <div class="flert">
      <a class="modal-close waves-effect waves-light btn-flat btn_ok" id="btn_ok">OK</a>
    </div>
  </div>
  @endif
  @yield('content')
  @include('layouts.footer')
  @include('layouts.scripts')
</body>

</html>