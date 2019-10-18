<?php
/**
 * Created by PhpStorm.
 *
 * describe:  Db.php
 * User: hongwenwu
 * Date: 2019/10/17
 * Time: 15:27
 */
namespace App;

class Db
{
    private static $db = null;

    private $currTime=0;

    public static  function getInstance()
    {
        if(!(self::$db instanceof  self)) {
            self::$db = new self;
        }

        return self::$db;
    }

    private function __construct()
    {
        $this->currTime = time();
    }

    private  function __clone()
    {
        // TODO: Implement __clone() method.
    }
    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }

    /**
     * public method
     */
    public function connect()
    {
       echo  $this->currTime.PHP_EOL;
    }
}