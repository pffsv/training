<?
  // получаем www-адрес (имя хоста) из url
  $url = "http://www.php.net/download.html";
  preg_match("/^(http:\/\/)?([^\/]+)/i", $url, $matches);
  $host = $matches[2];
  echo("www-адрес: $host");
  echo("<br>");
  // получаем последние два сегмента имени хоста (доменное имя)
  preg_match("/[^\.\/]+\.[^\.\/]+$/", $host, $matches);
  echo "доменное имя: {$matches[0]}\n";
?>