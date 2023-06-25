<?php

require_once __DIR__ . '/../boot.php';

$sum = 0;

for ($n = 3; $n < 1000; $n++)
{
	if ($n % 3 === 0 || $n % 5 === 0)
	{
		$sum = $sum + $n;
	}
}

echo view('layout', [
	'title' => 'Сумма чисел',
	'content' => view('pages/number', [
		'result' => $sum
	]),
]);