<?php
/**
 * Created by PhpStorm.
 *
 * describe:  test.php
 * User: hongwenwu
 * Date: 2019/10/17
 * Time: 22:10
 */

// 原型模式
use App\ClonePrototype;
use App\MyClass;

require "vendor/autoload.php";
//深拷贝：赋值时值完全复制，完全的copy，对其中一个作出改变，不会影响另一个
//
//浅拷贝：赋值时，引用赋值，相当于取了一个别名。对其中一个修改，会影响另一个 对象作为参数传递时，也是引用传递
//php 对象复制，是复制对象的引用地址，因此使用 $objA = $objB 这种写法时，$objA与$objB会指向相同的内存地址。当$objA 发生变化时，$objB也会受到影响。
//如果我们要$objA对象复制为$objB对象，复制之后，$objA有什么变化，都不会影响$objB。即$objA与$objB是两个独立的对象，但$objB的初始值是由$objA创建的，比较高效的做法是使用clone()方法。
//$objB = clone $objA;
//$objB的值是在$objA基础加$objA事例对象里clone()方法改变后的实例。
//当对象被复制后，所有的属性中的引用保持不变，指向原来的变量
//$a = new Demo();
//$a->string = 1;
//$b = clone $a;  // 在堆复制一个一摸一样的 其实是两个对象  但是同时指向的$string的地址是不变的
//var_dump($a); // true
//var_dump($b); // false
//var_dump($b == $a); // true
//var_dump($b === $a); // false
$demo = new MyClass();
$demo->data ="prototype";
// 浅拷贝
$object1 = new ClonePrototype($demo);
$object2 = $object1->copy();
$object1->getObj()->data="1aasda121";
$object2->getObj()->data="12312123";
$object1->getObj()->prints();
$object2->getObj()->prints();


// 深拷贝
$demo = new MyClass();
$demo->data ="prototype";
$object1 = new ClonePrototype($demo);
$object2 = $object1->deepCopy();
$object1->getObj()->data="1aasda121";
$object2->getObj()->data="12312123";
$object1->getObj()->prints();
$object2->getObj()->prints();
