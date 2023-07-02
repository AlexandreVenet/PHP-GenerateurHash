<?php

$passe = '';
$hash = '';
$verification = '';

if(isset($_POST['passe']))
{
	$passe = $_POST['passe'];

	if(strlen($passe) > 0)
	{
		$hash = password_hash($passe, PASSWORD_DEFAULT);

		if(password_verify($passe,$hash))
		{
			$verification = 'Oui';
		}
		else
		{
			$verification = 'Non';
		}
	}
}

include 'layout.phtml';
