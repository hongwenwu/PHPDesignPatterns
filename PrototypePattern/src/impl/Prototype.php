<?php
/**
 * Created by PhpStorm.
 *
 * describe:  Prototype.php
 * User: hongwenwu
 * Date: 2019/10/18
 * Time: 16:33
 */
namespace App\impl;

interface Prototype
{
    public function copy();
    public function deepCopy();
}