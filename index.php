<?php
 
//Запомнили предпочтения пользователя
//Поместили значения массива в куки на месяц
setcookie("menu['color']", "red", time()+60*60*24*30);  
setcookie("menu['width']", "200px", time()+60*60*24*30); 
setcookie("menu['height']", "300px", time()+60*60*24*30); 
 
//После перезагрузки страницы выведем все куки
if(isset($_COOKIE['menu'])) {  
   //Проще всего использовать цикл foreach
   echo "Выводим данные при помощи цикла foreach <br>";
  foreach ($_COOKIE['menu'] as $name => $value) {
        echo "{$name} : {$value} <br>";
    }
   
  //Однако можно использовать и цикл for
  echo "<br>Выводим данные при помощи цикла for <br>";
  //Для начала поместим имена ключей массива в отдельный массив
  $key_name=array_keys($_COOKIE['menu']);
  //Теперь выведем ключи массива и соответствующие им значения
  for($i=0; $i<count($_COOKIE['menu']); $i++) {
    //Здесь $key_name[$i] - имя i-го ключа массива $key_name
    echo "{$key_name[$i]}: {$_COOKIE['menu'][$key_name[$i]]} <br>";
    }
}
 
?>