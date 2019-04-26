<?
  $file_list = ftp_nlist($connect, ".");
  if(is_array($file_list))
  {
    foreach($file_list as $file)
    {
      echo("$file <br>");
    }
  }
?>