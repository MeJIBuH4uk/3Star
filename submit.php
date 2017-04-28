<?php

if( !empty($_POST['name'] AND $_POST['email'] AND $_POST['message']) ) {

	$headers = 'From: Эльвин Агарагимов\r\n'.
			   'Reply-To: myhumanity@yandex.ru\r\n'.
			   'x-mailer: PHP/'. phpversion();

	$theme = 'Новое сообщение';

	$letter .="Имя: ".$_POST['name']."";
	$letter .="\nEmail: ".$_POST['email']."";
	$letter .="\nТелефон: ".$_POST['phone']."";
	$letter .="\nСообщение: ".$_POST['message']."";

	mail('myhumanity@yandex.ru', $theme, $letter, $headers);

	echo "<div style='color: green'>Сообщение отправлено! С Вами свяжутся в ближайшее время!</div>";
} else {
	echo "<div style='color: red'>Заполните все поля!</div>";
}