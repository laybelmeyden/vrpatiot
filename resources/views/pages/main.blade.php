@extends('layouts.master')

@section('content')
<section id="nav" class="container">
    <nav class="right_nav">
    <div class="nav-wrapper">
    <a href="#" data-activates="mobile-demo" class="button-collapse">Меню</a>
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
        <li><a href="#contact">
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
  <a class="waves-effect waves-light btn btn_header modal-trigger" href="#modal1">Участвовать</a>
  </div>
</div> 
</section>
<div id="modal1" class="modal modal-fixed-footer">
    <img src="assets/img/modal_form.png" alt="" class="modal_img_form_main">
    <div class="modal-content">
      <div class="row">
    <img src="assets/img/delete-button1.png"  class=" modal-close modal_form_close_all"alt="">
      <!-- <form action="/main_form" method="POST" class="fs-form fs-form-full" autocomplete="off" enctype="multipart/form-data">
				{{ csrf_field() }}
      <div class="col s12 xl12">
      <h4 class="main_form_header">Чтобы стать участником Всероссийского конкурса интерактивных военно-исторических реконструкций,заполните данную заявку и отправьте ее.</h4>
      <div class="form_item">
      <label for="" class="modal_input_label">Фамилия, имя, отчество </label>
      <input class="input_main_form_modal" type="text" name="fio" placeholder="" value="" required>
      </div>
      <div class="form_item">
      <label for="" class="modal_input_label">Дата рождения</label>
      <div>
      <input class="input_main_form_modal date_input_1" type="number" min="0" max="31" step="1"  name="day" placeholder="День" value="" required>
      <input class="input_main_form_modal date_input_2" type="number" min="0" max="12" step="1"  name="mouth" placeholder="Месяц" value="" required>
      <input class="input_main_form_modal date_input_3" type="number" min="0" max="2019" step="1"  name="years" placeholder="Год" value="" required>
      </div>
      </div>
      <div class="form_item">
      <label for="" class="modal_input_label">E-mail</label>
      <input class="input_main_form_modal" type="email" name="email" placeholder="" value="" required>
      </div>
      <div class="form_item">
      <label for="" class="modal_input_label">Телефон</label>
      <input class="input_main_form_modal" type="text" name="phone" placeholder="" value="" required>
      </div>
      <div class="form_item">
      <label for="" class="modal_input_label">Соц. сети</label>
      <div class="input_social">
      <img src="assets/img/vk-social-logotype.png" alt="" class="soc_image">
      <input class="input_main_form_modal date_input_4" type="text"  name="vk" placeholder="" value="">
      </div>
      <div class="input_social">
      <img src="assets/img/facebook-logo-button.png" alt="" class="soc_image">
      <input class="input_main_form_modal date_input_4" type="text"  name="facebook" placeholder="" value="">
      </div>
      <div class="input_social">
      <img src="assets/img/instagram.png" alt="" class="soc_image">
      <input class="input_main_form_modal date_input_5" type="text"   name="instagram" placeholder="" value="">
      </div>
      </div>
      <div class="form_item">
      <label for="" class="modal_input_label">Город</label>
      <input class="input_main_form_modal" type="text" name="city" placeholder="" value="" required>
      </div>
      <div class="form_item">
      <label for="" class="modal_input_label">Образование</label>
      <input class="input_main_form_modal" type="text" name="edu" placeholder="" value="" required>
      </div>
      <div class="form_item">
      <label for="" class="modal_input_label">Название проекта</label>
      <input class="input_main_form_modal" type="text" name="name_project" placeholder="" value="" required>
      </div>
      <div class="form_item" style="    margin-bottom: 25px !important;">
      <label for="" class="modal_input_label">Номинация</label>
      <select class='browser-default' name="select_mon">
        <option value="Технологии виртуальной (VR) и дополненной реальности (AR) в создании военно-исторической реконструкции">Технологии виртуальной (VR) и дополненной реальности (AR) в создании военно-исторической реконструкции</option>
        <option value="3D моделирование, современная видеообработка и 2D анимации в создании военно-исторической реконструкции.">3D моделирование, современная видеообработка и 2D анимации в создании военно-исторической реконструкции.</option>
        <option value="Компьютерные игры и обучающие программы.">Компьютерные игры и обучающие программы.</option>
      </select>
      </div>
      <div class="form_item">
      <label for="" class="modal_input_label">Краткое описание проекта (300 символов)</label>
      <textarea class="input_main_form_modal" type="text" name="opis_proj" placeholder="" value="" maxlength="300" required style="height: 116px; padding-top: 20px !important;"></textarea>
      </div>
      <div class="form_item">
      <label for="" class="modal_input_label">Команда</label>
      <input class="input_main_form_modal team_input" type="text" name="name_team" placeholder="ФИО" value="" required>
      <input class="input_main_form_modal team_input" type="email" name="email_team" placeholder="E-mail" value="" required>
      <input class="input_main_form_modal team_input" type="text" name="role_team" placeholder="Роль в команде" value="" required>
      <input class="input_main_form_modal team_input" type="text" name="phone_team" placeholder="Телефон" value="" required>
      <div class="form_item" id="added_news">
        <img src="assets/img/plus.png" alt="" class="img_plus">
        <p class="text_plus">Добавить еще одного участника команды</p>
      </div>
      </div>
      <div class="form_item hidden" id="ucaht_1">
      <div class="pd40">
      <label for="" class="modal_input_label">Доп. участник</label>
      <input class="input_main_form_modal team_input" type="text" name="name_team_1" placeholder="ФИО" value="">
      <input class="input_main_form_modal team_input" type="email" name="email_team_1" placeholder="E-mail" value="">
      <input class="input_main_form_modal team_input" type="text" name="role_team_1" placeholder="Роль в команде" value="">
      <input class="input_main_form_modal team_input" type="text" name="phone_team_1" placeholder="Телефон" value="">
      </div>
      </div>
      <div class="form_item">
      <p class="presi_text">Презентация проекта</p>
      <p class="info_presi">Загрузите файлы, которые презентуют ваш проект: видео, иллюстрации, текстовые документы </p>
      </div>
      <div class="form_item">
      <div class="flex_item_file">
      <a target="_blank" class="waves-effect waves-light btn btn_download_1" id="btn_1"><img src="assets/img/download1.png" class="img_dowmload_file">
      <span class="btn_file_text">ЗАГРУЗИТЬ ФАЙЛ</span>
      </a>
      <img src="assets/img/dropbox-logo.png" alt="" class="drop_file" id="btn_2">
      <img src="assets/img/a6bede6413b64507d854b92fde9b4d7c.png" alt="" class="google_file" id="btn_3">
      </div>
      <input type="file" name="app" class="file_app hidden" id="btn_1_1" onchange="ValidateSize(this)" value="no_file">
      <input class="input_main_form_modal team_input hidden" id="btn_2_2" type="text" name="drop_box_file" placeholder="Ссылка на файл DropBox" value="">
      <input class="input_main_form_modal team_input hidden" id="btn_3_3" type="text" name="google_file" placeholder="Ссылка на файл google disk" value="">
      </div>
      <div class="form_item c">
      <button type="submit" class="waves-effect waves-light btn btn_form_modal">ОТПРАВИТЬ</button>
      </div>
      </div>
      </form> -->
      </div>
      <p class="end_date">Конкурс завершен! ОЖИДАЙТЕ РЕЗУЛЬТАТОВ НА ПОЧТУ, ПРИКРЕПЛЕННУЮ К ОТПРАВЛЕННОЙ ЗАЯВКЕ. Спасибо за участие !</p>
    </div>
  </div>
