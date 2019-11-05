<?php
/**
 * Created by PhpStorm.
 *
 * describe:  Register.php
 * User: hongwenwu
 * Date: 2019/10/26
 * Time: 00:24
 */

namespace App;

class Register
{
    protected static $objects;

    public static function set($alias, $object)
    {
        if (!isset($objects[$alias])) {
            self::$objects[$alias] = $object;
        }
    }

    public static function get($alias)
    {
        return self::$objects[$alias];
    }

    public static function _unset($alias)
    {
        unset(self::$objects[$alias]);
    }
}