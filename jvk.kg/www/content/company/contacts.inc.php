<?php
{
# Данные о странице
$title = 'Контактная информация  ';
$keywords = 'Контакты';
$description = 'Контактная информация ';
$template = 'info';
$page_blocks = '';

# Содержание страницы
$content = <<<EOF
<div class='image-slide'><img src="/i/slide/4.jpg" alt="Структура" "/></div>

<div class='contents'>
<div class="tabstyle">
<center>
<h7>
<br>Г. ЖАЛАЛ-АБАД КР ПЕР.СТРЕЛКОВЫЙ 1А, ИНН: 01107199410089
<br>График работы с 9.00 до 18.00 Пн-Пт 
<br>03722 7-33-20
<br>
</h7>
</center>

<br>
<section id="message">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2><span>Обратная связь</span></h2>
         <div id="contact-form">        
           <div class="controls">
             <div class="row">
               <div class="col-md-6">
                 <div class="form-group">
                   <label for="form_email">Ваш Email *</label>
                    <input id="form_email" type="email" class="form-control" placeholder="Введите адрес электронной почты*" required="" data-error="Требуется действующее электронное письмо.">
                   <div class="help-block with-errors"></div>
                 </div>
               </div>
               <div class="col-md-6">
                 <div class="form-group">
                   <label for="form_name">Ваше имя *</label>
                    <input id="form_name" type="text" class="form-control" required="" placeholder="Как к Вам обращаться?">
                   <div class="help-block with-errors"></div>
                 </div>
               </div>
             </div>
             <div class="row">
                 <div class="col-md-12 checkbox-data">
                     <label>
                         <input type="checkbox" checked="checked" id="person_data" required="">
                         <i class="fa fa-2x icon-checkbox"></i>
                         <span>Подтверждаю согласие на обработку <a href="/personal-data-usage-terms.html" target="_blank">персональных данных</a></span>
                     </label>
                 </div>
             </div>
             <div class="row">
               <div class="col-md-12">
                 <div class="form-group">
                    <textarea id="form_message" name="text_comment" class="form-control" placeholder="Пожалуйста, оставьте сообщение" rows="4" required="" data-error="Пожалуйста, оставьте нам сообщение."></textarea>
                   <div class="help-block with-errors"></div>
                 </div>
                 <div class="messages"></div>
               </div>          
               <div class="col-md-12 text-center">
                  <input type="submit" name="btn_submit" id="button_contacts" value="Отправить сообщение">
               </div>
             </div>
           </div>
         </div>
        </div>
      </div>
    </div>
</section>

<div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/10312/djalal-abad/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Джалал‑Абад</a><a href="https://yandex.ru/maps/geo/771293475/?ll=72.989236%2C40.938908&utm_medium=mapframe&utm_source=maps&z=14.83" style="color:#eee;font-size:12px;position:absolute;top:14px;">Джалал-Абад</a><iframe src="https://yandex.ru/map-widget/v1/-/CCQ36FR4GB" width="100%" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>


EOF;
}