@extends('layouts.master')

@section('content')
<section id="nav" class="container">
    <nav class="right_nav">
    <div class="nav-wrapper">
    <a href="#" data-activates="mobile-demo" class="button-collapse">Меню</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down li_items">
      <li>
          <a href="/programm">
            <div class="hover_a_nav">
            Итоги
          </div>
          </a>
        </li>
        <li>
          <a href="/#info">
            <div class="hover_a_nav">
            О конкурсе
          </div>
          </a>
        </li>
        <li><a href="/#nominations">
          <div class="hover_a_nav">
            Номинации
          </div>  
        </a></li>
        <li><a href="/#organize">
          <div class="hover_a_nav">
            Организатор
          </div>  
        </a></li>
        <li><a href="/#contact">
          <div class="modal_nav_item">
            <img src="assets/img/Rectangle2.png" alt="" class="img_feedback" />
              <span class="modal_text_item">
            Обратная связь
            </span>
          </div>
        </a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
      <li><a href="/programm">Итоги</a></li>
        <li><a href="/#info">О конкурсе</a></li>
        <li><a href="/#nominations">Номинации</a></li>
        <li><a href="/#organize">Организатор</a></li>
        <li><a href="/#contact">Обратная связь</a></li>
      </ul>
    </div>
  </nav>
</section>

<section id="info">
  <img class="img_left_frame" src="assets/img/Frame.png" alt="">
  <img class="img_right_frame" src="assets/img/Frame1.png" alt="">
<div class="container">
  <div class="row">
      <p class="info_z" id="info_vol">Были подведены итоги приёма заявок, поданных на Всероссийский конкурс интерактивных военно-исторических реконструкций.</p>
      <p class="info_z_down">
Мы получили 84 проекта из Курска, Рязани, Тюмени, Омска, Новосибирска, Ростовской области, Тульской области, Калининграда, Твери, Иннополиса, Комсомольска на Амуре, Орла, Улан-Удэ, Севастополя, Горно-Алтайска и др. - участие приняли более 47 субъектов РФ
<br><br>
Номинации конкурса:<br><br>
▪47 проектов – 3D моделирование, современная видеообработка и 2D анимации в создании военно-исторической реконструкции<br>
▪21 проект - Компьютерные игры и обучающие программы.<br>
▪16 проектов - Технологии виртуальной (VR) и дополненной реальности (AR) в создании военно-исторической реконструкции<br><br>

В соответствии с условиями конкурса, 80 проектов были допущены до экспертной оценки конкурсной комиссии<br><br>

📎Экспертам предстоит оценить проекты по 5 критериям:<br><br>
▫Актуальность и социальная значимость проекта<br>
▫Новизна идеи<br>
▫Креативность проекта<br>
▫Технология реализации проекта<br>
▫Команда проекта<br><br>

Подведение итогов конкурса и объявление победителей состоится до 8 ноября 2019 года.<br><br>

Следите за новостями на сайтах: <a href="https://vrpatriot.ru/">vrpatriot.ru</a>, <a href="https://rusinnovations.com/">rusinnovations.com</a> и в группе <a href="https://vk.com/aidrussia">vk/aidrussia</a><br><br>

Конкурс проводится при поддержке Федерального агентства по делам молодёжи и ФГБУ «Роспатриотцентр», в рамках субсидии федерального бюджета, предоставленной на проведение мероприятий по содействию патриотическому воспитанию граждан Российской Федерации
      </p>
      <div class="col xl12" style="width: 100%;">
        <div class="flex_align">
        <a href="https://vk.com/doc32870057_521034061?hash=734113302e895e65c8&dl=a379717f8254b36c19" target="_blank" class="waves-effect waves-light btn btn_download">
        <img src="assets/img/download.png" class="img_dowmload">ИТОГИ ПРИЕМА ЗАЯВОК</a>
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
          8(499) 753 01 25 <br>
          8 (999) 852 65 25 - куратор Послова Алина
          <br>
          <a href="mailto:info@rusinnovations.com">info@rusinnovations.com</a>
          </p>
        </div>
        <div class="col xl4 text-right">
        <a class="waves-effect waves-light btn btn_footer modal-trigger" href="/programm">ИТОГИ</a>
        </div>
        <div class="col">
        <p class="footer_copy">Сайт разработан за счет средств Гранта (субсидии), предоставленных ФГБУ «Роспатриотцентр» на проведение мероприятий по содействию патриотическому воспитанию граждан Российской Федерации.</p>
        </div>
      </div>
      <!-- Yandex.Metrika informer -->
<a href="https://metrika.yandex.ru/stat/?id=55276813&amp;from=informer"
target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/55276813/1_0_6B5E7CFF_4B3E5CFF_1_pageviews"
style="width:80px; height:15px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры)" class="ym-advanced-informer" data-cid="55276813" data-lang="ru" /></a>
<!-- /Yandex.Metrika informer -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(55276813, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/55276813" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
    </div>
  </div>
</section>

@endsection