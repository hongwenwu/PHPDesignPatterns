<?php
/**
 * Created by PhpStorm.
 *
 * describe:  Factory.php
 * User: hongwenwu
 * Date: 2019/10/17
 * Time: 16:59
 */
namespace App;

class SimpleFactory
{
    public function createCoke(): Coke
    {
        return new Coke();
    }
}