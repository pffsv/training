<?php

$login = $_POST['login'];
$password = $_POST['password'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$middle_name = $_POST['middle_name'];
$email = $_POST['email'];

if (empty($login)) { // сравниваем $name с '', 0, null
	header('Location: index.php?login_is_empty=1', 301);
}

if (empty($password)) { // сравниваем $name с '', 0, null
	header('Location: index.php?password_is_empty=1', 301);
}

if (empty($first_name)) { // сравниваем $name с '', 0, null
	header('Location: index.php?first_name_is_empty=1', 301);
}

if (empty($last_name)) { // сравниваем $name с '', 0, null
    header('Location: index.php?last_name_is_empty=1', 301);
}

if (empty($middle_name)) { // сравниваем $name с '', 0, null
}

if (empty($email)) { // сравниваем $name с '', 0, null
	header('Location: index.php?email_is_empty=1', 301);
}

// echo '<p>Your Login is ' . $login . '</p>';
// echo '<p>Your password is ' . $password . '</p>';
// echo '<p>Your first_name is ' . $first_name . '</p>';
// echo '<p>Your last_name is ' . $last_name . '</p>';
// echo '<p>Your middle_name is ' . $middle_name . '</p>';
// echo '<p>Your email is ' . $email . '</p>';

$user = [
	'login' => $login,
	'password' => $password,
	'first_name' => $first_name,
	'last_name' => $last_name,
	'middle_name' => $middle_name,
	'email' => $email,
];

foreach ($user as $key => $value) {
	echo '<p>Your ' . $key . ' is ' . $value . '</p>';
}


// echo '<p>' . $user['password'] . '</p>';
// echo '<p>' . $user['first_name'] . '</p>';
// echo '<p>' . $user['last_name'] . '</p>';
// echo '<p>' . $user['middle_name'] . '</p>';
// echo '<p>' . $user['email'] . '</p>';

?>

<a href="index.php">Go back</a>