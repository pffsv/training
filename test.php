<?php
/*
	session_start(); 
	if(isset($_SESSION['test'])) { 
	echo $_SESSION['test']; 
	}
*/

	session_start(); 

	if (isset($_SESSION['country'])) { 
	echo 'Ваша страна: '.$_SESSION['country']; 
	}


	session_start(); 
?> 

<?php 
session_start(); 
?> 
<form method="get" accept-charset="utf-8"> 
<p>Имя: <input type="text" name="name"></p> 
<p>Пароль: <input type="text" name="password"></p> 
<p>E-mail: <input type="text" name="email" value="<?php if(isset($_SESSION['email'])): echo $_SESSION['email']; endif; ?>"></p> 
