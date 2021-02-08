<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>Патриоты Сибири - Конкурс проектов интерактивных военно-исторических реконструкций</title>
  <!--meta-->
  <meta charset="UTF-8">
  <meta name="yandex-verification" content="dc70469ab3fdb89d" />
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="description" content="Патриоты Сибири - Конкурс проектов интерактивных военно-исторических реконструкций" />
  <META NAME="keywords" CONTENT="Патриоты Сибири - Конкурс проектов интерактивных военно-исторических реконструкций">
  <META NAME="AUTHOR" CONTENT="https://vk.com/glrlcocks">
  <meta name="revisit-after" content="5 days">
  <link rel="SHORTCUT ICON" href="assets/img/506-5061203_-png-9-1.svg" type="image/x-icon">
  <!--соц сети-->
  <meta property="og:title" content="Патриоты Сибири - Конкурс проектов интерактивных военно-исторических реконструкций">
  <meta property="og:description" content="призван стимулировать молодежь к яркому и всестороннему освещению патриотической тематики, связанной с традициями и современными задачами патриотического воспитания, через применение современных технических, цифровых средств в своих проектах. Особенностью конкурса 2020 года является его тематическая направленность, посвященная 75-летию Победы в Великой Отечественной войне.">
  <meta property="og:image" content="assets/img/social__back.jpg">
  <meta itemprop="image" content="assets/img/social__back.jpg" />
  <meta name="twitter:image:src" content="assets/img/social__back.jpg" />
  <meta property="og:url" content="">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/main2021.css">
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/materialize.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

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
  @include('layouts.modalcookie')
  @include('layouts.footer')
  @include('layouts.scripts')
</body>

</html>