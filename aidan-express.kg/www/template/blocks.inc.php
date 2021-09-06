<?php
# Дополнительные блоки данных
# Добавляйте сколько угодно. Не забудьте вставить переменную в design.inc.php или на страницу в папке content/

$newsblock = <<<newsblock

newsblock;

$donate = <<<donate
<h2 id="feedback"></h2>
<div class='well'>
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


</div><!--/well -->
donate;

$reklam = <<<reklam
<div class='well well-small'>
<tagname class="orange1"><b>Дед Мороз и ОсОО "Айдан-экспресс" начал принимать заказы на поздравления</b></tagname><br>
<b>УВАЖАЕМЫЕ ЖИТЕЛИ И ГОСТИ НАШЕЙ РЕСПУБЛИКИ!</b><br>
Приближается Новый год, Рождественские каникулы – одни из долгожданных праздников и предприимчивый Дед Мороз уже начал принимать заказы для поздравлений.<br>
Не забудьте поздравить с наступающими праздниками своих родных, близких, друзей и любимых, также Вы можете их поздравить с днем рождения и другими знаменательными событиями в жизни. 
Можно поздравить одного человека или целый коллектив.<br>
Чтобы Ваши пожелания и поздравления были получены своевременно, лучше сделайте это заблаговременно.<br>
<u>По телефонам: 0559101346, 0559101249.</u><br>
Вам расскажут об условиях приема заказов и   примут заказ на вручение подарка, сувенира в любом городе, районном центре нашей республики.<br>
Все хлопоты по, доставке   Дед Мороз берет на себя. <br>
<tagname class="blue1"><b>СПЕШИТЕ ПОЗДРАВИТЬ СВОИХ РОДНЫХ, БЛИЗКИХ, ДРУЗЕЙ И ЛЮБИМЫХ.</tagname></b>
<br>
<img src="/i/moroz.png" width=250" height=250" align="right" alt="moroz">
<img src="/i/shadow-bottom2.png" width=1000" align="center">
<div id="blink7" align="right">Прием заказов: 0559 10-13-46 и 0559 10-12-49</div></p>

</div><!--/well -->
reklam;

