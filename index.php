<?
  function delTemporaryFiles ($directory)
  {
  $dir = opendir ($directory);
  while (( $file = readdir ($dir)))
  {
    if( is_file ($directory."/".$file))
    {
      $acc_time = fileatime ($directory."/".$file);
      $time =  time();
      if (($time - $acc_time) > 24*60*60)
      {
        if (  unlink ($directory."/".$file))
        {
          echo ("Файлы успешно удалены");
        }
      }
    }
    else if ( is_dir ($directory."/".$file) && ($file != ".") && ($file != ".."))
    {
      delTemporaryFiles ($directory."/".$file);
    }
  }
  closedir ($dir);
  }
  delTemporaryFiles ("c:/temp");
?>