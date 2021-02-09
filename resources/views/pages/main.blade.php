@extends('layouts.master')

@section('content')

<section id="header__main">
  <!-- <img src="assets/img/back__main.png" alt=""> -->
  <div class="main__back">
    <div class="container">
      <h1>Патриоты <br> Сибири</h1>
      <h3>Конкурс проектов интерактивных <br> военно-исторических <br> реконструкций</h3>
      <div class="btn__main">
        <a id="form_modal_open" class="waves-effect waves-light btn btn_header modal-trigger" onclick="modal_main_toggle();">УЧАСТВОВАТЬ</a>
      </div>
    </div>
  </div>
</section>
<section id="about__main">
  <div class="about__back__main">
    <img src="assets/img/about__main.png" alt="assets/img/about__main.png">
  </div>
  <div class="container">
    <p>
      <span>Конкурс проектов интерактивных военно-исторических реконструкций "Патриоты Сибири!"</span>
      проводится в рамках проекта «Фестиваль интерактивных военно-исторических реконструкций "Патриоты Сибири!"».
      <br><br>
      Особенностью конкурса является его тематическая направленность, посвященная военно-историческим событиям Сибири. Конкурс призван стимулировать молодежь к яркому и всестороннему освещению патриотической тематики, связанной с традициями и современными задачами патриотического воспитания.
      <br><br>
      <span>Основные цели проекта:</span> Привлечение внимания детей и молодежи к знаковым военно-историческим событиям, через использование современных технических средств и интерактивных технологий, а также сохранение исторической памяти и наследия благодаря использованию современных технологий.
    </p>
  </div>
</section>

<section id="stages">
  <div class="container">
    <p class="stages__main">Задачи Конкурса</p>
    <div class="stages__count_grid">
      <div>
        <p>1</p>
        <p>привлечение внимания детей и молодежи, общественности к новым методам и подходам в изучении (сохранении) военно-исторического наследия</p>
      </div>
      <div>
        <p>2</p>
        <p>вовлечение детей и молодежи в создание проектов военно-исторических реконструкций с использованием интерактивных технологий, сохранение исторической памяти с использованием современных технических средств и интерактивных технологий</p>
      </div>
      <div>
        <p>3</p>
        <p>выявление и поощрение авторов лучших инновационных проектов патриотической и исторической направленности</p>
      </div>
    </div>
  </div>
</section>

<section id="nominations">
  <div class="container">
    <p class="nominations__main">НОМИНАЦИИ</p>
    <div class="nomination__items">
      <div>
        <img src="assets/img/items__main_1.png" alt="">
      </div>
      <div class="nominations__p">
        <p>Реконструкция с применением VR- и AR-технологий</p>
        <br>
        <p>аудиовизуальный контент с использованием VR и (или) AR технологий интерактивной реконструкции исторических событий. По форматам и продолжительности ограничений нет.</p>
      </div>
    </div>
    <div class="nomination__items">
      <div>
        <img src="assets/img/items__main_2.png" alt="">
      </div>
      <div class="nominations__p">
        <p>3D-моделирование, анимация и видеомонтаж</p>
        <br>
        <p>анимационные фильмы, 3D-модели, видеоролики на заданную тематику, современные возможности видео и 2D-анимации, мультипликационные фильмы и ролики. По форматам и продолжительности ограничений нет.</p>
      </div>
    </div>
    <div class="nomination__items">
      <div>
        <img src="assets/img/items__main_3.png" alt="">
      </div>
      <div class="nominations__p">
        <p>Реконструкция в формате компьютерной игры</p>
        <br>
        <p>разработанные программы, компьютерные игры и их прототипы развлекательной или обучающей направленности, основанные на патриотическом контексте. Программы и игры могут быть выполнены на любом языке программирования.</p>
      </div>
    </div>
    <div class="btn__main">
      <a id="form_modal_open" class="waves-effect waves-light btn btn_header modal-trigger" onclick="modal_main_toggle();">ПОДАТЬ ЗАЯВКУ</a>
    </div>
  </div>
