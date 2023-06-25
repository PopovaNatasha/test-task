<?php

function isEmail(string $email): bool
{
	return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function isAllowedExtension(string $file): bool
{
	$allowed_filetypes = array('jpg','png');
	$fileType = pathinfo($file, PATHINFO_EXTENSION);

	return in_array($fileType, $allowed_filetypes);
}