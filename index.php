<?
  function degree($x,$y)
  {
    if($y)
    {
      return $x*degree($x,$y-1);
    }
    return 1;
  }
  echo(degree(2,4)); // выводит 16
?o("<br>$var"); // выводит 10 (глобальная переменная)
?>