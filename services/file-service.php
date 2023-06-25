<?php

function saveFile(string $tmpName): bool
{
	$fileName = $_FILES['file']['name'];
	$path = ROOT . "/upload/$fileName";

	return move_uploaded_file($tmpName, $path);
}