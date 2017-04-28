<!DOCTYPE html>
<html lang="ru">
	<?php
		$title = "Обратная связь";
		require "blocks/head.php";
	?>
<body>

	<?php require "blocks/header.php"; ?>

	<input type="email" name="email" placeholder="Email"><br>
	<input type="text" name="name" placeholder="Имя"><br>
	<input type="text" name="phone" placeholder="Телефон"><br>
	<textarea name="message" cols="30" rows="10" placeholder="Сообщение"></textarea><br>
	<input type="button" name="send_mail" value="Отправить">
	<div class="result"></div>

	<script>
		$('[type="button"]').click(function() {
			$.post(

			"submit.php", // url

			{	// data form
				email: $('[name="email"]').val(),
				name: $('[name="name"]').val(),
				phone: $('[name="phone"]').val(),
				message: $('[name="message"]').val()
			},

			 function( data ) {	// after send
				$(".result").html(data);
			});
		});
	</script>

	<br>
	<hr>

	<a href="/">На главную</a>

	<?php require "blocks/footer.php"; ?>

</body>
</html>