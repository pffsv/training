<?php
	session_start();

	$_SESSION['auth'] = null;
	$_SESSION['mess'] = [
		'text' => 'You have ceased to be authorized'
	];

	header('Location: index.php');
?>