<?
  function my_htmlspecialchats($document)
  {
    $search = array ("']*?>.*?'si",  
                     "'<[\/\!]*?[^<>]*?>'si",           
                     "'([\r\n])[\s]+'",                 
                     "'&(quot|#34);'i",                 
                     "'&(amp|#38);'i",
                     "'&(lt|#60);'i",
                     "'&(gt|#62);'i",
                     "'&(nbsp|#160);'i",
                     "'&(iexcl|#161);'i",
                     "'&(cent|#162);'i",
                     "'&(pound|#163);'i",
                     "'&(copy|#169);'i",
                     "'&#(\d+);'e");
    $replace = array ("",
                      "",
                      "\\1",
                      "\"",
                      "&",
                      "<",
                      ">",
                      " ",
                      chr(161),
                      chr(162),
                      chr(163),
                      chr(169),
                      "chr(\\1)");
    $text = preg_replace ($search, $replace, $document);
    return $text;
  }
  $doc = "alert;"; // напишем java-скрипт
  my_htmlspecialchats($doc);  // выводит "alert;"
  echo($doc);
?>