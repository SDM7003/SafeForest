<?php
/*require_once "SendMailSmtpClass.php"; // подключаем класс
 
$mailSMTP = new SendMailSmtpClass('support@safeforest.ru', 'hrwhwrW25215GEeheDkp', 'ssl://smtp.mail.ru', 'Safeforest Support'); // создаем экземпляр класса
// $mailSMTP = new SendMailSmtpClass('логин', 'пароль', 'хост', 'имя отправителя');
 
// заголовок письма
$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
$headers .= "From: Safeforest Support <support@safeforest.ru>\r\n"; // от кого письмо
$result =  $mailSMTP->send('andreymakarov2012@yandex.ru', 'Testing test', 'Test is testing', $headers); // отправляем письмо
// $result =  $mailSMTP->send('Кому письмо', 'Тема письма', 'Текст письма', 'Заголовки письма');
if($result === true){
    echo "Письмо успешно отправлено";
}else{
    echo "Письмо не отправлено. Ошибка: " . $result;
}*/

	$_POST['inputName']='test name'; $_POST['inputEmail']='test@test.ru1'; $_POST['inputSubject']='test sub2'; $_POST['messageArea']='test mes3';
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
		echo "Письмо успешно отправлено";
	}else{
		echo "Письмо не отправлено. Ошибка: " . $result;
	}
?>