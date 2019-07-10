<?php
 
//Создадим массивы с данными
$m_1=["1", 2, "three"];
$m_2=["one"=>1, 3, "city", false];
$m_3=[1, 1, "orange"];
 
echo '-------- count() --------<br><br>';
 
//count() подсчитывает количество элементов массива или что-то в объекте 
//и возвращает полученное число
//Выведет int(3)
var_dump(count($m_1)); 
echo '<br>'; 
//Выведет int(4)
var_dump(count($m_2)); 
echo '<br><br><br>';
 
 
echo '-------- in_array() --------<br><br>';
 
//in_array() проверяет, присутствует ли значение в массиве, и в 
//случае успеха возвращает true, иначе false
//Выведет bool(true)
var_dump(in_array(1, $m_1));       
echo '<br>';
//Зададим строгое соответствие
//Выведет bool(false)
var_dump(in_array(1, $m_1, true)); 
echo '<br><br><br>';
 
 
echo '-------- array_key_exists(), см. также array_keys() --------<br><br>';
 
//array_key_exists() проверяет (не строго), присутствует ли в массиве  
//указанный ключ, и в случае успеха возвращает true, иначе false
//Выведет bool(true)
var_dump(array_key_exists(1, $m_1));   
echo '<br>';
//Выведет bool(true)
var_dump(array_key_exists('1', $m_1)); 
echo '<br>';
//Выведет bool(false)
var_dump(array_key_exists(3, $m_1));   
echo '<br><br><br>';
 
 
echo '-------- array_flip() --------<br><br>';
 
//array_flip() меняет местами ключи с их значениями в массиве и возвращает 
//перевернутый массив или   null в случае ошибки
//Выведет  array(3) {[1]=>int(0) [2]=>int(1) ["three"]=>int(2)}
var_dump(array_flip($m_1));
echo '<br><br><br>';
 
 
echo '-------- array_reverse() --------<br><br>';
 
//array_reverse() возвращает массив с элементами в обратном порядке
//Выведет array(3) {[0]=>string(5) "three" [1]=>int(2) [2]=>string(1) "1"}
var_dump(array_reverse($m_1));  
echo '<br><br><br>';
 
 
echo '-------- array_unique() --------<br><br>';
 
//array_unique() убирает повторяющиеся значения из массива 
//и возвращает отфильтрованный массив
//Выведет array(2) {[0]=>int(1) [2]=>string(6) "orange"}
var_dump(array_unique($m_3));  
echo '<br><br><br>';
 
 
echo '-------- array_unshift(), см. также array_shift() --------<br><br>';
 
//array_unshift() добавляет один или несколько элементов в начало массива  
//и возвращает новое количество элементов в массиве 
//Выведет int(3)
var_dump(array_unshift($m_1, 4, 5));  
echo '<br>';
//Выведет array(3) {[0]=>int(4) [1]=>int(5) [2]=>int(2)} 
var_dump($m_1); 
echo '<br><br><br>';
 
 
echo '-------- array_push(), см. также array_pop() --------<br><br>';
 
//array_push() добавляет один или несколько элементов в конец массива  
//и возвращает новое количество элементов в массиве 
//Выведет int(5)
var_dump(array_push($m_1, "apple", 7)); 
echo '<br>';
//array(5){[0]=>int(4) [1]=>int(5) [2]=>int(2) [3]=>string(5) "apple" 
//[4]=>int(7)} 
//Т.е. массив имеет вид [4,5,2,"apple",7]
var_dump($m_1); 
echo '<br><br><br>';
 
 
echo '-------- array_slice() --------<br><br>';
 
//array_slice() выбирает часть массива в соответствии 
//с указанными параметрами и возвращает ее (сам массив остается прежним)
//Выведет array(2) {[0]=>int(4) [1]=>int(5)}, т.е. [4,5]
//2 символа с начала
var_dump(array_slice($m_1, 0, 2)); 
echo '<br>';
//array(5) {[0]=> int(4) [1]=>int(5) [2]=>int(2) [3]=>string(5) "apple" 
//[4]=>int(7)}
//Выведет все элементы массива, т.к. их меньше
var_dump(array_slice($m_1, 0, 9)); 
echo '<br>';
//array(2) {[0]=>int(2) [1]=>string(5) "apple"}, т.е. [2, "apple"]
//2 символа начиная с 3 позиции с конца
var_dump(array_slice($m_1, -3, 2));   
echo '<br>';
//array(3) {[0]=>int(5) [1]=>int(2) [2]=>string(5) "apple"}, т.е. 
//[5, 2, "apple"]
//Отсчет с конца до -1 позиции 
var_dump(array_slice($m_1, -4, -1)); 
echo '<br><br><br>';
 
 
echo '-------- array_splice() --------<br><br>';
 
