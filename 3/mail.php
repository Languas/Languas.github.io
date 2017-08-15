<?php

$recepient = "for-olx@mail.ru";
$sitename = "Название сайта";

$name = trim($_POST["name"]);
$phone = trim($_POST["e-mail"]);
$text = trim($_POST["text"]);
$message = "Имя: $name \nТелефон: $e-mail \nТекст: $text";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");