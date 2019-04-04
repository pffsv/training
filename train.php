<?php
/*
104.Абстрактные методы трейтов
1.Скопируйте код моего трейта TestTrait и код моего
класса Test. Удалите из класса метод method2.
Убедитесь в том, что отсутствие его реализации
приведет к ошибке PHP.
*/
trait TestTrait
{
public function method1()
{
return 1;
}
abstract public function method2();
}
class Test
{
use TestTrait;
}

new Test;// Fatal error

/*
105.Использование трейтов в трейтах

1.Самостоятельно сделайте такие же трейты,
как у меня и подключите их к классу Test.
Сделайте в этом классе метод getSum,
возвращающий сумму результатов методов
подключенных трейтов.
*/
trait Trait1
{
private function method1()
{
return 1;
}
private function method2()
{
return 2;
}
}
trait Trait2
{
use Trait1;

private function method3()
{
return 3;
}
}
class Test
{
use Trait2;

public function getSum()
{
return self::method1() + self::method2() + self::method3();
}
}

echo (new Test)->getSum();// 6
?>	