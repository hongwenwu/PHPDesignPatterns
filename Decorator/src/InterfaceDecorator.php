<?php
/**
 * Created by PhpStorm.
 *
 * describe:  InterfaceDecorator.php
 * User: hongwenwu
 * Date: 2019/10/19
 * Time: 23:31
 */

namespace App;

interface InterfaceDecorator
{
    public function before();
    public function after();
}