</section>
<section id="uchat">
  <img src="assets/img/uchat__back.png" alt="">
  <div class="container">
    <div class="uchat__blade">
      <p>Участники</p>
      <ul>
        <!-- <li><span>Жители Сибирского Федерального округа</span></li> -->
        <li><span>Младшая возрастная группа – 11-17 лет (включительно)</span></li>
        <li><span>Старшая возрастная группа – 18-30 лет (включительно)</span></li>
      </ul>
    </div>
  </div>
</section>
<section id="rules">
  <div class="container">
    <p class="rules__title">К заявке обязательно прикладывается инструкция по запуску и воспроизведению созданного проекта</p>
    <p class="rules__body">В каждом направлении по каждой возрастной группе по итогам Конкурса <span>определяются 3-и победителя</span> (1-е, 2-е и 3-е место), которые награждаются дипломами, кубками и ценными призами</p>
  </div>
</section>
@include('layouts.modalmain')
<!-- <section id="news">
  <div class="container">
    <p class="news__title">НОВОСТИ И МЕРОПРИЯТИЯ</p>
  </div>
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">Slide 1</div>
      <div class="swiper-slide">Slide 2</div>
      <div class="swiper-slide">Slide 3</div>
      <div class="swiper-slide">Slide 4</div>
      <div class="swiper-slide">Slide 5</div>
      <div class="swiper-slide">Slide 6</div>
      <div class="swiper-slide">Slide 7</div>
      <div class="swiper-slide">Slide 8</div>
      <div class="swiper-slide">Slide 9</div>
      <div class="swiper-slide">Slide 10</div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</section> -->
<section id="org">
  <div class="container">
    <div class="org__container">
      <div class="org__lows">
        <p class="org__title">ОРГАНИЗАТОР</p>
        <img src="assets/img/asi__logo.svg" alt="">
        <p class="org__body">Автономная некоммерческая организация «Агентство стратегических инноваций»</p>
      </div>
      <div class="org__ul">
        <p>Агентство стратегических инноваций создано
          в 2016 году в Омске.</p>
        <br><br>
        <p>Основными целями организации являются:</p>
        <ul>
          <li><span>развитие инфраструктуры инновационной сферы;</span></li>
          <li><span>разработка и внедрение научных и инновационных программ и проектов;</span></li>
          <li><span>популяризация научно-технического творчества молодежи;</span></li>
          <li><span>содействие развитию молодежного предпринимательства;</span></li>
          <li><span>поддержка талантливой молодежи;</span></li>
          <li><span>содействие развитию гражданских инициатив</span></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section id="partenrs__2021">
  <div class="container">
    <p>Партнеры</p>
    <div class="partners__logo_container">
      <div>
        <img src="assets/img/air_logo.svg" alt="">
      </div>
      <div>
        <img src="assets/img/smena_logo.svg" alt="">
      </div>
      <div>
        <img src="assets/img/pgrants_logo_gp_gark.png" alt="">
      </div>
      <div>
        <img src="assets/img/unnamed.jpg" alt="">
      </div>
    </div>
  </div>
  </div>
</section>
<section id="footer">
  <div class="container">
    <div class="footer__container_grid">
      <div class="footer__contact">
        <p>Если у вас остались вопросы, вы можете связаться с куратором или написать нам через форму обратной связи:</p>
        <p>куратор Послова Алина <br>
          <a href="tel:8(499) 753 01 25">8(499) 753 01 25 </a>
          <br> <a href="tel:8 (999) 852 65 25">8 (999) 852 65 25</a>
        </p>
      </div>
      <div class="footer__forms">
        <form action="/contact" method="POST" class="fs-form fs-form-full" autocomplete="off" enctype="multipart/form-data">
          {{ csrf_field() }}
          <input type="text" class="input_contact" name="phone" placeholder="Имя" required>
          <input type="email" class="input_contact" name="contact_email" placeholder="E-mail" required>
          <input type="text" class="input_contact" name="text_contact" placeholder="Ваш вопрос" required>
          <div class="form_btn_main">
            <div class="captchajs">
              {!! NoCaptcha::renderJs() !!}
              {!! NoCaptcha::display() !!}
            </div>
            <div class="w-100 a-right btn_pd">
              <button type="submit" class="btn_contact">Отправить</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <p class="copy__foter">Проект реализуется за счет гранта Президента Российской Федерации на развитие гражданского общества, предоставленного Фондом президентских грантов</p>
  </div>
</section>
@endsection