<?php

require_once __DIR__ . '/../boot.php';

$query = "SELECT firsName, lastName, city.city FROM user INNER JOIN city ON user.city = city.id;";

echo view('layout', [
	'title' => 'SQL-запрос',
	'content' => view('pages/query', [
		'textQuery' => $query
	]),
]);