<?php 
$local = 'localhost'; 
$user = 'root'; 
$password = ''; 
$db_base = 'test'; 

$connect = mysqli_connect($local, $user, $password, $db_base) or die (mysqli_error($connect)); 
mysqli_query($connect, "SET NAMES 'utf8'"); 

if (!empty($_POST['addLogin']) && !empty($_POST['addPassword'])) { 
$addLogin = $_POST['addLogin']; 
$addPassword = $_POST['addPassword']; 

$query = "INSERT INTO users SET login = '$addLogin', password = '$addPassword'"; 
$result = mysqli_query($connect, $query) or die (mysqli_error($connect)); 
} 
?> 

<form action="" method="POST"> 
<input name="addLogin" placeholder="enter login"> 
<input type="password" name="addPassword" placeholder="enter password"> 
<input type="submit"> 
</form>