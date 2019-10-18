<?php
/**
 * Created by PhpStorm.
 *
 * describe:  db.php
 * User: hongwenwu
 * Date: 2019/10/17
 * Time: 18:43
 */

namespace App\impl;

abstract class  DbFactory
{
    public abstract static function create($className);
}