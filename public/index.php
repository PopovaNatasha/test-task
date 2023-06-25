<?php

require_once __DIR__ . '/../boot.php';

echo view('layout', [
	'title' => 'Тестовое задание',
	'content' => view('pages/index')
]);