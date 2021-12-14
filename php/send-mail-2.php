<?php
$post = (!empty($_POST)) ? true : false;
if($post) {
	$email = htmlspecialchars(trim($_POST['email']));
	$name = htmlspecialchars(trim($_POST['name']));
	$phone = htmlspecialchars(trim($_POST["phone"]));
	$message = htmlspecialchars(trim($_POST['message']));
	$speed = $_POST['speed'];

	if(!$error) {
	    $sub = 'Сообщение с сайта от '.$name;
		$address = "info@workability.ru";
		$mes = "Почта: ".$email."\n\nИмя: ".$name."\n\nТелефон: ".$phone."\n\nСрочность: ".$speed."\n\n";
		$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nReply-To:$email\r\nFrom:$name <contact>");
		if($send) {echo 'OK';}
	}
	else {echo '<div class="err">'.$error.'</div>';}
}
?>