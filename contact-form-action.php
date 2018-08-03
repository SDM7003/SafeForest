<?php


//if (array_key_exists('messageFF', $_POST)) {

	/*//$to = 'rita96pol@yandex.ru';
	$to = 'andreymakarov2012@yandex.ru';
	$subject = 'Заполнена контактная форма с '.$_SERVER['HTTP_REFERER'];
	$subject = "=?utf-8?b?". base64_encode($subject) ."?=";
	$message = "Имя: ".$_POST['inputName']."\nEmail: ".$_POST['inputEmail']."\nТема: ".$_POST['inputSubject']."\nСообщение: ".$_POST['messageArea'];
	$headers = 'Content-type: text/plain; charset="utf-8"';
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "From: Support Safeforest | Reminder <support@safeforest.ru>\r\n";
	$headers .= "Bcc: support@safeforest.ru\r\n";
	$headers .= "Date: ". date('D, d M Y h:i:s O') ."\r\n";
	mail($to, $subject, $message, $headers);*/
	
		//$_POST['inputName']='test name'; $_POST['inputEmail']='test@test.ru1'; $_POST['inputSubject']='test sub2'; $_POST['messageArea']='test mes3';
	require_once "SendMailSmtpClass.php";
	include('../../bin/include_safeforest.php');
	/////////////////////
	$to = 'support@safeforest.ru';
	$subject = 'Заполнена контактная форма с '.$_SERVER['HTTP_HOST'];
	//$subject = "=?utf-8?b?". base64_encode($subject) ."?=";
	$message = "Имя: ".$_POST['inputName']."\nEmail: ".$_POST['inputEmail']."\nТема: ".$_POST['inputSubject']."\nСообщение: ".$_POST['messageArea'];
	//////
	$headers= "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
	$headers .= "From: Safeforest Support <support@safeforest.ru>\r\n"; // от кого письмо
	$result =  $mailSMTP->send($to, $subject, $message, $headers); // отправляем письмо
	// $result =  $mailSMTP->send('Кому письмо', 'Тема письма', 'Текст письма', 'Заголовки письма');
	if($result === true){
		//echo "Письмо успешно отправлено";
	}else{
		//echo "Письмо не отправлено. Ошибка: " . $result;
	}
?>