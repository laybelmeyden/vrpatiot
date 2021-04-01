@extends('layouts.master')

@section('content')

<section id="header__main">
  <!-- <div class="container__back">
  <img class="back__one" src="assets/img/back22.png" alt="">
  <img class="back__two" src="assets/img/back__main.png" alt="">
  </div> -->
  <div class="main__back">
    <div class="container">
      <h1>Патриоты <br> Сибири</h1>
      <h3>Конкурс проектов интерактивных <br> военно-исторических <br> реконструкций</h3>
      <a class="header__a" href="https://siberian-patriot.ru/storage/Metodicheskie_rekomendatsii_po_uchastiyu_v_konkurse_Patrioty_Sibiri_33.pdf">Методические рекомендации по участию в конкурсе</a>
      <div class="btn__main">
        <a id="form_modal_open" class="waves-effect waves-light btn btn_header modal-trigger" onclick="modal_main_toggle();">УЧАСТВОВАТЬ</a>
      </div>
    </div>
  </div>
</section>
<section id="youtube">
  <div class="container">
    <p class="yout__title">Запись Online-презентации Конкурса проектов интерактивных военно-исторических реконструкций "Патриоты Сибири!" - 12 марта 2020 года</p>
    <p class="yout__body">
    Перед просмотром записи, пожалуйста, подпишитесь на канал
    </p>
    <div class="btn__rules">
      <a id="btn__rules" target="_blank" href="https://youtu.be/Ah9Kc12NkuU" class="waves-effect waves-light btn btn_header modal-trigger">Смотреть запись</a>
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
    <div class="btn__rules">
      <a id="btn__rules" href="https://siberian-patriot.ru/storage/Polozhenie_o_Konkurse_proektov_interaktivnykh_voenno-istoricheskikh_rekonstruktsiy_Patrioty_Sibiri_33.pdf" class="waves-effect waves-light btn btn_header modal-trigger">Скачать Положение о Конкурсе</a>
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
<section id="news">
  <div class="container">
    <p class="news__title">НОВОСТИ И МЕРОПРИЯТИЯ</p>
  </div>
  <div class="container">
    <div class="slider-produtos-wrap">
      <div class="slider-produtos-destaque swiper-container">
        <div class="swiper-wrapper">

          @foreach ($news as $new)
          <div class="swiper-slide">
            <div class="news__img">
              <img src="/storage/{{$new->img}}" alt="">
            </div>
            <div class="news__body">
              <p>{{Str::limit($new->title_ru, 65, '...')}}</p>
              <div class="btn__news">
                <a href="/news{{$new->id}}"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45" fill="none">
                    <g filter="url(#filter0_d)">
                      <rect x="4" width="37" height="37" rx="18.5" fill="url(#paint0_linear)" />
                    </g>
                    <path d="M28.3536 19.3536C28.5488 19.1583 28.5488 18.8417 28.3536 18.6464L25.1716 15.4645C24.9763 15.2692 24.6597 15.2692 24.4645 15.4645C24.2692 15.6597 24.2692 15.9763 24.4645 16.1716L27.2929 19L24.4645 21.8284C24.2692 22.0237 24.2692 22.3403 24.4645 22.5355C24.6597 22.7308 24.9763 22.7308 25.1716 22.5355L28.3536 19.3536ZM18 19.5H28V18.5H18V19.5Z" fill="#FBFAFA" />
                    <defs>
                      <filter id="filter0_d" x="0" y="0" width="45" height="45" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                        <feOffset dy="4" />
                        <feGaussianBlur stdDeviation="2" />
                        <feColorMatrix type="matrix" values="0 0 0 0 0.12775 0 0 0 0 0.000781253 0 0 0 0 0.1875 0 0 0 0.41 0" />
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape" />
                      </filter>
                      <linearGradient id="paint0_linear" x1="-2.86881" y1="37" x2="44.1465" y2="33.6718" gradientUnits="userSpaceOnUse">
                        <stop offset="0.00821062" stop-color="#E2575F" />
                        <stop offset="0.609375" stop-color="#481659" />
                        <stop offset="1" stop-color="#2B1B4E" />
                      </linearGradient>
                    </defs>
                  </svg></a>
              </div>
            </div>
          </div>
          @endforeach

        </div>
      </div>
      <div class="swiper-prev"></div>
      <div class="swiper-next"></div>
    </div>
  </div>
</section>
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
        <a href="">
          <img src="assets/img/air_logo.svg" alt="">
        </a>
      </div>
      <div>
        <a href="http://www.smena.org/">
          <img src="assets/img/smena_logo.svg" alt="">
        </a>
      </div>
      <div>
        <a href="https://xn--80afcdbalict6afooklqi5o.xn--p1ai/">
          <img src="assets/img/pgrants_logo_gp_gark.png" alt="">
        </a>
      </div>
      <div>
        <a href="https://vk.com/myhistory_omsk">
          <img src="assets/img/pdas.svg" alt="" style="    max-height: 100%;">
        </a>
      </div>
      <div>
        <a href="https://vk.com/tur_omsk">
          <img src="assets/img/logo_white.png" alt="">
        </a>
      </div>
      <div>
        <a href="https://hnkm.ru/">
          <img src="assets/img/Логотип ХНКМ-01.png" alt="">
        </a>
      </div>
      <div>
        <a href="https://vk.com/molprav_55">
          <img src="assets/img/pererisovanny_Montazhnaya_oblast_1.png" alt="">
        </a>
      </div>
      <div>
        <a href="https://irkutsk.coddyschool.com/">
          <img src="assets/img/cddd.png" alt="">
        </a>
      </div>
      <div>
        <a href="http://patriot.nso.ru/">
          <img src="assets/img/LOGO_2_1.png" alt="">
        </a>
      </div>
      <div>
        <a href="https://vk.com/dobrotex">
          <img src="assets/img/Logotip_DobroTekha_siniy.png" alt="">
        </a>
      </div>
      <div>
        <a href="https://omsu.ru/">
          <img src="assets/img/OmGU_logo_Dostoevskiy_3.jpg" alt="">
        </a>
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
          <br> <a href="tel:8 (999) 852 65 25">8 (999) 852 65 25</a><br>
          <a href="mailto:siberian-patriot@anoasi.com">siberian-patriot@anoasi.com</a>
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
    <!-- <script>
      function modal_main_toggle_2() {
        document.getElementById("cok_modal").classList.remove('modal_notifications_visible');
      }
      const modal_cookie_open = () => {
        document.getElementById("cok_modal").classList.add('modal_notifications_visible');
      };

      window.onload = setTimeout(modal_cookie_open, 1000);
    </script> -->
    <p class="copy__foter">Проект реализуется за счет гранта Президента Российской Федерации на развитие гражданского общества, предоставленного Фондом президентских грантов</p>
    <!-- Yandex.Metrika informer --> <a href="https://metrika.yandex.ru/stat/?id=72355792&amp;from=informer" target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/72355792/1_0_14133FFF_14133FFF_1_pageviews" style="width:80px; height:15px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры)" class="ym-advanced-informer" data-cid="72355792" data-lang="ru" /></a> <!-- /Yandex.Metrika informer -->
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
      (function(m, e, t, r, i, k, a) {
        m[i] = m[i] || function() {
          (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
      })(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
      ym(72355792, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true
      });
    </script> <noscript>
      <div><img src="https://mc.yandex.ru/watch/72355792" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript> <!-- /Yandex.Metrika counter -->
  </div>
</section>
@endsection