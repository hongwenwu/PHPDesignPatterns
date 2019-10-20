<?php
/**
 * Created by PhpStorm.
 *
 * describe:  CacheFacade.php
 * User: hongwenwu
 * Date: 2019/10/20
 * Time: 14:22
 */

namespace App\facade;

use App\FileCache;

class CacheFacade
{
    private static $cache;

    private static function init()
    {
        self::$cache = new FileCache();
    }

    public static function set($key, $val)
    {
        if(empty(self::$cache)){
            self::init();
        }
        self::$cache->set($key, $val);
    }

    public static function get($key)
    {
        return  self::$cache->get($key);
    }

}