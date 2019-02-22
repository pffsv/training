
<html>
<head>
  <meta charset="utf-8"></head>
  <body>
    <form action="post.php" method="post">
      <p>
        <strong>Login*</strong>       
        <input name="login">
      </p>
      
      <p>
        <strong>Password*</strong>    
        <input type="password" name="password"/>
      </p>
      
      <p>
        <strong>First name*</strong>   
        <input type="text" name="first_name" />
      </p>  
      
      <p>
        <strong>Last name*</strong>    
        <input type="text" name="last_name" />
      </p> 
        
      <p>
        <strong>Middle name</strong> 
        <input type="text" name="middle_name" />
      </p> 

      <p>
        <strong>email*</strong>       
        <input type="text" name="email" />
      </p>

      
      <p><input type="submit" /></p>
  </form>
<?php

$Login_is_empty = $_GET['login_is_empty'];
if ($Login_is_empty) {
  echo '<p style="color: red;">login is required</p>';
}

$Password_is_empty = $_GET['password_is_empty'];
if ($Password_is_empty) {
  echo '<p style="color: red;">password is required</p>';
}

$First_name_is_empty = $_GET['first_name_is_empty'];
if ($First_name_is_empty) {
	echo '<p style="color: red;">first_name is required</p>';
}

$Last_name_is_empty = $_GET['last_name_is_empty'];
if ($Last_name_is_empty) {
	echo '<p style="color: red;">last_name is required</p>';	
}

$Middle_name_is_empty = $_GET['middle_name_is_empty'];
if ($Middle_name_is_empty) {
	echo '<p style="color: red;">middle_name is required</p>';	
}

$email_is_empty = $_GET['email_is_empty'];
if ($email_is_empty) {
	echo '<p style="color: red;">email is required</p>';	
}

?> 

</body>
</html>