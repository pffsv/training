<?
   $msg = substr($HTTP_POST_VARS["msg"],0,1024);
   $msg = htmlspecialchars($msg);
   print "<P>".$msg."</P>\n";
?>