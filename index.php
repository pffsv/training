<?php
$destination = "New York";
echo "Отправляемся в $destination<br />";
switch ($destination){
  case "Las Vegas":
    echo "Берем с собой $5000! Вегас детка!";
    break;
  case "Amsterdam":
    echo "Парочка газет, фольга...";
    break;  
  case "Egypt":
    echo "50 бутылок солнцезащитного крема.";
    break;  
  case "Tokyo":
    echo "Берем деньги на сувениры.";
    break;
  case "Caribbean Islands":
    echo "Захватите трусы для плавания!";
    break;  
  default:
    echo "Бельишко чистое не забудьте!";
    break;
?>