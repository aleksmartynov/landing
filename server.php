<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$text = "Имя: {$name}, email: {$email}, ссообщение: {$message}.";

mail('jjj20011@yandex.ru', 'Сообщение с сайта', $text);