<section id="info">
  <img class="img_left_frame" src="assets/img/Frame.png" alt="">
  <img class="img_right_frame" src="assets/img/Frame1.png" alt="">
<div class="container">
  <div class="row">
      <p class="info_z" id="info_vol">«Всероссийский конкурс интерактивных военно-исторических реконструкций»</p>
      <p class="info_z_down">направлен на популяризацию и совершенствование инструментария программ гражданско-патриотического и военно-патриотического воспитания с использованием инновационных технических средств 
      обучения (ИТСО). Конкурс призван стимулировать детей и молодежь к яркому и всестороннему освещению патриотической тематики, связанной с традициями и современными задачами патриотического воспитания.</p>
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
        <a href="https://vk.com/doc22052708_515231706?hash=bd620e6438b1933740&dl=4bb64a7b40d2583170" target="_blank" class="waves-effect waves-light btn btn_download"><img src="assets/img/download.png" class="img_dowmload">СКАЧАТЬ ПОЛОЖЕНИЕ О КОНКУРСЕ</a>
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
  <a class="waves-effect waves-light btn btn_medal modal-trigger" href="#modal1">Участвовать</a>
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
    <p class="contact_title">Если у вас возникли вопросы, связанные с конкурсом, напишите нам через данную форму обратной связи</p>
    <form action="/contact" method="POST" class="fs-form fs-form-full" autocomplete="off" enctype="multipart/form-data">
				{{ csrf_field() }}
        <input type="email" class="input_contact" name="contact_email" placeholder="E-mail" required>
        <input type="text" class="input_contact" name="phone" placeholder="Телефон" required>
        <textarea class="text_area_cotnatc" name="text_contact" placeholder="Ваш вопрос" required></textarea>
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
        <p class="air_text_title">Важнейшее направление работы Агентства - разработка комплексных технических решений для учреждений общего и дополнительного образования детей и подростков, в том числе, в области ИТ и робототехники.
        <br><br>
        <a href="https://vk.com/doc22052708_515231695?hash=1065ef54791cc826b8&dl=9fceff76729116c727">
        Приказ №36 о проведении всероссийского конкурса интерактивных военно-исторических реконструкций</a>
        </p>
        
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
        <a href="https://rusinnovations.com">
          <img src="assets/img/logo_air.png" alt="" style="width: 100%; max-width: 234px;">
        </a>
        </div>
        <div class="col xl3 flex_cetnter ">
        <a href="http://www.smena.org">
          <img src="assets/img/smena.png" alt="" style="width: 100%; max-width: 234px;">
        </a>
        </div>
        <div class="col xl3 flex_cetnter ">
        <a href="https://fadm.gov.ru">
          <img src="assets/img/ros_mol.png" alt="" style="width: 100%; max-width: 234px;">
        </a>
        </div>
        <div class="col xl3 flex_cetnter ">
        <a href="http://rospatriotcentr.ru/">
          <img src="assets/img/ros_pat.png" alt="" style="width: 100%; max-width: 146px;">
        </a>
        </div>
        <div class="col xl3 flex_cetnter ">
        <a href="https://coddyschool.com">
          <img src="assets/img/logo-coddy-blue.png" alt="" style="width: 100%; max-width: 146px;">
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
        <div class="col xl8">
          <p class="footer_contact">
          8(499) 753 01 25 <br>
          8 (999) 852 65 25 - куратор Послова Алина
          <br>
          <a href="mailto:info@rusinnovations.com">info@rusinnovations.com</a>
          </p>
        </div>
        <div class="col xl4 text-right">
        <a class="waves-effect waves-light btn btn_footer modal-trigger" href="#modal1">Участвовать</a>
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
