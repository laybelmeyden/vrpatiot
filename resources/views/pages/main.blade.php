@extends('layouts.master')

@section('content')
<section id="nav" class="container">
  <nav class="right_nav">
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="right hide-on-med-and-down li_items">
        <!-- <li>
          <a href="/programm">
            <div class="hover_a_nav">
            Итоги
          </div>
          </a>
        </li> -->
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
        <li><a href="#contact">
            <div class="btn_a_nav">
              Обратная связь
            </div>
          </a></li>
      </ul>
      <ul class="">
        <nav class="mobile-menu">
          <input type="checkbox" id="checkbox" class="mobile-menu__checkbox">
          <label for="checkbox" class="mobile-menu__btn">
            <div class="mobile-menu__icon"></div>
          </label>
          <div class="mobile-menu__container">
            <ul class="mobile-menu__list">
              <li class="mobile-menu__item"><a href="#info" class="mobile-menu__link">О конкурсе</a></li>
              <li class="mobile-menu__item"><a href="#nominations" class="mobile-menu__link">Номинации</a></li>
              <li class="mobile-menu__item"><a href="#organize" class="mobile-menu__link">Организатор</a></li>
              <li class="mobile-menu__item"><a href="#contact" class="mobile-menu__link">Обратная связь</a></li>
            </ul>
          </div>
        </nav>
      </ul>
    </div>
  </nav>
</section>
<section id="header">
  <div class="header_font">
    <img src="assets/img/Group_333.svg" alt="">
  </div>
  <div class="header_title">
    <div class="container">
      <h1>Всер<img src="assets/img/506-5061203_-png-9-1.svg" alt="">ссийский <br> конкурс</h1>
      <h3>интерактивных реконструкций событий <br> Великой Отечественной войны</h3>
      <a id="form_modal_open" class="waves-effect waves-light btn btn_header modal-trigger" onclick="modal_main_toggle();">Подать заявку</a>
    </div>
  </div>
</section>
@include('layouts.modalmain')
<section id="info">
  <div class="container">
    <div class="row info_containers">
      <p class="info_z" id="info_vol">Всероссийский конкурс интерактивных реконструкций событий Великой Отечественной войны</p><br>
      <p class="info_z_down">призван стимулировать молодежь к яркому и всестороннему освещению патриотической тематики, связанной с традициями и современными задачами патриотического воспитания, через применение современных технических, цифровых средств в своих проектах.
        Особенностью конкурса 2020 года является его тематическая направленность, посвященная 75-летию Победы в Великой Отечественной войне.</p>
      </p><br><br>
      <p class="info_z_down_1"><b>Основная цель Конкурса:</b> Привлечение внимания молодежи и сохранение исторической памяти о событиях Великой Отечественной войны с использованием инновационных технических средств и цифровых технологий.</p>
    </div>
  </div>
</section>
<section class="secans">
  <img src="assets/img/ans2.svg" class="imgans" alt="">
  <div class="container">
    <div class="row">
      <p class="pans"><span class="spanans">17 июня</span> состоится онлайн-конференция, посвященная старту конкурса (платформа Zoom)</p>
      <p class="pansz">В рамках онлайн-мероприятия:</p>
      <p class="pansf">- расскажем подробности о конкурсе<br>
        - обсудим вопросы, связанные с подготовкой заявки<br>
        - проведем мастер-класс по VR и AR-технологиям и успешной презентации проекта</p>
      <div class="btn_a">
        <a href="https://rusinnovations.timepad.ru/event/1315006/" target="_blank" class="waves-effect waves-light btn btn_ans modal-trigger">Регистрация на событие</a>
      </div>
    </div>
  </div>
