<?
   $action = $HTTP_POST_VARS["action"];
   if ( empty($action) )
   {
   ?>
      <HTML>
      <HEAD>
      <TITLE>Примерчик</TITLE>
      </HEAD>
      <BODY>
      <center>
      <table width=1 border=0>
      <form action=test1.php method=post>
         <input type=hidden name=action value=post>
         <tr><td colspan=2>Сообщение<br><textarea cols=50 rows=8 name=msg>
         <? echo $msg; ?>
         </textarea></td></tr>
         <tr><td colspan=2><input type=submit value='Добавить'></td></tr>
      </form>
      </table>
      </center>
      </BODY>
      </HTML>
   <?
   }
?>