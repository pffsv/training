<?php
//Строка - шаблон
$result = get_web_page( "https://ya.ru" );
if (($result['errno'] != 0 )||($result['http_code'] != 200))
    {
  echo $result['errmsg'];
  }
else
  {
  $page = $result['content'];
  echo $page;
  }
?>