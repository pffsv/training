<!--Реализуйте описанное добавление даты регистрации пользователя-->

<?php 
$local = 'localhost'; 
$user = 'root'; 
$password = ''; 
$db_base = 'test'; 

$connect = mysqli_connect($local, $user, $password, $db_base) or die (mysqli_error($connect)); 
mysqli_query($connect, "SET NAMES 'utf8'"); 

if (!empty($_POST['addLogin']) && !empty($_POST['addPassword']) && !empty($_POST['addBirthday']) && !empty($_POST['addEmail'])) { 
$addLogin = $_POST['addLogin']; 
$addPassword = $_POST['addPassword']; 
$addBirthday = $_POST['addBirthday']; 
$addEmail = $_POST['addEmail']; 

$date = date('Y-m-d'); 
$query = "INSERT INTO users SET 
login = '$addLogin', password = '$addPassword', birthday = '$addBirthday', email = '$addEmail' registration_date = '$date'"; 
$result = mysqli_query($connect, $query) or die (mysqli_error($connect)); 
} 
?> 

<form action="" method="POST"> 
<input name="addLogin" placeholder="enter login"> 
<input type="password" name="addPassword" placeholder="enter password"> 
<input name="addBirthday" placeholder="enter your date of birth"> 
<input name="addEmail" placeholder="enter your email"> 
<input type="submit"> 
</form>