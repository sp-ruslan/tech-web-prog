<?php 
	//print_r($_POST);
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	$error = '';
	if(trim($email)=='')
		$error = 'Введите ваш email';
	else if(trim($message)=='')
		$error = 'Введите ваше сообщение';
	
	if($error != '')
		echo $error;
	exit;
	
	$subject = "=?utf-8?B?".base64_encode("Обращение с сайта")."?=";
	$headers = "From: $email\r\n Reply-to: $email\r\n Content-type: text/html; charset: utf-8\r\n";
	mail('sp.ruslan@mail.ru', $subject, $message, $headers);
	header('Location: /about.php');	
?>