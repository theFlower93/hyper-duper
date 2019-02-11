<?php
	$to = 'admin@server.com';
	$subject = 'Письмо обратной связи';

	// текст письма
    $message = '
        <html>
            <head>
                <title>'.$subject.'</title>
            </head>
            <body>
                <p>Имя: '.$_POST['name'].'</p>
                <p>Телефон: '.$_POST['tel'].'</p>
                <p>Email: '.$_SESSION['logged_user']->email.'</p>
            </body>
        </html>';
	// Для отправки HTML-письма должен быть установлен заголовок Content-type
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; 

	// Дополнительные заголовки
	$headers .= 'To: Admin <admin@server.com>' . "\r\n";
	$headers .= 'From: ' . $_POST['name'] . '<' . $_SESSION['logged_user']->email . '>' . "\r\n";
	// Предполгается, что пользователь авторизован и email взят из сессии

	// Отправляем
	if( isset($_POST['btn']) ){
		if( (isset($_POST['name']) && $_POST['tel']) != ""){
				mail($to, $subject, $message, $headers);
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="" />

    <!-- Ajax -->
    <script type="text/javascript">
	    $(document).ready(function() {
			$("#reg-form").submit(function() {
	        	var form_data = $(this).serialize();
	        	$.ajax({
	          		type: "POST",
	          		url: "solution-3.php",
	          		data: form_data,
					success: function(data){
		       		if (data['error']) { // eсли oбрaбoтчик вeрнул oшибку
		       			alert(data['error']); // пoкaжeм eё тeкст
		       		} else { // eсли всe прoшлo oк
		       			alert('Письмo oтврaвлeнo! Чeкaйтe пoчту! =)');
		       		}
		         }
	        	});
	      	});
	    });
    </script>
</head>
<body>

    <div class="container">

		<form class="mb-5" id="reg-form" method="post">
			<div class="form-group">
				<label for="name">Имя пользователя</label>
				<input type="text" id="name" name="name" placeholder="Имя" required 
				><br />
			</div>			
			<div class="form-group">
				<label for="tel">Контактный телефон</label>
				<input type="tel" id="tel" name="tel"
				pattern="\+7\-[0-9]{3}\-[0-9]{3}\-[0-9]{2}\-[0-9]{2}"
				placeholder="+7-(xxx)-xxx-xx-xx" required><br />
			</div>
			
			<button type="submit" class="btn btn-primary" name="btn">Отправить</button>
		</form>
		<!-- /.form -->

	</div>

</body>
</html>
