
Спросите у пользователя при регистрации еще и email. Занесите его в базу данных. Выполните проверку емейла на корректность и, если он некорректен, над соответствующим инпутом выведите сообщение об этом
<?php 
session_start(); 

$local = 'localhost'; 
$user = 'root'; 
$password = ''; 
$db_base = 'test'; 

$connect = mysqli_connect($local, $user, $password, $db_base) or die (mysqli_error($connect)); 
mysqli_query($connect, "SET NAMES 'utf8'"); 

$loginText = ''; 

if (!empty($_POST['addLogin']) && !empty($_POST['addPassword']) && !empty($_POST['confirm']) && !empty($_POST['addEmail'])) { 
if ($_POST['addPassword'] == $_POST['confirm']) { 
if (!empty(trim($_POST['addLogin'])) AND !empty(trim($_POST['addPassword'])) AND !empty(trim($_POST['confirm'])) AND !empty(trim($_POST['addEmail']))) { 
$regLogin = "#^[A-Za-z\d]+$#"; 
$regEmail = "#^[A-Za-z\d]+@[a-z]+\.[a-z]{2,}$#"; 
if (preg_match($regLogin, $_POST['addLogin'])) { 
if (strlen($_POST['addLogin']) >= 4 && strlen($_POST['addLogin']) <= 10) { 
if (strlen($_POST['addPassword']) >= 6 && strlen($_POST['addPassword']) <= 12) { 
if (preg_match($regEmail, $_POST['addEmail'])) { 
$addLogin = $_POST['addLogin']; 
$addPassword = $_POST['addPassword']; 
$addEmail = $_POST['addEmail']; 

$query = "SELECT * FROM users WHERE login = '$addLogin'"; 
$checkLogin = mysqli_query($connect, $query) or die (mysqli_error($connect)); 
$user = mysqli_fetch_assoc($checkLogin); 

if (empty($user)) { 
$date = date('Y-m-d'); 
$query = "INSERT INTO users SET login = '$addLogin', password = '$addPassword', email='$addEmail', registration_date = '$date'"; 
$result = mysqli_query($connect, $query) or die (mysqli_error($connect)); 

$_SESSION['auth'] = true; 
$_SESSION['login'] = $addLogin; 

$id = mysqli_insert_id($connect); 
$_SESSION['id'] = $id; 

header('Location: index.php'); 
} 
else { 
$loginText = "<p style=\"color:red\"> username already exists </p>"; 
} 
} 
else { 
$emailText = "<p style=\"color:red\"> enter the correct email </p>"; 
} 
} 
else { 
$passwordText = "<p style=\"color:red\"> Your password must contain from 6 to 12 characters </p>"; 
} 
} 
else { 
$loginText = "<p style=\"color:red\"> Your login must contain from 4 to 10 characters </p>"; 
} 
} 
else { 
$loginText = "<p style=\"color:red\"> Login can contain only Latin letters or numbers </p>"; 
} 
} 
else { 
$loginText = "<p style=\"color:red\"> Enter a valid username or password or email. Must not contain an empty string </p>"; 
} 
}
else { 
$passwordText = "<p style=\"color:red\"> enter the correct password </p>"; 
} 
} 
?> 
<form action="" method="POST"> 
<p> <?= $loginText; ?> </p> 
<input name="addLogin" placeholder="enter login" value="<?php if(!empty($_POST['addLogin'])) echo $_POST['addLogin']; ?>"> 
<p> <?= $passwordText ?> </p> 
<input type="password" name="addPassword" placeholder="enter password" value="<?php if(!empty($_POST['addPassword'])) echo $_POST['addPassword']; ?>"> 
<p> </p> 
<input type="password" name="confirm" placeholder="confirm your password" value="<?php if(!empty($_POST['confirm'])) echo $_POST['confirm']; ?>"> 
<p> <?= $emailText ?> </p> 
<input name="addEmail" placeholder="enter email" value="<?php if(!empty($_POST['addEmail'])) echo $_POST['addEmail']; ?>"><br><br> 
<input type="submit" value="Register"> 
</form>