  <div id="body_modal" class="form_modal">
      <div class="container form_modal_body">
          <div id="modalmain" class="modal_main_form">
              <div class="modal-content">
                  <div class="modal_btn">
                      <img src="assets/img/delete-button.svg" class=" modal-close modal_form_close_all" alt="" onclick="modal_main_toggle();">
                  </div>
                  <div class="row">
                      <form action="/main_form" method="POST" class="fs-form fs-form-full" autocomplete="off" enctype="multipart/form-data">
                          {{ csrf_field() }}
                          <div class="col s12 xl12">
                              <h4 class="main_form_header">Чтобы стать участником Всероссийского конкурса интерактивных реконструкций событий Великой Отечественной войны, внимательно заполните все поля данной заявки, загрузите необходимые файлы и отправьте.</h4>
                              <div class="form_item">
                                  <label for="" class="modal_input_label">Фамилия, Имя, Отчество</label>
                                  <input class="input_main_form_modal" type="text" name="fio" placeholder="" value="" required>
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
                                      <option value="Технологии виртуальной (VR) и дополненной реальности (AR) в создании военно-исторической реконструкции">Технологии виртуальной (VR) и дополненной реальности (AR) в создании военно-исторической реконструкции</option>
                                      <option value="3D моделирование, современная видеообработка и 2D анимации в создании военно-исторической реконструкции.">3D моделирование, современная видеообработка и 2D анимации в создании военно-исторической реконструкции.</option>
                                      <option value="Компьютерные игры и обучающие программы.">Компьютерные игры и обучающие программы.</option>
                                  </select>
                              </div>
                              <div class="form_item">
                                  <label for="" class="modal_input_label">Краткое описание проекта (400 символов). <span>Расскажите нам самое важное о вашем проекте - о чём он, какие
                                          технологии были использованы и пр.</span></label>
                                  <textarea class="input_main_form_modal" type="text" name="opis_proj" placeholder="" value="" maxlength="400" style="height: 116px; padding-top: 20px !important;" required></textarea>
                              </div>
                              <div class="form_item">
                                  <label for="" class="modal_input_label">Команда</label>
                                  <div class="team_grid">
                                      <div class="frst_team">
                                          <input class="input_main_form_modal team_input" type="text" name="name_team" placeholder="ФИО" value="" required>
                                          <input class="input_main_form_modal team_input" type="email" name="email_team" placeholder="E-mail" value="" required>
                                      </div>
                                      <div class="second_team">
                                          <input class="input_main_form_modal team_input" type="text" name="role_team" placeholder="Роль в команде" value="" required>
                                          <input class="input_main_form_modal team_input" type="text" name="phone_team" placeholder="Телефон" value="" required>
                                      </div>
                                  </div>
                                  <div class="form_item" id="added_news">
                                      <img src="assets/img/plus.svg" alt="" class="img_plus">
                                      <p class="text_plus">Добавить еще одного участника команды</p>
                                  </div>
                              </div>
                              <div class="form_item hidden" id="ucaht_1">
                                  <div class="pd40">
                                      <label for="" class="modal_input_label">Доп. участник</label>
                                      <div class="team_grid">
                                          <div class="frst_team">
                                              <input class="input_main_form_modal team_input" type="text" name="name_team_1" placeholder="ФИО" value="">
                                              <input class="input_main_form_modal team_input" type="email" name="email_team_1" placeholder="E-mail" value="">
                                          </div>
                                          <div class="second_team">
                                              <input class="input_main_form_modal team_input" type="text" name="role_team_1" placeholder="Роль в команде" value="">
                                              <input class="input_main_form_modal team_input" type="text" name="phone_team_1" placeholder="Телефон" value="">
                                          </div>
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
                                      Dropbox, Google Диск, Яндекс Диск и пр</p>
                                  <br><br>
                                  <p>Загрузите файлы, или прикрепите ссылку на файлы в «облаке»</p>
                              </div>
                              <div class="form_item">
                                  <div id="app">
                                      <form-file></form-file>
                                  </div>
                              </div>
                              <div class="form_item c">
                                  <button type="submit" class="waves-effect waves-light btn btn_form_modal">Подать заявку</button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>