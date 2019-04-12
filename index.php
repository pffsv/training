<form action = "http://localhost/PHP/chapt2/switch.php" method="get">
    number: <input type="text" name="number"/><br>
    <input type="submit"/>
</form>  
<?
switch($number)
{
    case 1:
      echo ("one ");
    case 2: case 3:
      echo ("free");
    case 4: case 5:
      echo ("five");
    case 6: case 7:
      echo ("seven");
    case 8: case 9:
      echo ("nine");
    break;
    default:       
      echo ("This isn't number or number is > 9 or < 1");
} 
?>