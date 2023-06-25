<?php

function createFeedback(string $userName, string $email, string $message, string $filePath): array
{
	return [
		'name' => $userName,
		'email' => $email,
		'message' => $message,
		'file_path' => $filePath
	];
}

function saveFeedback(array $feedback, string $tmpName): bool
{
	if ($feedback['file_path'] !== '')
	{
		$result = saveFile($tmpName);
		if (!$result)
		{
			return false;
		}
	}

	$content = serialize($feedback);
	$fileName = uniqid() . '.txt';
	$filePath = ROOT . "/data/$fileName";

	return (bool)file_put_contents($filePath, $content);
}