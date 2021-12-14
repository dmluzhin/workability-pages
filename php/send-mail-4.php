<?php
$post = (!empty($_POST)) ? true : false;
if($post) {
	$email = htmlspecialchars(trim($_POST['email']));
	$message = htmlspecialchars(trim($_POST['message']));
	$error = '';
	if(!$email) {$error .= 'Укажите электронную почту. ';}

	if(!$message || strlen($message) < 1) {$error .= 'Введите сообщение. ';}
	if(!$error) {
	    $sub = 'Сообщение с сайта от '.$name;
		$address = "info@workability.ru";
		$mes = "Почта: ".$email."\n\nСообщение: ".$message."\n\n";
		$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nReply-To:$email\r\nFrom:$name <contact>");
		if($send) {echo 'OK';}
	}
	else {echo '<div class="err">'.$error.'</div>';}
}
?>