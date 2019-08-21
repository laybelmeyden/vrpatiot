@extends('layouts.master')

@section('content')
<section id="nav" class="container">
    <nav class="right_nav">
    <div class="nav-wrapper">
    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down li_items">
        <li>
          <a href="#info">
            <div class="hover_a_nav">
            О конкурсе
          </div>
          </a>
        </li>
        <li><a href="#nominations">
          <div class="hover_a_nav">
            Номинации
          </div>  
        </a></li>
        <li><a href="#organize">
          <div class="hover_a_nav">
            Организатор
          </div>  
        </a></li>
        <li><a href="">
          <div class="modal_nav_item">
            <img src="assets/img/Rectangle2.png" alt="" class="img_feedback" />
              <span class="modal_text_item">
            Обратная связь
            </span>
          </div>
        </a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="">О конкурсе</a></li>
        <li><a href="">Номинации</a></li>
        <li><a href="">Организатор</a></li>
        <li><a href="">Обратная связь</a></li>
      </ul>
    </div>
  </nav>
</section>
<section id="header">
<div class="header_main_text">
  <p class="header_main_text_p">Всероссийский<br> конкурс</p>
  <p class="header_pod_text">интерактивных военно-исторических <br>реконструкций</p>
  <div class="w-100">
  <a class="waves-effect waves-light btn btn_header">Участвовать</a>
  </div>
</div> 
</section>
<section id="info">
  <img class="img_left_frame" src="assets/img/Frame.png" alt="">
  <img class="img_right_frame" src="assets/img/Frame1.png" alt="">
<div class="container">
  <div class="row">
      <p class="info_z" id="info_vol">«Всероссийский конкурс интерактивных военно-исторических реконструкций»</p>
      <p class="info_z_down">направлен на популяризацию и совершенствование инструментария программ гражданско-патриотического и военно-патриотического воспитания с использованием инновационных технических средств 
      <br><br><br>обучения (ИТСО). Конкурс призван стимулировать детей и молодежь к яркому и всестороннему освещению патриотической тематики, связанной с традициями и современными задачами патриотического воспитания.</p>
      </p>
  </div>
</div>
</section>
<section id="stages">
  <div class="container">
    <div class="row">
      <div class="stages_background">
        <p class="info_z_1">Основная цель Конкурса:</p>
        <p class="info_z_down">Привлечение внимания к важнейшим военно-историческим событиям нашей страны через применение (использование) инновационных технических средств и интерактивных технологий.</p>
      </div>
      <p class="info_z stages_img_padding">Задачи Конкурса</p>
      <div class="grid_col_stages">
      <div>
        <img src="assets/img/Group6.png" alt="">
        <p class="text_stages">
        популяризация программ патриотического воспитания с использованием инновационных технических средств обучения
        </p>
      </div>
      <div>
        <img src="assets/img/Group7.png" alt="">
        <p class="text_stages">
        выявление и поощрение авторов лучших инновационных проектов патриотической и исторической направленности
        </p>
      </div>
      <div>
        <img src="assets/img/Group8.png" alt="">
        <p class="text_stages">
        привлечение внимания общественности и экспертного сообщества к проблемам патриотического воспитания и исторического образования
        </p>
      </div>
      </div>
      <div class="col xl12" style="width: 100%;">
        <div class="flex_align">
        <a class="waves-effect waves-light btn btn_download"><img src="assets/img/download.png" class="img_dowmload">СКАЧАТЬ ПОЛОЖЕНИЕ О КОНКУРСЕ</a>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="nominations">
<div class="container">
  <div class="row">
  <p class="nominations_title">НОМИНАЦИИ КОНКУРСА</p>
    <div class="col  xl4">
    <div class="card card_nominations">
        <div class="card-image card-image_nominations">
          <img src="assets/img/565.png" class="img_nominations_card">
        </div>
        <div class="card-content">
        <p class="nominations_card_text_title">Технологии виртуальной (VR) и дополненной реальности (AR) в создании военно-исторической реконструкции</p>
        <p class="nominations_card_text_body">Проектная работа по данному направлению представляется в формате аудиовизуального контента с использованием VR и (или) AR технологий. По форматам и продолжительности ограничений нет.</p>
        </div>
      </div>
    </div>
    <div class="col  xl4">
    <div class="card card_nominations">
        <div class="card-image card-image_nominations">
          <img src="assets/img/2345678.png" class="img_nominations_card">
        </div>
        <div class="card-content">
        <p class="nominations_card_text_title">3D моделирование, современная видеообработка и 2D анимации в создании военно-исторической реконструкции.</p>
        <p class="nominations_card_text_body">Проектная работа по данному направлению представляется в формате короткометражного ролика, социальной рекламы патриотической и исторической направленности, а также в виде 3D модели важнейшего исторического или военного события. По форматам и продолжительности ограничений нет.</p>
        </div>
      </div>
    </div>
    <div class="col  xl4">
    <div class="card card_nominations">
        <div class="card-image card-image_nominations" >
          <img src="assets/img/2уке7.png" class="img_nominations_card">
        </div>
        <div class="card-content">
        <p class="nominations_card_text_title">Компьютерные игры и обучающие программы.</p>
        <p class="nominations_card_text_body">В рамках данного направления участники представляют разработанные программы, компьютерные игры и их прототипы развлекательной или обучающей направленности, основанные на патриотическом контексте. Программы и игры могут быть выполнены на любом языке программирования в любой степени готовности.</p>
        </div>
      </div>
    </div>
    <div class="col xl12 medal_block">
      <div class="col m12 s12 xl3 center medal_margin">
        <img src="assets/img/medal.png" alt="">
      </div>
      <div class="col m12 s12 xl9">
        <p class="medal_text">В каждом направлении по каждой возрастной группе по итогам Конкурса определяются <b>3-и победителя</b> (1-е, 2-е и 3-е место), которые награждаются <b>дипломами, кубками и ценными призами</b>. 
          <br><br>
        Победители, занявшие первое место в каждом направлении в возрастной группе 11-17 лет, награждаются бесплатными <b>путевками на Всероссийскую профильную смену по цифровым технологиям и интерактивной робототехнике</b></p>
      </div>
    </div>
    <div class="w-100" style="text-align:center;">
  <a class="waves-effect waves-light btn btn_medal">Участвовать</a>
  </div>
  </div>
