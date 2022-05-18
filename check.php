<?php
// print_r($_POST);
$email = $_POST['email'];
$message = $_POST['message'];
$error = '';
if (trim($email) == '') 
	$error = 'Введите наш email';
else if(trim($message) == '') 
	$error = 'Введите сообщения, или никак';
else if(strlen($message) < 10) 
	$error = 'сообщения должно быть более 10 символов';
	
if ($error != '') {
	echo $error;
	exit;
}

$subject = '=?utf-8?B?'.base64_encode('Site').'?=';
$headers = 'From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n';

mail('danila.striy@gmail.com', $subject, $message, $headers);

header('Location: /about.php');


?>