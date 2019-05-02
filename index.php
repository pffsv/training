<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <title>
         Регистрация
      </title>
   </head>
   <body>
<?php
   // Register
   
   // Подключение к "MySQL"-серверу
   // (с выводом ошибки в случае неудачи):
   mysql_connect("localhost", "root", "") or die(mysql_error); 
   
   // Подключение к базе данных "deskside"
   // (с выводом ошибки в случае неудачи):
   mysql_select_db("deskside") or die(mysql_error);
   
   // Запрос на получение списка всех пользователей из таблицы "users",
   // упорядоченного по возрастанию значений поля "id":
   $find_id_sql = mysql_query("SELECT * FROM users ORDER BY id ASC");
   
   $find_id_row = mysql_num_rows($find_id_sql);
   
   // Получение списка пользователей из таблицы "users",
   // чьи логины совпадают со значением, полученным в "POST"-запросе:
   $find_names = mysql_query("SELECT * FROM users "
                                ."WHERE login='"
                                .$_POST['login']."'");
   $find_row = mysql_num_rows($find_names);
   $id_counter = 1;

   // Вычисление последнего ID:
   while ($find_id_row = mysql_fetch_assoc($find_id_sql)){
      $id_counter += 1;
   }
   
   $user_already = false;   // Булевская переменная для сохранения результатов 
                            // проверки: есть ли уже такой пользователь, 
                            // с данным "login".
                            
   if ($_POST['register'])  // Если дан запрос именно что на регистрацию.
   {
      while($find_row == mysql_fetch_assoc($find_names))
      {
         // Поиск пользователя с данным "login".
         if ($find_row['login'] == $_POST['login']){ // Если нашёлся...
            $user_already = true;  // ...то отмечаем это как результат
            break; // ...и выходим из цикла.
         }
      }
      
      // Если пользователь с таким "login" уже есть.
      if($user_already){ // Уведомляем отправителя запроса об этом.
         echo "
              <p>
                 Такой пользователь уже есть. <br /> 
                 <a href=\"http://localhost/register.htm\">
                   Пройти регистрацию заново... 
                 </a>
              </p>
            "; 
      }
      
      else
      {
         // Если пользователя с таким "login" всё-таки нет, 
         // то регистрируем данный "login" для нового пользователя.
         
         // Проверка совпадения паролей:
         if ($_POST['password'] == $_POST['second_password'])
         {
            // Если совпали: 
            
            // 1. Хэширование пароля для базы данных.
            $md5_password = md5($_POST['password']); 
            
            // 2. Запрос "MySQL"-серверу на сохранение регистрационных данных
            // в соответствующую таблицу ("users"):
            mysql_query("INSERT INTO users "
            ."(`id`, `login`, `password`, `e-mail`, `name`) "
            ."VALUES ('"
            .$id_counter
            ."', '"
            .$_POST['login']
            ."', '"
            .$md5_password
            ."', '"
            .$_POST['e-mail']
            ."', '"
            .$_POST['name']
            ."')"); 
            
            // 3. Уведомляем отправителя запроса:
            echo "Регистрация проведена успешно.";
         }
         
         else
         {
            echo "
                  <p>
                    Ошибка регистрации: пароли не совпадают! <br /> 
                    <a href=\"http://localhost/register.htm\">
                        Пройти регистрацию заново...
                    </a>
                  </p>
                ";  

         }
      }
   }
   
   if ($_POST['register'])
   {
      // Если пользователь уже нажал кнопку "РЕГИСТРАЦИЯ", 
      // то зачем ему заново показывать форму?! 
   }
   
   else
   {
      // Если он уже кликнул, то мы не показываем форму, 
      // а выводим либо сообщение о подтверждении, либо об ошибке:
      echo '
      <form method=\"post\">
         <p>
            Логин: <input type=\"text\" name=\"login\" />
         </p>
         <p>
            Пароль: <input type=\"password\" name=\"password\">
         </p>
         <p>
            Пароль ещё раз: <input type=\"password\" name=\"second_password\" />
         </p>
         <p>
            E-mail: <input type=\"email\" name=\"e-mail\" />
         </p>
         <p>
            Ваше имя: <input type=\"text\" name=\"name\" />
         </p>
         <input type=\"submit\" name=\"register\" value=\"Зарегистрироваться\">
      </form>
      '; 
   }
?>
   </body>
</html>