<?php

	require "dataBase.php";

	$title = "Регистрация";

	$data = $_POST;
	if ( isset( $data['submit'] ) )
	{

		$errors = array();

		if( trim( $data['login'] ) == '' ) {
			$errors[] = 'Введите логин';
		}
		if( trim( $data['email'] ) == '' ) {
			$errors[] = 'Введите Email';
		}
		if( $data['password'] == '' ) {
			$errors[] = 'Введите пароль';
		}
		if( $data['password2'] == '' ) {
			$errors[] = 'Введите проверочный пароль';
		}
		if( $data['password2'] != $data['password'] ) {
			$errors[] = ' Пароли не совпадают!';
		}
		if( R::count('users', "login = ?", array( $data['login'] )) ) {
			$errors[] = 'Пользователь с таким логином уже существует';
		}
		if( R::count('users', "email = ?", array( $data['email'] )) ) {
			$errors[] = 'Пользователь с таким Email уже существует';
		}

		if ( empty( $errors ) ) 
		{
			$user = R::dispense('users');
			$user->login = $data['login'];
			$user->email = $data['email'];
			$user->password = password_hash($data['password'], PASSWORD_DEFAULT);
			R::store( $user );
			echo '<div style="color: green">Всё ок!</div>';
		} else {
			echo '<div style="color: red">'.array_shift($errors).'</div>';
		}
	}

?>
<!DOCTYPE html>
<html lang="ru">
<?php require "blocks/head.php"; ?>
<body>

	<?php require "blocks/header.php"; ?>
	
	<div class="content">

		<form action="reg.php" method="POST">
			<h2>Регистрация: </h2><br><br><hr><br>
			<label><strong>Введите логин:</strong> <input type="text" name="login" value="<?php echo $data['login'] ?>"></label><br><br>
			<label><strong>Введите Email:</strong> <input type="text" name="email" value="<?php echo $data['email'] ?>"></label><br><br>
			<label><strong>Введите пароль:</strong> <input type="password" name="password" value="<?php echo $data['password'] ?>"></label><br><br>
			<label><strong>Введите повторно пароль:</strong> <input type="password" name="password2" value="<?php echo $data['password2'] ?>"></label><br><br>
			<button type="submit" name="submit">Зарегистрироваться</button>
		</form>

	</div>

	<?php require "blocks/footer.php"; ?>

</body>
</html>