//array_splice() удаляет часть массива или заменяет её другими элементами  
//и возвращает массив, содержащий удалённые элементы 
$m_4=[1,2,3,4,5];
//Выведет array(3) {[0]=>int(2) [1]=>int(3) [2]=>int(4)}
//Теперь $m_4==[1,5]
var_dump(array_splice($m_4, 1, 3)); 
echo '<br>';
//Выведет array(1) {[0]=>int(5)} (один удалили, а 4 добавили)
//Теперь $m_4==[1,6,7,8,9]
var_dump(array_splice($m_4, -1, 1, [6,7,8,9])); 
echo '<br>';
//Выведет array(1) {[0]=> int(7)} (удалили 1 элемент с -3 по -2 не включая)
//Теперь $m_4==[1,6,9]
var_dump(array_splice($m_4, -3, -2)); 
echo '<br>';
//Выведет array(4) {[0]=>int(1) [1]=>int(6) [2]=>int(8) [3]=>int(9)} 
//Теперь $m_4==[] (удалили с 0 и до конца)
var_dump(array_splice($m_4, 0)); 
echo '<br><br><br>';
 
 
echo '-------- array_product(), см. также array_sum() --------<br><br>';
 
//array_product() возвращает произведение значений массива 
$m_5=[1,2,3];
//Выведет int(6)
var_dump(array_product($m_5)); 
echo '<br><br><br>';
 
 
echo '-------- array_rand(), см. также shuffle () --------<br><br>';
 
//array_rand() выбирает одно или несколько случайных значений 
//из массива и возвращает их ключи 
//Вывело int(0) (случайный ключ массива)
var_dump(array_rand($m_5)); 
echo '<br><br><br>';
 
 
echo '-------- list() --------<br><br>';
 
//list() языковая конструкция, которая присваивает переменным из списка    
//значения из массива за одну операцию; возвращает присвоенный массив 
$m_10=[1,4,7];
//Присвоим значения массива переменным
list($d_1, $d_2, $d_3)=$m_10; 
//Выведет int(1) int(4) int(7) 
var_dump($d_1, $d_2, $d_3); 
echo '<br>';
 
list($d_4, list($d_5, $d_6), $d_7) = [1, [7, 9], "yes"];
//Выведет int(1) int(7) int(9) string(3) "yes" 
var_dump($d_4, $d_5, $d_6, $d_7);
echo '<br><br><br>';
 
 
echo 'sort(), см. также rsort(), usort(), uasort(), ksort(),<br>'. 
     'krsort(), uksort(), asort(), arsort(), natsort(),<br>'.
     'natcasesort(), array_multisort() и др. <br><br>';
 
//sort() сортирует массив и в случае успеха возвращает true, иначе false 
$m_6=[7,3,6];
//Выведет bool(true)
var_dump(sort($m_6)); 
echo '<br>';
//Выведет array(3) {[0]=>int(3) [1]=>int(6) [2]=>int(7)} 
var_dump($m_6); 
echo '<br>';
 
$m_7=['Петя','Вася', 'вася'];
//Ключи сохраняются
var_dump(sort($m_7, true)); 
echo '<br>';
//Выведет array(3) {[0]=>string(8) "Вася" [1]=>string(8) "Петя" 
//[2]=>string(8) "вася"}
var_dump($m_7);
echo '<br><br><br>';
 
 
echo '-------- array_filter() --------<br><br>';
 
//array_filter() фильтрует элементы массива с помощью callback-функции и 
//возвращает отфильтрованный массив 
function my_func($val){
  return $val>5;
}
 
$m_8=[1,2,3,4,5,6,7];
 
//Выведет array(2) {[5]=>int(6) [6]=>int(7)} (передавали только значения)
var_dump(array_filter($m_8, "my_func")); 
echo '<br>';
//Выведет array(1) {[6]=>int(7)} (передавали только ключи)
var_dump(array_filter($m_8, "my_func", ARRAY_FILTER_USE_KEY)); 
echo '<br>';
 
function my_func_2($v, $k){
  return ($v+$k)>7;
}
 
//Выведет array(2) {[5]=>int(6) [6]=>int(7)} (передавали пары значение-ключ)
var_dump(array_filter($m_8, "my_func_2", ARRAY_FILTER_USE_BOTH)); 
echo '<br><br><br>';
 
 
echo 'array_walk(), см. также array_walk_recursive(), '. 
    'array_map(), array_reduce(),  <br><br>';
 
//array_walk() применяет заданную пользователем функцию к каждому элементу 
//массива и в случае успеха возвращает true, иначе false 
//Значение передали по ссылке (можно и по значению)
function my_func_3(&$v, $k){
  return $v=$v+$k;
}
 
$m_9=[1,2,3];
 
//Выведет bool(true) 
var_dump(array_walk($m_9, "my_func_3")); 
echo '<br>';
//Выведет array(3) {[0]=>int(1) [1]=>int(3) [2]=>int(5)}
var_dump($m_9); 
echo '<br><br><br>';
 
 
//Также посмотрите функции сравнения массивов и работы с несколькими 
//массивами: array_intersect() и похожие, array_diff() и похожие, 
//array_merge() и др.
 
?>
