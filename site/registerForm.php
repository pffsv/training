<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<title>Registration</title>
</head>
<body>
	
</body>
</html>

<?php include 'info.php'; ?>

<form action="register.php" method="POST">
		<?php
			if(!empty($fieldReg['emptyLogPass'])) {
				$mess = $fieldReg['emptyLogPass'];
				echo "<span{$mess['status']}>{$mess['text']}</span>";
				echo '<br>';
			}
		?>
	<label for="log">Enter your login:</label><br>
		<?php
			if(!empty($fieldReg['log'])) {
				$mess = $fieldReg['log'];
				echo "<span{$mess['status']}>{$mess['text']}</span>";
				echo '<br>';
			}
			if(!empty($fieldReg['busyLog'])) {
				$mess = $fieldReg['busyLog'];
				echo "<span{$mess['status']}>{$mess['text']}</span>";
				echo '<br>';
			}
		?>
	<input name="log" id="log" value="<?php if(isset($log)) echo $log; ?>"><br><br>

	<label for="pass">Enter your password:</label><br>
		<?php
			if(!empty($fieldReg['pass'])) {
				$mess = $fieldReg['pass'];
				echo "<span{$mess['status']}>{$mess['text']}</span>";
				echo '<br>';
			}
			if(!empty($fieldReg['confirm'])) {
				$mess = $fieldReg['confirm'];
				echo "<span{$mess['status']}>{$mess['text']}</span>";
				echo '<br>';
			}
		?>
	<input type="password" name="pass" id="pass"><br><br>

	<label for="pass">Confirm your password:</label><br>
	<input type="password" name="confirm" id="pass"><br><br>

	<label for="mail">Enter your e-mail:</label><br>
		<?php
			if(!empty($fieldReg['email'])) {
				$mess = $fieldReg['email'];
				echo "<span{$mess['status']}>{$mess['text']}</span>";
				echo '<br>';
			}
		?>
	<input type="email" name="email" value="<?php if(isset($email)) echo $email; ?>"><br><br>

	<label for="birth">Enter your birthday</label><br>
		<?php
			if(!empty($fieldReg['birthdate'])) {
				$mess = $fieldReg['birthdate'];
				echo "<span{$mess['status']}>{$mess['text']}</span>";
				echo '<br>';
			}
		?>
	<input name="birthdate" value="<?php if(isset($birthdate)) echo $birthdate; ?>" placeholder="01.02.1984"><br><br>
	<!-- <input type="date" name="birthdate" value="<?php if(isset($date)) echo $date; ?>"><br><br> -->

	<label for="country">Select your country of residence</label><br>
	<select name="country" id="country">
		<option value="Россия">Россия</option>
		<option value="Белорусия">Белорусия</option>
		<option value="Украина">Украина</option>
	</select><br><br>

	<input type="submit">
</form>