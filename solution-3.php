<?php
	session_start();

	// несколько получателей
	$to  = 'user@example.com' . ', ';
	$to .= 'admin@server.com';

	// тема письма
	$subject = 'Письмо обратной связи';

	// текст письма
	$message = 'Пользователь '
		. $_POST['name']
		. ' с номером телефона:<br />'
		. $_POST['tel']
		. '<br />';

	// Для отправки HTML-письма должен быть установлен заголовок Content-type
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; 

	// Дополнительные заголовки
	$headers .= 'To: Admin <admin@server.com>' . "\r\n";
	$headers .= 'From: '  . $_POST['name'] . '<' . $_SESSION['logged_user']->email . '>' . "\r\n";
	// Предполгается, что пользователь авторизован и email взят из сессии

	// Отправляем
	if( isset($_POST['btn']) )
		mail($to, $subject, $message, $headers);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="" />
</head>
<body>

    <div class="container">

		<form class="mb-5" method="post">
			<div class="form-group">
				<label for="name">Имя пользователя</label>
				<input type="text" id="name" name="name" placeholder="Имя"><br />
			</div>			
			<div class="form-group">
				<label for="tel">Контактный телефон</label>
				<input type="tel" id="tel" name="tel" pattern="8[0-9]{3}-[0-9]{3}" placeholder="Телефон"><br />
			</div>
			
			<button type="submit" class="btn btn-primary" name="btn">Отправить</button>

			<?php header("Location: solution-3.php") ?>
		</form>
		<!-- /.form -->

	</div>

</body>
</html>
