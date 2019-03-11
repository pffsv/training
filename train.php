<?php
//79.Передача объектов по ссылке
/*1.Сделайте класс Product (продукт),
в котором будут следующие свойства:
name (название продукта), price (цена).
2.Создайте объект класса Product, запишите
его в переменную $product1.
3.Присвойте значение переменной $product1
в переменную $product2. Проверьте то, что
обе переменные ссылаются на один и тот же объект.
*/
class Product
{
public $name;
public $price;

function __construct($name, $price)
{
$this->name = $name;
$this->price = $price;
}
}
$product1 = new Product('чапельник', 1000);
echo $product1->name;// чапельник
$product2 = $product1;
echo $product2->name;// чапельник

?>	