</div>
</section>
<section id="contact">
  <div class="grid_contact_main">
    <div>
    <img src="assets/img/Group112.png" alt="" class="img_contact">
    </div>
    <div class="index_contact">
    <!-- @if ($flash = session('message_contact'))
    <div class="alert1">
    <div class="toast">
    {{ $flash }}
    </div>
    </div>
    @endif -->
    <p class="contact_title">Если у вас возникли вопросы, связанные с конкурсом, напишите нам через данную форму обратной связи</p>
    <form action="/contact" method="POST" class="fs-form fs-form-full" autocomplete="off" enctype="multipart/form-data">
				{{ csrf_field() }}
        <input type="email" class="input_contact" name="contact_email" placeholder="E-mail" required>
        <input type="text" class="input_contact" name="phone" placeholder="Телефон" required>
        <textarea class="text_area_cotnatc" name="text" placeholder="Ваш вопрос" required></textarea>
        <div class="w-100 a-right">
        <button type="submit" class="btn_contact">Отправить</button>
        </div>
      </form>
    </div>
  </div>
</section>
<section id="organize">
  <div class="container">
    <div class="row">
      <p class="organizme_title">ОРГАНИЗАТОР</p>
      <div class="col xl12">
      <div class="col xl3">
        <img src="assets/img/logo_air.png" alt="">
      </div>
      <div class="col xl9">
        <p class="air_text_title">
        С 2012 года командой «Агентства инновационного развития» реализовано 5 международных, 12 всероссийских, 38 окружных и свыше 100 региональных мероприятий для молодежи, 
        <br><br>
        начинающих изобретателей, предпринимателей и программистов. Ежегодно в проектах Агентства принимают участие свыше 3000 человек.
        </p>
      </div>
      </div>
      <div class="col xl12" style="margin-top:15px;">
      <div class="col xl3">
        <div class="col">
          <img src="assets/img/global.png" alt="">
        </div>
        <div class="col">
          <a href="https://rusinnovations.com" class="air_href">rusinnovations.com</a>
        </div>
      </div>
      <div class="col xl9">
        <p class="air_info_body m0">АНО "АИР" ведет активную работу:</p>
        <ul class="air_marker">
          <li><span class="air_li">по популяризации инновационной деятельности среди молодежи;</span></li>
          <li><span class="air_li">развитию инновационной инфраструктуры;</span></li>
          <li><span class="air_li">формированию сообщества молодых изобретателей.</span></li>
        </ul>
        <p class="air_text_title">Важнейшее направление работы Агентства - разработка комплексных технических решений для учреждений общего и дополнительного образования детей и подростков, в том числе, в области ИТ и робототехники.</p>
      <div class="m81"></div>
      </div>
      </div>
    </div>
  </div>
</section>
<section id="partners">
<div class="container">
    <div class="row">
      <p class="partners_title">Партнёры конкурса</p>
      <div class="col xl12 flex_cetnter">
        <div class="col xl3 flex_cetnter ">
          <img src="assets/img/logo_air.png" alt="" style="width: 100%; max-width: 234px;">
        </div>
        <div class="col xl3 flex_cetnter ">
          <img src="assets/img/smena.png" alt="" style="width: 100%; max-width: 234px;">
        </div>
        <div class="col xl3 flex_cetnter ">
          <img src="assets/img/ros_mol.png" alt="" style="width: 100%; max-width: 234px;">
        </div>
        <div class="col xl3 flex_cetnter ">
          <img src="assets/img/ros_pat.png" alt="" style="width: 100%; max-width: 146px;">
        </div>
      </div>
    </div>
</div>
</section>
<section id="footer">
  <div class="container">
    <div class="row">
      <div class="col xl12">
        <div class="col xl8">
          <p class="footer_contact">
          8(499)753 01 25 8 (999) <br>
          852 65 25 - куратор Послова Алина
          </p>
        </div>
        <div class="col xl4 text-right">
        <a class="waves-effect waves-light btn btn_footer">Участвовать</a>
        </div>
        <div class="col">
        <p class="footer_copy">Сайт разработан за счет средств Гранта (субсидии), предоставленных ФГБУ «Роспатриотцентр» на проведение мероприятий по содействию патриотическому воспитанию граждан Российской Федерации.</p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
