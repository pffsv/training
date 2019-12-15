<?php

	/*
59. Внимательно изучите условие задачи и закомментируйте неверные инструкции.
	*/

class parent_class{
    
   protected $p_1='Защищенное свойство ';   
    
   private $p_2='Закрытое свойство ';     
     
   public function parent_func(){
    echo $this->p_2.'<br>';   
    echo $this->p_1.'<br>';  
   }
}
  
class descendant_class extends parent_class{
  private $p_1='p_var ';   
  private $p_2='p_var ';     
                               
  function child_func(){     
    echo $this->p_1.'<br>';   
    echo $this->p_2.'<br>';  
  }
}
  
$obj=new parent_class();         
$obj_2=new descendant_class();   
  
$obj->parent_func();  
echo $obj->p_2;     
echo $obj_2->p_2;   
$obj_2->child_func(); 
echo $obj->p_1;   
 
?>