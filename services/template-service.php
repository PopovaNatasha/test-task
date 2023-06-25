<?php

function view(string $path, array $variables = []): string
{
	$absolutePath = ROOT . "/views/$path.php";

	if (!file_exists($absolutePath))
	{
		throw new Exception('Template not found');
	}

	extract($variables);

	ob_start();
	require @$absolutePath;

	return ob_get_clean();
}