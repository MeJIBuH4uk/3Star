<?php

	$title = "Главная";

	$data = $_POST;
	if( isset( $data['logging'] ) ) 
	{
		$errors = array();
		$user = R::findOne( 'users', "login = ?", array( $data['login'] ) );

		if( trim( $data['login'] ) == '' ) {
			$errors[] = 'Введите логин';
		}

		if( $data['password'] == '' ) {
			$errors[] = 'Введите пароль';
		}

		if( $user ) 
		{
			if( password_verify( $data['password'], $user->password ) ) 
			{
				$_SESSION['logged_user'] = $user;
			} else 
			{
				$errors[] = 'Пароль введён не верно!';
			}
		} else 
		{
			$errors[] = 'Пользователь с таким логином не найден!';
		}

		if ( !empty( $errors ) ) 
		{
			echo '<div style="color: red">'.array_shift( $errors ).'</div>';
		}
	}

?>
<!DOCTYPE html>
<html lang="ru">
<?php require "blocks/head.php"; ?>
<body>
	<?php require "blocks/header.php"; ?>
	<div class="content">
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
	</div>
	<?php require "blocks/footer.php"; ?>
</body>
</html>