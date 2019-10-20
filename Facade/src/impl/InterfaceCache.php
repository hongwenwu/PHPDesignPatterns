<?php
/**
 * Created by PhpStorm.
 *
 * describe:  IntfaceCache.php
 * User: hongwenwu
 * Date: 2019/10/20
 * Time: 13:59
 */
 namespace App\impl;

interface InterfaceCache
{
    public function set($key, $value);
    public function get($key);
}