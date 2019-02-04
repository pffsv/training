
<!-- 
44.Минипроект: гостевая книга	
Урок 2
По следующей ссылке находится архив: скачать. В данном архиве находится верстка гостевой книги с пагинацией сообщений. 
Ваша задача такая же - взять эту верстку и оживить ее на PHP.

Все должно работать аналогично предыдущей задаче, но для сообщений нужно реализовать пагинацию, пусть по 5 сообщений на странице.

Пагинация должна быть автоматической - то есть сама должна выводиться в зависимости от количества записей в базе данных.
	 
-->

<?php
	$host = 'localhost'; 
	$user = 'root'; 
	$password = ''; 
	$db_name = 'test';

	
	$link = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($link));

	
	//<!-- код пагинатора
	
	$count = 2; //кличество записей на страницу
	
	if(!empty($_GET['page'])) {
		$start = $_GET['page'] * $count;
	}
	else {
		$start = 0;
	}
	
	$countRec = "SELECT COUNT(id) AS count FROM records"; 
	$countRes =  mysqli_query($link, $countRec) or die(mysqli_error($link));
	$res = mysqli_fetch_assoc($countRes);
	$resZap =  $res['count'] / $count; // количество всех статей
	
	
	//--> код пагинатора
	
	
	mysqli_query($link, "SET NAMES 'utf8'");
	
	$allRecord = "SELECT * FROM `records` LIMIT " . $start.  ", " . $count;
	
	$result = mysqli_query($link, $allRecord) or die(mysqli_error($link));

		
	for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	

?>


<!DOCTYPE html>
<html>
	<head>
		<title>Гостевая книга</title>
		<meta charset="utf-8">
		
		<style>
			.main {
				width: 500px;
				margin: 0 auto;
				padding: 10px;
				box-sizing: border-box;
			}
			
			.data-name, .rec, .user-name, .user-text {
				margin-bottom: 10px;
			}
			
			.data {
				font-weight: bold;
			}
			
			.user-name, .user-text {
				width: 100%;
				padding: 10px;
				box-sizing: border-box;
				border: 1px solid #ccc;
				border-radius: 5px;
				box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
				font-size: 14px;
			}
			
			.user-text {
				min-height: 200px;
			}
			
			.btn-save {
				width: 100%;
				display: block;
				background-color: #5bc0de;
				border-color: #46b8da;
				color: white;
				padding: 6px 12px;
				border: 1px solid transparent;
				box-sizing: border-box;
				border-radius: 5px;
			}
			
			.message {
				color: #31708f;
				background-color: #d9edf7;
				border-color: #bce8f1;
				border-radius: 5px;
				padding: 15px;
				margin-bottom: 10px;
			}
		</style>
	</head>
	<body>
		<div class="main">
			<h1>Гостевая книга</h1>
			
			<div class="records">
				<?php
					foreach($data as $key) {
						echo '<div class="rec">';
						echo '<div class="data-name">';
							echo '<span class="data">'.date("d.m.Y G:i:s", strtotime($key['data'])).' </span>';
							echo '<span class="name">'.$key['name'].'</span>';
						echo '</div>';
						
						echo '<div class="text">';
							echo $key['text'];
						echo '</div>';
						
					echo '</div>';
					}
					
				?>
				
				<?php
				
				//<!-- код пагинатора
				$j = 1;
					for($i = 0; $i < $resZap; $i++) {
						if($_GET['page'] == $i) {
							echo '<span> '.$j.' </span>';
						}
						else {
							echo '<a href="?page='.$i.'">'.$j.'</a> ';
						}
						$j++;
					}
					
					//--> код пагинатора
				?>
				<br>
				<br>
				
			</div>
			
			
				<?php
					if(!empty($_POST['user-name']) && !empty($_POST['user-text'])) {
					
						$name = $_POST['user-name'];
						$text = $_POST['user-text'];
						$nowData = date("Y-m-d G:i:s");
				
						$sql = 'INSERT INTO `records` SET name="'.$name.'", text="'.$text.'", data="'.$nowData. '"';
						
						mysqli_query($link, $sql) or die(mysqli_error($link));
				
						echo '<div class="message">';
							echo 'Запись успешно сохранена!';
						echo '</div>';
					}
				?>
			
			
			
			<div class="add-record">
				<form action="" method="post">
					<?php
						if(!empty($_POST['btn-save']) && empty($_POST['user-name'])) {
							
								echo '<span style="color: red;">Введите имя</span><br>';
								echo '<input type="text" class="user-name" name="user-name" placeholder="Ваше имя">';
						}
						else {?>
							<input type="text" class="user-name" name="user-name" value="<?php if(!empty($_POST['user-name'])) echo $_POST['user-name'];?>" placeholder="Ваше имя">
						<?php	
						}
					?>
					
					<?php
						if(!empty($_POST['btn-save']) && empty($_POST['user-text'])) {
							
								echo '<span style="color: red;">Введите текст</span><br>';
								echo '<textarea  class="user-text" name="user-text" name="text" placeholder="Ваш отзыв"></textarea>';
							
						}
						else {?>
							<textarea  class="user-text" name="user-text" name="text" placeholder="Ваш отзыв"><?php if(!empty($_POST['user-text'])) echo $_POST['user-text'];?></textarea>
							<?php
						}
						
						
					?>
					
					<input type="submit" class="btn-save" name="btn-save" value="Сохранить">
				</form>
				
				
				
			</div>
			
			
		</div>
	</body> 
</html>

