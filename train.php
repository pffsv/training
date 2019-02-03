<?php
//43.Практика PHP
/* 
1. Дана таблица с работниками. Реализуйте ее вывод на экран в следующем виде: 
*/ 
$host = 'localhost'; 
$user = 'root'; 
$password = ''; 
$db_name = 'test'; 


$link = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($link)); 


mysqli_query($link, "SET NAMES 'utf8'"); 


$query = "SELECT * FROM workers WHERE id > 0"; 

$result = mysqli_query($link, $query) or die(mysqli_error($link)); 


for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row); 

echo '<table border="1" width="50%" cellpadding="5" style="border-collapse: collapse; text-align: center;">'; 
echo '<tr>'; 
foreach($data[0] as $key => $val) { 
echo '<th>'.$key.'</th>'; 
} 
echo '</tr>'; 

foreach($data as $arr) { 
echo '<tr>'; 
foreach($arr as $k => $v) { 
echo '<td>'.$v.'</td>'; 
} 

echo '</tr>'; 
} 

echo '</table>' 
		
?>