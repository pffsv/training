<?php
function mySum($numX, $numY){
    $total = $numX + $numY;
    return $total; 
}
$myNumber = 0;
echo "Перед использованием функции, myNumber = ". $myNumber ."<br />";
$myNumber = mySum(3, 4); // Сохраняем результат вызова функции mySum в переменную $myNumber
echo "После вызова функции, myNumber = " . $myNumber ."<br />";
?>