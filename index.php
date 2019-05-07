<?php
$employee_array[0] = "Петя";
$employee_array[1] = "Вася";
$employee_array[2] = "Ваня";
$employee_array[3] = "Федор Петрович";
echo "Два моих работника:  "
. $employee_array[0] . " и " . $employee_array[1]; 
echo "<br />И еще два работника: " 
. $employee_array[2] . " и " . $employee_array[3];

$salaries["Петя"] = 2000;
$salaries["Вася"] = 4000;
$salaries["Ваня"] = 600;
$salaries["Даша"] = 0;

echo "Петя получает - $" . $salaries["Петя"] . "<br />";
echo "Вася получает - $" . $salaries["Вася"] . "<br />";
echo "А Ваня получает всего - $" . $salaries["Ваня"] . "<br />";
echo "Даша в этом месяце не работала, поэтому - $" . $salaries["Даша"]
?>