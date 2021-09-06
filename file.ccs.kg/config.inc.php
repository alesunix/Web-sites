<?php
# Общие настройки
$config							= array();
$config['sitelink']				= 'http://file.ccs.kg/'; # URL сайта, со слэшем на конце
$config['sitename']				= 'Служба специальной связи'; # Заголовок сайта
$config['slogan']				= 'Загрузка реестров'; # Слоган
$config['encoding']				= 'utf-8'; # Кодировка

$config['template']				= 'info'; # Шаблон

# Настройки доступа
$config['login']				= 'admin'; # Логин админа
$config['password']				= 'Qaz159753'; # Пароль админа

# Настройки доступа в закрытую зону
$config['access_login']			= 'admin'; # Логин
$config['access_password']		= 'Ccs147/*-'; # Пароль
$config['upload_login']			= 'user'; # Логин
$config['upload_password']		= '$kn@oS'; # Пароль

### ОТПРАВКА СООБЩЕНИЙ ###

# Настройка отправки сообщений
$config['secretWord']					= 'sdfsdfgaghah'; # Секретное слово для генерации антиспама
$config['email']['receiver']			= 'mdolgova@ccs.kg'; # E-mail адрес, на который отправляется сообщение
$config['email']['subject']				= 'Письмо с сайта «' . $config['sitename'] . '»'; # Тема письма обратной связи

# Настройка формы
$config['form']['feedback']['subject']	= true; # Обязательно ли поле «Тема письма»

# Уведомления
$config['form']['feedbackSent']			= 'Сообщение отправлено администратору. Спасибо!<br>Сейчас вы будете перенаправлены на главную страницу.'; # Сообщение отправлено
$config['form']['notSent']				= 'Извините, письмо не было отправлено. Пожалуйста, повторите отправку.'; # Неудачная отправка
$config['form']['isSpam']				= 'Если вы видите данное сообщение, то скорее всего у вас отключен JavaScript. Включите его для отправки или просто отошлите письмо на ' . $config['email']['receiver']; # СПАМ?!
$config['form']['emptyEmail']			= 'Извините, e-mail не введён либо его формат неверен.'; # Нет мыла!
$config['form']['emptyName']			= 'Извините, имя не введено либо его формат неверен.'; # Нет имени!
$config['form']['emptyTopic']			= 'Извините, вы забыли указать тему письма.'; # Нет темы!
$config['form']['emptyMessage']			= 'Перед отправкой напишите сообшение.'; # Нет сообщения!