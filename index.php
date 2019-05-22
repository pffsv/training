<?php
$a=5||true;  //Теперь $a==true, т.к. операнды преобразуются к логическому типу,
             //поэтому 5 преобразовалось в true
$a=0||false; //Теперь $a==false, т.к. 0->false
 
$a=5&&8;     //Теперь $a==true, т.к. 5->true и 8->true        
$a='0'&&8;   //Теперь $a==false, т.к. '0'->false       
 
$a=!false;   //Теперь $a==true        
$a=!5;       //Теперь $a==false, т.к. 5->true
 
/* Функция foo() не будет вызываться из-за шунтов */
$a=(false&&foo());
$b=(true||foo());
$c=(false and foo());
$d=(true or foo());
 
/* Отличие '||' от 'or' и '&&' от 'and' */
$a=false||true;   //Действует как ($a=(false||true))
$a=false or true; //Действует как (($a=false) or true)
$a=false&&true;   //Действует как ($a=(false&&true))
$a=false and true;//Действует как (($a=false) and true)
 
$a=5 xor 0;       //Теперь $a==5, действует как (($a=5) xor 0)
$a=5 and 0;       //Теперь $a==5, действует как (($a=5) and 0)
$a=5 or 0;        //Теперь $a==5, действует как (($a=5) or 0)
 
$a=5||0;          //Теперь $a==true, действует как ($a=(5||0))
$a=5&&0;          //Теперь $a==false, действует как ($a=(5&&0))
$a=(5 xor 6);     //Теперь $a==true, действует как ($a=(5 xor 6))
?>
