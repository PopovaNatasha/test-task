<?php

/**
 * @var string $content
 * @var string $title
 *
 */

?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer">
	<title><?=$title?></title>
</head>
<body>
<?php
if (isset($errors))
{
	print_r($errors);
}
?>
<nav class="navbar navbar-light bg-light">
	<a class="navbar-brand" href="/public">Тестовое задание Junior php разработчик</a>
</nav>
<div class="container" style="margin-top: 30px">

	<?=$content?>

</div>
</body>
</html>