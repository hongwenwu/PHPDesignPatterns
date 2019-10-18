<?php
/**
 * Created by PhpStorm.
 *
 * describe:  AbstractFactory.php
 * User: hongwenwu
 * Date: 2019/10/17
 * Time: 21:02
 */

namespace App\Impl;

interface AbstractFactory
{
    public function createButton();
    public function createInput();
}