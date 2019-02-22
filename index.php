<?php 

// Определяем что такое машины, что она умеет делать и как.
class Car
{
    var $color = 'White';
    public $model = 'Honda';
    function tut_tut()    {  echo "BIp BIp";  }
}

$honda = new Car(); // присваиваем переменной honda объект - Машину
//echo '<p>' . $honda->color . '</p>'; // Выводим свойство машины - цвет 

?>

<p><?php echo $honda->model ?> is Japan car.<br>Ha har</p>
<p><?= $honda->model ?> is Japan car.<br>Ha har</p>
<p>Toyota is another Japan car</p>
