<?
  $pasv_flag = true;
  $pasv_result = $pasv_flag ? "enabled" : "disabled";
  ftp_pasv($connect, $pasv_flag);
?>