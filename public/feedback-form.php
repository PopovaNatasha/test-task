<?php

require_once __DIR__ . '/../boot.php';

$errors = [];
$isSuccess = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
	if ($_POST['name'] === '' || $_POST['email'] === '' || $_POST['message'] === '')
	{
		$errors[] = 'Fill in all required fields';
	}
	elseif (!isEmail($_POST['email']))
	{
		$errors[] = 'Invalid email';
	}
	elseif ($_FILES['file']['name'] !== '')
	{
		if (!isAllowedExtension($_FILES['file']['name']))
		{
			$errors[] = 'Invalid file type';
		}
	}

	$tmpName = $_FILES['file']['tmp_name'];
	$feedback = createFeedback($_POST['name'], $_POST['email'], $_POST['message'], $_FILES['file']['name']);

	$result = saveFeedback($feedback, $tmpName);
	if (!$result)
	{
		$errors[] = 'Failed to save. Please try again';
	}
	$isSuccess = 'yes';
}

echo view('layout', [
	'title' => 'Обратная связь',
	'content' => view('pages/form', [
		'errors' => $errors,
		'isSuccess' => $isSuccess
	]),
]);