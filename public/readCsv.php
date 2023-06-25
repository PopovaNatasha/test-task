<?php

require_once __DIR__ . '/../boot.php';

$fileContent = [];

$handle = fopen(ROOT . '/upload/username.csv', 'r');
while (($line = fgetcsv($handle, 0, ';')) !== FALSE)
{
	$fileContent[] = $line;
}
fclose($handle);

echo view('layout', [
	'title' => 'Таблица из csv файла',
	'content' => view('pages/table', [
		'arResult' => $fileContent
	]),
]);