<?php
 
//Создадим несколько переменных разных типов
$var_int=15;
$var_float=23.57;
$var_str="apple";
$var_m=["name"=>"Dima", 11];
$var_bool=true;
$var_null=null;
 
 
echo '-------- var_dump() -------- <br><br>';
 
//var_dump() выводит информацию о переменных и не возвращает значения 
//Выведет int(15) float(23.57) string(5) "apple" bool(true) NULL
var_dump($var_int, $var_float, $var_str, $var_bool, $var_null);
echo '<br>';
//Выведет array(2) { ["name"]=> string(4) "Dima" [0]=> int(11) }
var_dump($var_m); 
echo '<br><br><br>';
 
 
echo '-------- print_r() --------<br><br>';
 
//print_r() выводит удобочитаемую информацию о переменной
//Выведет 23.57
print_r($var_float); 
echo '<br>';
//Выведет apple
print_r($var_str);   
echo '<br>';
//Выведет Array ( [name] => Dima [0] => 11 )
print_r($var_m);      
echo '<br><br><br>';
 
 
echo '-------- is_int(), is_array(), is_bool() и т.д. --------<br><br>';
 
//is_int(), is_array(), is_bool() и аналогичные функции проверяют, относится
//ли переменная к данному типу. В случае успеха возвращает true, иначе false
//Выведет bool(true)
var_dump(is_int($var_int));    
echo '<br>';
//Выведет bool(false)
var_dump(is_string($var_int)); 
echo '<br>';
//Выведет bool(true)
var_dump(is_null($var_null));  
echo '<br><br><br>';
 
 
echo '-------- gettype() --------<br><br>';
 
//gettype() возвращает тип переменной: "boolen", "integer", "double", 
//"string", "array", "object", "resource", "NULL", "unknown type",
//Выведет integer
echo gettype($var_int).'<br>';       
//Выведет array
echo gettype($var_m).'<br><br><br>'; 
 
 
echo '-------- settype() --------<br><br>';
 
//settype() присваивает переменной новый тип,
//можно применять bool, int, float, string, array, object, null
//Выведет bool(true), преобразов. успешно
var_dump(settype($var_int, "string"));
echo '<br>';
//Выведет bool(true), преобразов. успешно
var_dump(settype($var_float, "bool"));
echo '<br><br><br>';
 
 
echo '-------- boolval() и аналогичные:<br><br>';
 
//boolval() возвращает логическое значение переменной  
//Также имеются функции strval(), intval(), floatval() 
//Выведет bool(true)
var_dump(boolval($var_str));  
echo '<br>';
//Выведет bool(false)
var_dump(boolval($var_null)); 
echo '<br><br><br>';
 
 
echo '-------- empty() -------- <br><br>';
 
//empty() проверяет, пуста ли переменная (переменная считается пустой, 
//если она не существует или её значение равно FALSE;
//Выведет bool(true), т.к. она еще не существует
var_dump(empty($a)); 
$a;
//Выведет bool(true), т.к. она еще не инициализирована
var_dump(empty($a)); 
$a=false;
//Выведет bool(true), т.к. false
var_dump(empty($a)); 
$a=null;
//Выведет bool(true), т.к. null
var_dump(empty($a)); 
echo '<br>';
//Во всех остальных случаях переменная считается не пустой и вернет false
//Выведет bool(false)
var_dump(empty($var_int)); 
//Выведет bool(false)
var_dump(empty($var_m));   
echo '<br><br><br>';
 
 
echo '-------- isset() -------- <br><br>';
 
//isset() определяет, была ли установлена переменная значением отличным 
//от NULL. Возвращает TRUE в случае успеха и FALSE в противном случае
//Выведет bool(false), т.к. она еще не существует
var_dump(isset($b)); 
$b;
//Выведет bool(false), т.к. она еще не инициализирована
var_dump(isset($b)); 
$b=null;
//Выведет bool(false), т.к. null
var_dump(isset($b)); 
echo '<br>';
//Во всех остальных случаях переменная считается установленной и вернет true
$b=false;
//Выведет bool(true)
var_dump(isset($b)); 
$b='';
//Выведет bool(true)
var_dump(isset($b)); 
$b=0;
//Выведет bool(true)
var_dump(isset($b)); 
$b=[];
//Выведет bool(true)
var_dump(isset($b)); 
echo '<br><br><br>';
 
 
echo '-------- unset() -------- <br><br>';
 
//unset() удаляет указанные переменные и не возвращает значения
unset($var_int, $var_m); 
//Тут выведет bool(true)
var_dump(empty($var_int)); 
//Тут выведет bool(true)
var_dump(empty($var_m));   
 
?>