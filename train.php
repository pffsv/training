<?php 
session_start(); 
if (!empty($_SESSION['auth'])) { 
$_SESSION['auth'] = true; 
} 
else { 
$_SESSION['auth'] = null; 
} 
?> 
<!DOCTYPE html> 
<html> 
<head> 
<meta charset="utf-8"> 
<title>Учу PHP :)</title> 
<style> 
</style> 
</head> 
<body> 
<p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Integer imperdiet lectus quis justo...</p><br> 

<?php 
if (!empty($_SESSION['auth'])) { 
echo "<p style=\"color:blue\"> Maecenas aliquet accumsan leo. Class aptent taciti sociosqu ad litora torquent per conubia nostra... </p>"; 
echo 'Вы зашли на сайт как '.$_SESSION['login'].''; 
$personal = "<a href=\"personalArea.php\"> Личный кабинет </a>"; 
$exit = "<a href=\"logout.php\"> Завершить сессию </a>".'<br><br>'; 
} 
if (!empty($_SESSION['auth']) && $_SESSION['status'] == 'admin') { ?> 
<a href="admin.php"> Админка </a><br> 
<?php } 

else { 
echo "<p><i> Авторизируйтесь, чтобы увидеть продолжение статьи... </i></p> 
<a href=\"login.php\"> Авторизация </a> &nbsp&nbsp&nbsp <a href=\"register.php\"> Регистрация </a>".'<br><br>'; 
} 
echo $_SESSION['result']; 
unset($_SESSION['result']); 
?> 
<br> 
<?= $personal; ?> 
<br> 
<?= $exit; ?> 
</body> 
</html>