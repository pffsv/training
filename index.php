<?php

// Заметьте: Нет команд "echo" -- 
//              эту команду можно использовать 
//              только после того, как отправились все "куки".   
//
// P.S.: Если на странице используются "куки" -- 
//          лучше не использовать кодировку "UTF-8".

session_start();
        // Если пользователь кликнул "Выход":
    if ($_POST['exit']){    
            // ...то чистим "куки" 
            // о его авторизации и логине:
      unset($_COOKIE['user_enter']);
      unset($_COOKIE['user_login']);  
    }

// Подключение к "MySQL"-серверу:
//   localhost  - стандартный адрес сервера баз данных, 
//                      если тот запущен на локальном компьютере;   
//   root       - логин для пользователя "MySQL";
//   1234       - пароль для пользователя "MySQL".
mysql_connect("localhost", "root", "1234") or die(mysql_error);    

// Подключение к базе данных:
mysql_select_db("base") or die(mysql_error); // где "base" - имя базы данных.

$check_password = mysql_query("SELECT * FROM `base`.`users`"
    ."WHERE (login='"
    .$_POST['login']
    ."')"); // "SQL"-запрос для проверки пароля.
    
$row_check_password = mysql_num_rows($check_password);

// Получение данных о пользователе:
while($row_check_password = mysql_fetch_assoc($check_password)){  
    // ID пользователя: 
  $table['id'] = $row_check_password['id']; 
  
  // Логин пользователя:
  $table['login'] = $row_check_password['login']; 
  
  // Пароль (в зашифрованном виде) пользователя:
  $table['password'] = $row_check_password['password'];
  
  // Имя блога пользователя:
  $table['blog_name'] = $row_check_password['blog_name'];
}

// Проверка паролей:
if ($_POST['enter']){
    // Хеширование пользовательского пароля:
  $md5_password = md5($_POST['password']);
  
    // Если хеш пароля, введённого пользователем, и логин 
    // совпадают с хешем пароля и с логином из базы данных:
  if ($md5_password == $table['password'] 
      && $_POST['login'] == $table['login']){ 
    // Пользователь вошёл в систему:
    setcookie("user_enter", true); // "Кука": пользователь авторизировался.
    setcookie("user_login", $_POST['login']); // "Кука": логин.
    setcookie("user_blog", $table['blog_name']); // "Кука": имя блога.
  }else{  
    // Пароль не подтвердился:
    setcookie("user_login", "no_enter"); // "Кука": Логин "не вошёл".
    setcookie("user_enter", false); // "Кука": Пользователь не вошёл.
  }
}

    // Перенаправление на главную страницу:
    header('Location: http://deskside/main.php?page=home'); 
?>