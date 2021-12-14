<?php
$post = (!empty($_POST)) ? true : false;
if($post) {
	$salary = htmlspecialchars(trim($_POST['salary']));
	$proffesion = htmlspecialchars(trim($_POST['profession']));
	$experience = htmlspecialchars(trim($_POST["exp"]));
	$contact = htmlspecialchars(trim($_POST['contact']));

	if(!$error) {
		$sub = 'Сообщение с сайта от '.$name;
		$address = "info@workability.ru";
		$mes = "Желаемый заработок: ".$salary."\n\nПрофессия: ".$proffesion."\n\nОпыт работы: ".$experience."\n\nКонтакт: ".$contact."\n\n";
		$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nReply-To:$email\r\nFrom:$name <contact>");
		if($send) {echo 'OK';}
	}
	else {echo '<div class="err">'.$error.'</div>';}
}
?>