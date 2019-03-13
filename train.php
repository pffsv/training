<?php
//81.Передача объектов параметрами
/*
1.Сделайте класс Product (товар), в котором будут
приватные свойства name (название товара), price
(цена за штуку) и quantity. Пусть все эти свойства
будут доступны только для чтения.
2.Добавьте в класс Product метод getCost, который
будет находить полную стоимость продукта (сумма
умножить на количество).
3.Сделайте класс Cart (корзина). Данный класс
будет хранить список продуктов (объектов класса
Product) в виде массива. Пусть продукты хранятся
в свойстве products.
4.Реализуйте в классе Cart метод add для добавления продуктов.
5.Реализуйте в классе Cart метод remove для удаления продуктов.
Метод должен принимать параметром название удаляемого продукта.
6.Реализуйте в классе Cart метод getTotalCost, который будет
находить суммарную стоимость продуктов.
7. Реализуйте в классе Cart метод getTotalQuantity,
который будет находить суммарное количество продуктов
(то есть сумму свойств quantity всех продуктов).
8.Реализуйте в классе Cart метод getAvgPrice,
который будет находить среднюю стоимость продуктов
(суммарная стоимость делить на количество всех продуктов).
*/
class Product
{
private $name;
private $price;
private $quantity;

function __construct($name, $price, $quantity)
{
$this->name = $name;
$this->price = $price;
$this->quantity = $quantity;
}
public function getName()
{
return $this->name;
}
public function getPrice()
{
return $this->price;
}
public function getQuantity()
{
return $this->quantity;
}
public function getCost()
{
return $this->price * $this->quantity;
}
}

class Cart
{
private $products = [];

public function get()
{
return $this->products;
}
public function add($products)
{
$this->products[] = $products;
return $this;
}
public function remove($name)
{
foreach ($this->products as $key=>$value){
if ($value->getName() == $name) {
unset($this->products[$key]);
}
}
}
public function getTotalCost()
{
$cost = 0;
foreach ($this->products as $products) {
$cost += $products->getCost();
}
return $cost;
}
public function getTotalQuantity()
{
$qnt = 0;
foreach ($this->products as $products) {
$qnt += $products->getQuantity();
}
return $qnt;
}
public function getAvgPrice()
{
return $this->getTotalCost() / $this->getTotalQuantity();
}
}
$cart = (new Cart)->add(new Product('чапельник', 500, 4))->add(new Product('сковорода', 1000, 4));

var_dump($cart->get());//['чапельник', 500, 4], ['сковорода', 1000, 4]
echo $cart->getTotalCost();// 6000
echo $cart->getTotalQuantity();// 8
echo $cart->getAvgPrice();// 750
$cart->remove('чапельник');// ['сковорода', 1000, 4]
var_dump($cart->get());
?>	