</section>
<section id="stages">
  <div class="container">
    <div class="row">
      <p class="info_z stages_img_padding">Задачи Конкурса</p>
      <div class="grid_col_stages">
        <div>
          <img src="assets/img/stg3.svg" alt="">
          <p class="text_stages">
            Популяризация программ патриотического воспитания с использованием инновационных технических средств обучения
          </p>
        </div>
        <div>
          <img src="assets/img/stg2.svg" alt="">
          <p class="text_stages">
            Выявление и поощрение авторов лучших инновационных проектов патриотической и исторической направленности
          </p>
        </div>
        <div>
          <img src="assets/img/stg1.svg" alt="">
          <p class="text_stages">
            Привлечение внимания общественности и экспертного сообщества к проблемам патриотического воспитания и исторического образования
          </p>
        </div>
      </div>
      <div class="col xl12" style="width: 100%;">
        <div class="flex_align">
          <a href="https://vk.com/doc158927846_548435323?hash=da6fd6c0b65e71f00d&dl=9e7e39bf2637450f4b" target="_blank" class=" btn btn_download"><img src="assets/img/download.svg" class="img_dowmload">СКАЧАТЬ ПОЛОЖЕНИЕ О КОНКУРСЕ</a>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="nominations">
  <div class="nom_down_r">
    <div class="container">
      <div class="row">
        <p class="nominations_title">НОМИНАЦИИ КОНКУРСА</p>
        <div class="col  xl4">
          <div class="card card_nominations">
            <div class="card-image card-image_nominations">
              <img src="assets/img/nom1.svg" class="img_nominations_card">
            </div>
            <div class="card-content">
              <p class="nominations_card_text_title">Реконструкция с применением VR- и AR-технологий. </p>
              <p class="nominations_card_text_body">Проектная работа по данному направлению представляется в формате аудиовизуального контента с использованием VR и (или) AR технологий. По форматам и продолжительности ограничений нет.</p>
            </div>
          </div>
        </div>
        <div class="col  xl4">
          <div class="card card_nominations">
            <div class="card-image card-image_nominations">
              <img src="assets/img/nom2.svg" class="img_nominations_card">
            </div>
            <div class="card-content">
              <p class="nominations_card_text_title">3D-моделирование и анимация.</p>
              <p class="nominations_card_text_body">Проектная работа по данному направлению представляется в формате короткометражного ролика, социальной рекламы патриотической и исторической направленности, а также в виде 3D модели важного события Великой Отечественной войны. По форматам и продолжительности ограничений нет.</p>
            </div>
          </div>
        </div>
        <div class="col  xl4">
          <div class="card card_nominations">
            <div class="card-image card-image_nominations">
              <img src="assets/img/nom3.svg" class="img_nominations_card">
            </div>
            <div class="card-content">
              <p class="nominations_card_text_title">Реконструкция в формате компьютерной игры.</p>
              <p class="nominations_card_text_body">В рамках данного направления участники представляют разработанные программы, компьютерные игры и их прототипы развлекательной или обучающей направленности, основанные на патриотическом контексте. Программы и игры могут быть выполнены на любом языке программирования в любой степени готовности.</p>
            </div>
          </div>
        </div>
        <div class="col xl12 medal_block">
          <div class="col m12 s12 xl3 center medal_margin">
          </div>
          <div class="col m12 s12 xl9">
            <p class="req">К заявке обязательно прикладывается инструкция по запуску и воспроизведению созданного проекта.</p>
          </div>
        </div>
        <div class="col xl12 medal_block">
          <div class="col m12 s12 xl3 center medal_margin">
            <img src="assets/img/medal.svg" alt="">
          </div>
          <div class="col m12 s12 xl9">
            <p class="medal_text">В каждом направлении по каждой возрастной группе по итогам Конкурса определяются 3-и победителя (1-е, 2-е и 3-е место), которые награждаются дипломами, кубками и ценными призами.
              <br><br>
              Победители, занявшие первое место в каждом направлении в возрастной группе
              11-17 лет, награждаются бесплатными путевками на Всероссийскую профильную смену по цифровым технологиям и интерактивной робототехнике</p>
          </div>
        </div>
        <div class="w-100" style="text-align:center;">
          <a class="waves-effect waves-light btn btn_medal modal-trigger" onclick="modal_main_toggle();">Подать заявку</a>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="contact">
  <div class="container grid_contact_main">
    <div class="img_fluid_contact">
      <!-- <img src="assets/img/bigstar.svg" alt="" class="img_contact"> -->
    </div>
    <div class="main_contact row">
      <p class="contact_title">Если у вас возникли вопросы, связанные с конкурсом, напишите нам через данную форму обратной связи</p>
      <form action="/contact" method="POST" class="fs-form fs-form-full" autocomplete="off" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="email" class="input_contact" name="contact_email" placeholder="E-mail" required>
        <input type="text" class="input_contact" name="phone" placeholder="Телефон" required>
        <textarea class="text_area_cotnatc" name="text_contact" placeholder="Ваш вопрос" required></textarea>
        <div class="captchajs">
          {!! NoCaptcha::renderJs() !!}
          {!! NoCaptcha::display() !!}
        </div>
        <div class="w-100 a-right btn_pd">
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
      <div class="air_promo">
        <img src="assets/img/logo_air.svg" alt="">
        <p class="air_text_title">
          С 2012 года командой «Агентства инновационного развития» реализовано 5 международных,
          12 всероссийских, 38 окружных и свыше 100 региональных мероприятий для молодежи, начинающих изобретателей, предпринимателей и программистов. Ежегодно в проектах Агентства принимают участие свыше 3000 человек.
        </p>
      </div>
      <div class="air_promo_href">
        <img src="assets/img/global.svg" alt="">
        <a href="https://rusinnovations.com" class="air_href">rusinnovations.com</a>
      </div>
      <div class="air_press_info">
        <p class="air_info_body m0">АНО "АИР" ведет активную работу:</p>
        <ul class="air_marker">
          <li><span class="air_li">по популяризации инновационной деятельности среди молодежи;</span></li>
          <li><span class="air_li">развитию инновационной инфраструктуры;</span></li>
          <li><span class="air_li">формированию сообщества молодых изобретателей.</span></li>
        </ul>
        <p class="air_text_title">Важнейшее направление работы Агентства - разработка комплексных технических решений для учреждений общего и дополнительного образования детей и подростков, в том числе, в области ИТ и робототехники.
        </p>

        <div class="m81"></div>
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
          <a href="https://rusinnovations.com">
            <img src="assets/img/logo_air.svg" alt="" class="logo_part">
          </a>
        </div>
        <div class="col xl3 flex_cetnter ">
          <a href="http://www.smena.org">
            <img src="assets/img/smena.png" alt="" class="logo_part">
          </a>
        </div>
        <div class="col xl3 flex_cetnter ">
          <a href="https://fadm.gov.ru">
            <img src="assets/img/ros_mol.png" alt="" class="logo_part">
          </a>
        </div>
        <div class="col xl3 flex_cetnter ">
          <a href="http://rospatriotcentr.ru/">
            <img src="assets/img/ros_pat.png" alt="" class="logo_part">
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="footer">
  <div class="container">
    <div class="row">
      <div class="col xl12">
        <div class="col xl8 s12">
          <p class="footer_contact">
            8(499) 753 01 25 <br>
            8 (999) 852 65 25 - куратор Послова Алина
          </p>
        </div>
        <div class="col xl4 s12 text-right">
          <a class="waves-effect waves-light btn btn_footer modal-trigger" onclick="modal_main_toggle();">Подать заявку</a>
        </div>
        <div class="col">
          <p class="footer_copy">Сайт разработан за счет средств Гранта (субсидии), предоставленных ФГБУ «Роспатриотцентр» на проведение мероприятий по содействию патриотическому воспитанию граждан Российской Федерации.</p>
        </div>
      </div>
      <!-- Yandex.Metrika informer -->
      <a href="https://metrika.yandex.ru/stat/?id=55276813&amp;from=informer" target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/55276813/1_0_6B5E7CFF_4B3E5CFF_1_pageviews" style="width:80px; height:15px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры)" class="ym-advanced-informer" data-cid="55276813" data-lang="ru" /></a>
      <!-- /Yandex.Metrika informer -->

      <!-- Yandex.Metrika counter -->
      <script type="text/javascript">
        (function(m, e, t, r, i, k, a) {
          m[i] = m[i] || function() {
            (m[i].a = m[i].a || []).push(arguments)
          };
          m[i].l = 1 * new Date();
          k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(55276813, "init", {
          clickmap: true,
          trackLinks: true,
          accurateTrackBounce: true,
          webvisor: true
        });
      </script>
      <noscript>
        <div><img src="https://mc.yandex.ru/watch/55276813" style="position:absolute; left:-9999px;" alt="" /></div>
      </noscript>
      <!-- /Yandex.Metrika counter -->
    </div>
  </div>
</section>
@endsection