<?php
//Оформим аргументы, которые необходимо передать конструктору 
//mysqli::__construct, в виде переменных
 
//Имя хоста задаем как "localhost", хотя можем входить с любого компьютера
$servername = "localhost";
//Входим под именем администратора  
$username = "administrator"; 
//Не забываем про пароль
$password = "12345";
//Указываем базу данных, к которой будем  подключаться
$db_name = "belarusweb_users";
//Создаем объект соединения с MySQL 
$conn = new mysqli ($servername, $username, $password, $db_name);
 
//Если произойдет ошибка соединения, то выведем строку с описанием последней 
//ошибки подключения, использовав свойство объекта mysqli->connect_error 
//и прервем скрипт
if ($conn->connect_error){   
  //Функция die() выводит сообщение и прекращает выполнение текущего скрипта
  echo "Ошибка соединения с сервером MySQL: ".$conn->connect_error."<br>";
  //Функция die() выводит сообщение и прекращает выполнение текущего скрипта  
  die("Соединение установлено не было.");
}
//Установим кодировку данных для данного соединения с MySQL, 
//чтобы русские символы правильно отображались в базе.
$conn->set_charset("utf8"); 
 
//Чтобы не использовать повторно большие куски кода, оформим класс 
class sql_msg{
  //Статический метод можно будет вызывать без создания объекта
  public static function result($sql){
    //Будем использовать глобальную переменную
    global $conn;
    //Выполняем запрос и если он прошел успешно, сообщаем об успехе
    if($conn->query($sql) === true){
      echo "Операция успешно выполнена.<br>";     
    }else{
      //Прекращаем выполнение скрипта и выводим строку с описанием ошибки
      echo "Ошибка операции: ".$conn->error.".";   
    }
  }
}
 
//В первых скобках перечисляем имена столбцов, 
//во вторых - соответствующие значения
//Порядок столбцов может быть любым, но тогда нужно поменять и 
//порядок соответствующих им значений. Количество значений должно 
//быть равным количеству столбцов
$sql_1 = "INSERT INTO our_users(first_name, last_name, age, sex, reg_mail)
      values('Сергей', 'Петров', 30, 'мужской', 'my_mail_1@tut.by')";   
//Выполняем запрос и если он прошел успешно, сообщаем об успехе
sql_msg::result($sql_1);
 
$sql_2 = "INSERT INTO our_users(first_name, last_name, age, sex, reg_mail)
      values('Сергей', 'Иванов', 33, 'мужской', 'my_mail_3@tut.by')"; 
sql_msg::result($sql_2);
 
$sql_3 = "INSERT INTO our_users(first_name, last_name, age, sex, reg_mail)
      values('Иван', 'Иванов', 23, 'мужской', 'my_mail_21@tut.by')"; 
sql_msg::result($sql_3);
 
$sql_4 = "INSERT INTO our_users(first_name, last_name, age, sex, reg_mail)
      values('Елена', 'Сидорова', 23, 'женский', 'my_mail_10@tut.by')"; 
sql_msg::result($sql_4);
 
$sql_5 = "INSERT INTO our_users(first_name, last_name, age, sex, reg_mail)
      values('Наталья', 'Осипович', 44, 'женский', 'my_mail_15@tut.by')"; 
sql_msg::result($sql_5);
 
//Т.к. больше соединение нам пока не нужно, закрываем его
$conn->close();   
?>

