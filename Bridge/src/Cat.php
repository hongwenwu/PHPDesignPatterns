<?php
/**
 * Created by PhpStorm.
 *
 * describe:  Cat.php
 * User: hongwenwu
 * Date: 2019/10/19
 * Time: 00:19
 */

namespace App;


use App\impl\Animal;

class Cat implements Animal
{
    public function exchange()
    {
       echo "猫交流的方式是乱叫";
    }
}