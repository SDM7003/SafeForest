<?php


//if (array_key_exists('messageFF', $_POST)) {

	$to = 'web-progmo@bk.ru';
	$subject = 'Заполнена контактная форма с '.$_SERVER['HTTP_REFERER'];
	$subject = "=?utf-8?b?". base64_encode($subject) ."?=";
	$message = "Имя: ".$_POST['inputName']."\nEmail: ".$_POST['inputEmail']."\nТема: ".$_POST['inputSubject']."\nСообщение: ".$_POST['messageArea'];
	$headers = 'Content-type: text/plain; charset="utf-8"';
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Date: ". date('D, d M Y h:i:s O') ."\r\n";
	mail($to, $subject, $message, $headers);
?>