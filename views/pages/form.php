<?php
/**
 * @var array $errors
 * @var string $isSuccess
 */

if ($errors !== [])
{
	print_r($errors);
}
?>

<?php if ($isSuccess !== ''): ?>
<div class="alert alert-success" role="alert">
	Сообщение успешно сохранено!
</div>
<?php endif; ?>

<form method="post" action="/public/feedback-form.php" enctype="multipart/form-data" style="margin-top: 30px; width: 40%">
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