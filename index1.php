<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
<nav class="navbar navbar-light bg-light">
	<a class="navbar-brand" href="/">Форма обратной связи</a>
</nav>
<div class="container" style="margin-top: 30px; width: 40%">
	<form method="post" action="/save.php" enctype="multipart/form-data">
		<div class="form-group">
			<label for="inputName">Имя пользователя</label>
			<input type="text" class="form-control" name="name" placeholder="Введите имя" required>
		</div>
		<div class="form-group">
			<label for="inputEmail">Email</label>
			<input type="email" class="form-control" name="email" placeholder="Введите email" required>
		</div>
		<div class="form-group">
			<label for="textMessage">Сообщение</label>
			<textarea class="form-control" name="message" rows="3" required></textarea>
		</div>
		<div class="form-group">
			<label for="file">Файл</label>
			<input type="file" class="form-control-file" name="file" accept=".jpg,.png">
		</div>
		<button type="submit" class="btn btn-primary">Отправить</button>
	</form>
</div>
</body>
</html>