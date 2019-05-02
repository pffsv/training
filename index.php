<?php
   function get_current_browser() {
      $browser = strtoupper($_SERVER['HTTP_USER_AGENT']); 
      if(strpos($browser, 'MSIE') !== false) $browser = 'Internet Explorer'; 
      elseif(strpos($browser, 'FIREFOX') !== false) $browser = 'Firefox';  
      elseif(strpos($browser, 'KONQUEROR') !== false) $browser = 'Konqueror';  
      elseif(strpos($browser, 'LYNX') !== false) $browser = 'Lynx'; 
      else { $browser = $_SERVER['HTTP_USER_AGENT'];} 
      return $browser;
   }
   get_current_browser(); 
?>