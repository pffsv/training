<!-- 
	Сделал все задания в одном файле.
	
	 3. Сделайте форму добавления нового работника.

	 4. Сделайте колонку 'редактировать' для каждого работника. Там должна быть ссылка, по переходу на которую появится страница с формой редактирования работника.

	 5. Над таблицей с работниками сделайте инпут, в который вводится зарплата. По нажатию на кнопку следует вывести таблицу работников с введенной зарплатой.

	 7. Сделайте колонку 'удалить', в которой для каждого работника будет стоять чекбокс. Под таблицей сделайте кнопку, по нажатию на которую будут удалены те работники, для которых чекбокс был отмечен.
	 
	 У тебя 6 задание, то же, что и 5
-->

<?php
	$host = 'localhost'; 
	$user = 'root'; 
	$password = ''; 
	$db_name = 'test';

	
	$link = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($link));

	
	mysqli_query($link, "SET NAMES 'utf8'");
?>



<form action="" method="get">
	<label>Искать работника, с зарплатой <input type="text" name="user-salary"></label>
	<input type="submit" value="Найти" name="search">
</form>

<?php
	if(!empty($_GET['user-salary'])) {
	
		$query = "SELECT * FROM `workers` WHERE salary =" . $_GET['user-salary'];
		
		$result = mysqli_query($link, $query) or die(mysqli_error($link));

		
		for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
		
		if(count($data) == 0) {
			echo 'Работника с такой зарплатой, не существует';
		}
		
		else {
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
			
		echo '</table>';
		}
		
		echo '<br><br>';
	}
?>

<hr>

<?php
		
		$query = "SELECT * FROM workers WHERE id > 0";
	
		$result = mysqli_query($link, $query) or die(mysqli_error($link));

		
		for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
		
		
		echo '<form action="" method="post">';
		
		echo '<table border="1" width="50%" cellpadding="5" style="border-collapse: collapse; text-align: center;">';
			echo '<tr>';
			foreach($data[0] as $key => $val) {
				echo '<th>'.$key.'</th>';
			}
			
			echo '<th colspan="3">действие</th>';
			echo '</tr>';
			
			foreach($data as $arr) {
				echo '<tr>';
				foreach($arr as $k => $v) {
					echo '<td>'.$v.'</td>';
				}
				
				echo '<td><a href="?del='.$arr['id'].'">удалить</a></td>';
				echo '<td><a href="?red='.$arr['id'].'">редактировать</a></td>';
				echo '<td><input type="checkbox" name="user[]" value="'.$arr['id'].'"></td>';
				
				echo '</tr>';
			}
			
		echo '</table><br>';
		
		echo '<input type="submit" name="del-several-user" value="Удалить отмеченых работников">';
		
		echo '</form>';
		
		
		if(!empty($_POST['del-several-user'])) {
			array_pop($_POST);
			
			$str = implode(', ', $_POST['user']);
			
			$delUser = "DELETE FROM `workers` WHERE id IN (".$str.")";
			
			mysqli_query($link, $delUser) or die(mysqli_error($link));
			
			header('Location: '.$_SERVER['PHP_SELF']);
		}
		
		
		if(!empty($_GET['del'])) {
			$queryDelUser = "DELETE FROM `workers` WHERE id = ".$_GET['del'];
			
			mysqli_query($link, $queryDelUser) or die(mysqli_error($link));
			
			header('Location: '.$_SERVER['PHP_SELF']);
		}
		
		
		if(!empty($_GET['showaddform'])) {
			echo '<br>';
			echo '<form method="POST" action="" name="new-rab">';?>
				<label>Имя: <input type="text" name="worker" value="<?php if(!empty($_POST['worker'])) echo $_POST['worker'];?>"></label><br>
				<label>Возраст: <input type="text" name="age" value="<?php if(!empty($_POST['age'])) echo $_POST['age'];?>"></label><br>
				<label>Зарплата: <input type="text" name="salary" value="<?php if(!empty($_POST['salary'])) echo $_POST['salary'];?>"></label><br>
				<br>
				<input type="submit" value="Отправить" name="btn-add-worker">
				&nbsp &nbsp &nbsp
				<a href="<?php echo $_SERVER['PHP_SELF']?>">Вернутья назад</a>
			</form>
		<?php
		}
		
		
		else {
			echo '<br>';
			echo '<a href="'.$_SERVER['PHP_SELF'].'/?showaddform=ok">Добавить нового работника</a>';
		}
		
		if(!empty($_POST['btn-add-worker'])) {
		
			if(empty($_POST['worker']))	echo '<p style="color: red; font-weight: bold;">Введите имя</p>';
			
			if(empty($_POST['age']))	echo '<p style="color: red; font-weight: bold;">Введите возраст</p>';
			
			if(empty($_POST['salary'])) echo '<p style="color: red; font-weight: bold;">Введите зарплату</p>';
			
			
			else {
				$name = $_POST['worker'];
				$age = $_POST['age'];
				$salary = $_POST['salary'];
				
				$newWorker = 'INSERT INTO `workers` SET name="'.$name.'", age="'.$age.'", salary="'.$salary. '"';
				
				mysqli_query($link, $newWorker) or die(mysqli_error($link));
				
				header('Location: '.$_SERVER['PHP_SELF']);
			}
		
		}
		
		
		
		
		if(!empty($_GET['red'])) {
			
			$infoUser = "SELECT * FROM `workers` WHERE id =".$_GET['red'];
			$result = mysqli_query($link, $infoUser) or die(mysqli_error($link));
			
			$res = mysqli_fetch_assoc($result);
			
			echo '<br><br>';
			
			echo '<div style="border: 1px solid; width: 500px;">';
			
			echo 'Редактирование работника';
			
			echo '<br><br>';
			
			echo '<form method="POST" action="" name="new-rab">';?>
				<label>Имя: <input type="text" name="worker" value="<?php echo $res['name'];?>"></label><br>
				<label>Возраст: <input type="text" name="age" value="<?php echo $res['age'];?>"></label><br>
				<label>Зарплата: <input type="text" name="salary" value="<?php echo $res['salary'];?>"></label><br>
				<br>
				<input type="submit" value="Отправить" name="btn-red-worker">
				&nbsp &nbsp &nbsp
				<a href="<?php echo $_SERVER['PHP_SELF']?>">Вернутья назад</a>
			</form>
			
			<div>
		<?php
		}
		
		
		if(!empty($_POST['btn-red-worker'])) {
		
			if(empty($_POST['worker']))	echo '<p style="color: red; font-weight: bold;">Введите имя</p>';
			
			if(empty($_POST['age']))	echo '<p style="color: red; font-weight: bold;">Введите возраст</p>';
			
			if(empty($_POST['salary'])) echo '<p style="color: red; font-weight: bold;">Введите зарплату</p>';
			
			
			else {
				$id = $res['id'];
				$name = $_POST['worker'];
				$age = $_POST['age'];
				$salary = $_POST['salary'];
				
				$newWorker = 'UPDATE `workers` SET name="'.$name.'", age="'.$age.'", salary="'.$salary. '" WHERE id =' . $id;
				
				mysqli_query($link, $newWorker) or die(mysqli_error($link));
				
				header('Location: '.$_SERVER['PHP_SELF']);
			}
		
		}
		
		
?>

