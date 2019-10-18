<?php
/**
 * Created by PhpStorm.
 *
 * describe:  Db.php
 * User: hongwenwu
 * Date: 2019/10/17
 * Time: 19:13
 */

namespace App;

use App\impl\DbFactory;
use App\impl\OperationIntface;

class Db extends DbFactory
{
    private static $db;

    private function __construct()
    {
    }
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }
    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }


    /**
     * @param OperationIntface $className
     * @return OperationIntface
     */
    public static function create($className)
    {
        return new $className();
    }

    public static function  getInstance($className)
    {
        if(!(self::$db instanceof OperationIntface)){
            self::$db = new $className();
        }

        return self::$db;
    }

}