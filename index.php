<?
  $str = "May 15, 2003";
  $pattern = "/(\w+) (\d+), (\d+)/i";
  $replacement = "1 \${1} \$3";
  print preg_replace($pattern, $replacement, $str);

//Результат:
//1 May 2003

?>
