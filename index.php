<?
  function fact($x)
  {
    for ($result = 1; $x > 1; --$x)
    {
      $result *= $x;
    }
    return $result;
  }
  echo (fact(6)); // выводит 720
?>
