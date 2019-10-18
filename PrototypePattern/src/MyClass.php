<?php
/**
 * Created by PhpStorm.
 *
 * describe:  MyClass.php
 * User: hongwenwu
 * Date: 2019/10/18
 * Time: 15:13
 */
namespace App;
class MyClass
{
    public $data;

    public function prints()
    {
        var_dump($this).PHP_EOL;
    }

    public function __clone() {
        $this->data = clone $this->data;
    }
}
