<HTML>
  <HEAD>
  <TITLE>Гостевая книга</TITLE>
  </HEAD>
  <BODY>
  <?
  /* открываем директорию и считываем из нее файлы */
  $dir_rec = dir("records");
  $i = 0;
  while($entry = $dir_rec->read())
  {
    if (substr($entry,0,3)=="rec")
    {
      $names[$i]=substr($entry,4);
      $i++;
    }
  }
  $dir_rec->close(); // закрываем директорию
  @rsort($names); // сортируем файлы
  /* определяем очередность сообщений и выводим их */
  $count = $i;
  $count1 = $count;
  if (empty($start))
  {
    $start = 0;
  }
  $start = intval($start);
  if ($start < 0)
  {
    $start = 0;
  }
  print "<center>";
  if ($count > $start + 10) $count = $start + 10;
  if ($start != 0)
  {
    print "<A href=index.php?start=".($start - 10).">Предыдущие</A>";
  }
  print "<a href=addrec.php>Добавить запись</A>";
  if ($count1 > $start + 10)
  {
    print "<A href=index.php?start=".($start + 10).">Следующие</A> \n";
  }
  print "</center><br>";
  /* выводим все сообщения в цикле */
  for ($i = $start; $i < $count; $i++)
  {
    $entry = $names[$i];
    $data = file("records/rec.".$entry);
    $date = $entry;
    $name = trim($data[0]);
    $city = trim($data[1]);
    $email = trim($data[2]);
    $url = trim($data[3]);
    $msg = trim($data[4]);
    /* поле, в которое администратор может добавить ответ */
    $answer = trim($data[5]);
    print "<table border=0 cellspacing=0 cellpadding=2 width=100%>
    <tr bgcolor=#F0F0F0><td>&nbsр;";
    print "<b>$name</b>&nbsр;";
    if (!empty($city)) print "$city&nbsр";
    if (!empty($email)) print "<a href=mailto:$email><i>$email</i></A>\n";
    if (!empty($url)) print "<a href=$url>$url</a>";
    print "</td><td align=right>".date("<b>d-m-Y</b> H - i, $date)."
    </td></tr>\n<tr><td colspan=2>\n";
    print "<P>".$msg."</P>\n";
    if (!empty($answer)) // если администратор что-то ответил
    {
      print "<P><font color=#1E90FF>admin:&nbsр$answer</font></P>\n";
    }   
    print "</td></tr></table>\n<br><br>\n";
  }
  print "<center>";
  if ($start != 0)
  {
    print "<A href=index.php?start=".($start - 10).">Предыдущие</A>";
  }
  print "<a href=addrec.php>Добавить запись</A>";
  if ($count1 > $start + 10)
  {
    print "<A href=index.php?start=".($start + 10).">Следующие</A> \n";
  }
  print "</center>";
  ?>
  </BODY>
  </HTML>