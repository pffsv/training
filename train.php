<?php 
error_reporting(E_ALL); 
ini_set('display_errors', 'on'); 

$host = 'localhost'; 
$user = 'root'; 
$password = ''; 
$dbName = 'test'; 
$link = mysqli_connect($host, $user, $password, $dbName); 
mysqli_query($link, "SET NAMES 'utf-8'"); 

session_start(); 

if(!empty($_POST['log']) and !empty($_POST['pass'])) { 

$log = $_POST['log']; 
$pass = $_POST['pass']; 
$email = $_POST['email']; 
$birthdate = $_POST['birthdate']; 
$date = date('Y-m-d'); 

if($_POST['pass'] == $_POST['confirm']) { 

$query = "SELECT * FROM users WHERE login = '$log'"; 
$user = mysqli_fetch_assoc(mysqli_query($link, $query)); 

if(empty($user)) { 

$query = "INSERT INTO users (login, pass, email, birthdate, registration_date) VALUES ('$log', '$pass', '$email', '$birthdate', '$date')"; 
mysqli_query($link, $query) or die(mysqli_error($link)); 

$_SESSION['auth'] = true; 
$_SESSION['logName'] = $log; 

$id = mysqli_insert_id($link); 
$_SESSION['id'] = $id; 

header('Location: /index.php'); 
} else { 
echo 'This login is busy. Try again.'; 
include 'registerForm.php'; 
} 


} else { 
echo 'Password does not match confirmation. Try again.'; 
include 'registerForm.php'; 
} 

} else { 

//include 'registerForm.php'; 
} 
?>