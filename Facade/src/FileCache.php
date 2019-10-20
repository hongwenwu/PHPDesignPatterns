<?php

namespace App;


use App\impl\InterfaceCache;

/**
 * Created by PhpStorm.
 *
 * describe:  Cache.php
 * User: hongwenwu
 * Date: 2019/10/20
 * Time: 14:14
 */
class FileCache implements InterfaceCache
{

    public function set($key, $value)
    {
        file_put_contents("./tmp/".$key, $value);
    }

    public function get($key)
    {
        return file_get_contents("./tmp/".$key);
    }
}