  <div id="body_modal" class="form_modal">
      <div class="container form_modal_body" style="height: auto;">
          <div style="height: 100%;
    display: flex;  
    padding-top: 7%;
    flex-direction: column;">
              <p style="font-family: MontserratB !important;
    font-size: 32px !important;
    line-height: 30px;
    color: #425C5A !important;
    font-weight: 800; text-align: center; ">Всем спасибо за участие!
Итоги конкурса подведены</p>
    <p style="font-family: MontserratB !important;
    font-size: 20px !important;
    padding-top: 40px;
    padding-right: 80px;
    padding-left: 80px;
    line-height: 30px;
    color: #425C5A !important; ">

</p>
        <div class="btn_a" style="margin-top: 40px;">
        <a href="https://siberian-patriot.ru/news6" style="margin: 0 auto;" target="_blank" class="waves-effect waves-light btn btn_ans modal-trigger">Узнать результаты</a>
      </div>
    <p class="air_text_title" style="padding-top:60px;text-align: center; padding-bottom:30px;">
Для уточнения вопросов по Вашим проектам можете обратиться на почту <a href="mailto:siberian-patriot@anoasi.com" style="color:#D81A12 !important">siberian-patriot@anoasi.com</a><br>
Следите за новостями на наших ресурсах:<br>
- Сайт АНО АСИ: <a href="https://anoasi.com/" style="color:#D81A12 !important">https://anoasi.com/</a>
- VK:<a href="https://vk.com/agenstvoasi" style="color:#D81A12 !important">https://vk.com/agenstvoasi</a>
        </p>
          </div>
          <div id="modalmain" class="modal_main_form">
              <div class="modal-content">
                  <div class="modal_btn">
                      <img src="assets/img/delete-button.svg" class=" modal-close modal_form_close_all" alt="" onclick="modal_main_toggle();">
                  </div>
                  <!-- <div class="row">
                      <form action="/main_form" method="POST" class="fs-form fs-form-full" autocomplete="off" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <div class="col s12 xl12">
                              <h4 class="main_form_header">Чтобы стать участником Конкурса проектов интерактивных военно-исторических реконструкций "Патриоты Сибири", внимательно заполните все поля данной заявки, загрузите необходимые файлы и отправьте.</h4>
                              <div class="form_item">
                                  <label for="" class="modal_input_label">ФИО</label>
                                  <div class="social_grid">
                                      <div class="input_social_1">
                                          <input class="input_main_form_modal name_input_1" type="text" name="fio2" placeholder="Фамилия" value="">
                                      </div>
                                      <div class="input_social_2">
                                          <input class="input_main_form_modal name_input_2" type="text" name="fio" placeholder="Имя" value="">
                                      </div>
                                      <div class="input_social_3">
                                          <input class="input_main_form_modal name_input_3" type="text" name="fio3" placeholder="Отчество" value="">
                                      </div>
                                  </div>
                              </div>
                              <div class="form_item">
                                  <label for="" class="modal_input_label">Дата рождения</label>
                                  <div class="bth_grid">
                                      <div>
                                          <input class="input_main_form_modal date_input_1" type="number" min="0" max="31" step="1" name="day" placeholder="День" value="" required>
                                      </div>
                                      <div>
                                          <input class="input_main_form_modal date_input_2" type="number" min="0" max="12" step="1" name="mouth" placeholder="Месяц" value="" required>
                                      </div>
                                      <div>
                                          <input class="input_main_form_modal date_input_3" type="number" min="0" max="2019" step="1" name="years" placeholder="Год" value="" required>
                                      </div>
                                  </div>
                              </div>
                              <div class="form_item">
                                  <label for="" class="modal_input_label">E-mail <span>(Пожалуйста, укажите свой e-mail, чтоб мы могли держать вас в курсе всех новостей и этапов конкурса)</span></label>
                                  <input class="input_main_form_modal" type="email" name="email" placeholder="" value="" required>
                              </div>
                              <div class="form_item">
                                  <label for="" class="modal_input_label">Телефон</label>
                                  <input class="input_main_form_modal" type="text" name="phone" placeholder="" value="" required>
                              </div>
                              <div class="form_item">
                                  <label for="" class="modal_input_label">Почтовый адрес <span>(Пожалуйста, укажите Индекс, город, улицу, дом, корпус(строение), квартира, чтоб мы могли отправить вам сертификат участника)</span></label>
                                  <input class="input_main_form_modal" type="text" name="pocht_index" placeholder="" value="" required>
                              </div>
                              <div class="form_item">
                                  <label for="" class="modal_input_label">Соц. сети</label>
                                  <div class="social_grid">
                                      <div class="input_social">
                                          <img src="assets/img/vk-social-logotype.svg" alt="" class="soc_image">
                                          <input class="input_main_form_modal date_input_4" type="text" name="vk" placeholder="" value="">
                                      </div>
                                      <div class="input_social">
                                          <img src="assets/img/facebook-logo-button.svg" alt="" class="soc_image">
                                          <input class="input_main_form_modal date_input_4" type="text" name="facebook" placeholder="" value="">
                                      </div>
                                      <div class="input_social last_social">
                                          <img src="assets/img/instagram.svg" alt="" class="soc_image">
                                          <input class="input_main_form_modal date_input_5" type="text" name="instagram" placeholder="" value="">
                                      </div>
                                  </div>
                              </div>
                              <div class="form_item">
                                  <label for="" class="modal_input_label">Город</label>
                                  <input class="input_main_form_modal" type="text" name="city" placeholder="" value="" required>
                              </div>
                              <div class="form_item">
                                  <label for="" class="modal_input_label">Образование <span> (Укажите название образовательного учреждения, в котором вы учитесь или которое уже окончили)</span></label>
                                  <input class="input_main_form_modal" type="text" name="edu" placeholder="" value="" required>
                              </div>
                              <div class="form_item">
                                  <label for="" class="modal_input_label">Название проекта</label>
                                  <input class="input_main_form_modal" type="text" name="name_project" placeholder="" value="" required>
                              </div>
                              <div class="form_item" style="    margin-bottom: 25px !important;">
                                  <label for="" class="modal_input_label">Номинация</label>
                                  <select class='browser-default' name="select_mon">
                                      <option value="Реконструкция с применением VR- и AR-технологий">Реконструкция с применением VR- и AR-технологий</option>
                                      <option value="3D-моделирование, анимация и видеомонтаж">3D-моделирование, анимация и видеомонтаж</option>
                                      <option value="Реконструкция в формате компьютерной игры">Реконструкция в формате компьютерной игры</option>
                                  </select>
                              </div>
                              <div class="form_item">
                                  <label for="" class="modal_input_label">Краткое описание проекта (400 символов). <span>Расскажите нам самое важное о вашем проекте - о чём он, какие
                                          технологии были использованы и пр.</span></label>
                                  <textarea class="input_main_form_modal" type="text" name="opis_proj" placeholder="" value="" maxlength="400" style="height: 116px; padding-top: 20px !important;" required></textarea>

                              </div>
                              <div class="form_item">
                                  <label for="" class="modal_input_label">Команда проекта <span>(укажите членов команды, если таковые имеются)</span></label>
                                  <div class="team_grid">
                                      <div class="frst_team">
                                          <input class="input_main_form_modal team_input" type="text" name="name_team" placeholder="ФИО" value="">
                                          <input class="input_main_form_modal team_input" type="email" name="email_team" placeholder="E-mail" value="">
                                      </div>
                                      <div class="second_team">
                                          <input class="input_main_form_modal team_input" type="text" name="role_team" placeholder="Роль в команде" value="">
                                          <input class="input_main_form_modal team_input" type="text" name="phone_team" placeholder="Телефон" value="">
                                      </div>
                                  </div>
                                  <div class="form_item" id="added_news">
                                      <img src="assets/img/plus.svg" alt="" class="img_plus">
                                      <p class="text_plus">Добавить участников</p>
                                  </div>
                              </div>
                              <div class="form_item hidden" id="ucaht_1">
                                  <div class="pd40">
                                      <label for="" class="modal_input_label">Доп. члены команды (введите информацию об остальных членах команды в формате - Фамилия Имя - роль в команде, e-mail)</label>
                                      <div class="input-field">
                                          <textarea id="textarea1" class="input_main_form_modal team_input team_input__textare" name="name_team_1" placeholder="введите информацию об остальных членах команды в формате - Фамилия Имя - роль в команде, e-mail" value=""></textarea>
                                      </div>
                                  </div>
                              </div>
                              <div class="form_item">
                                  <p class="presi_text">Презентация проекта</p>
                                  <p class="info_presi">Пожалуйста, загрузите все файлы, которые презентуют ваш проект – презентация, прототип, текстовые документы,
                                      изображения, видео, прочие мультимедийные файлы. Обязательно прикладывайте инструкцию по запуску вашего
                                      проекта (программа для воспроизведения файла, необходимые шаги для запуска) – это очень поможет нашим экспертам
                                      при проверке вашей работы.
                                      <br><br>
                                      Все файлы можно направить одним архивом, а также использовать сервисы облачного хранения данных:
                                      Dropbox, Google Диск, Яндекс Диск и пр
                                  </p>
                                  <br><br>
                                  <p>Загрузите файлы, или прикрепите ссылку на файлы в «облаке»</p>
                              </div>
                              <div class="form_item">
                                  <div id="app">
                                      <form-file></form-file>
                                  </div>
                              </div>
                              <div class="main_modal__checked">
                                  <div class="form-group">
                                      <input type="checkbox" id="main_ckd" checked>
                                      <label for="main_ckd">Согласие на обработку персональных данных.
                                          Участник настоящим дает АНО «АСИ» согласие на обработку персональных данных (автоматизированную и не автоматизированную) и совершение с нижеуказанными данными любых действий, предусмотренных пунктом 3 статьи 3 Федерального закона РФ №152-ФЗ от 27.07.2006 «О персональных данных» (без ограничения) сбор, систематизацию, накопление, хранение, уточнение (обновление, изменение), использование, распространение (в том числе передачу), обезличивание, блокирование и уничтожение).
                                          <br><br>
                                          Персональные данные, в отношении которых дается согласие, включают фамилию, имя, отчество, адрес, дата рождения, контактный телефон, и другие персональные данные в объеме, содержащемся в представляемых регистрационных формах. Настоящее согласие действует в течение 5 (пяти) лет.
                                          
                                          <br><br>
                                          <a href="https://siberian-patriot.ru/storage/Politika_konfidentsialnosti.pdf">Политика конфиденциальности.pdf</a>
                                      </label>
                                  </div>
                              </div>

                              <div class="form_item c items_captcha">
                                  <div class="">
                                      {!! NoCaptcha::renderJs() !!}
                                      {!! NoCaptcha::display() !!}
                                  </div>
                                  <button type="submit" class="waves-effect waves-light btn btn_form_modal">Подать заявку</button>
                              </div>
                          </div>
                      </form>
                  </div> -->
              </div>
          </div>
      </div>
  </div>
  <!-- <script>
      const checkBtn = document.querySelector('.btn_form_modal'),
          ckdInp = document.querySelector('#main_ckd');
      ckdInp.addEventListener('input', () => {
          ckdInp.checked ? checkBtn.removeAttribute("disabled", "disabled") : checkBtn.setAttribute("disabled", "disabled")
      })
  </script> -->