<?php
/**
 * Created by PhpStorm.
 *
 * describe:  DbPool.php
 * User: hongwenwu
 * Date: 2019/10/17
 * Time: 21:46
 */

namespace App;

class DbPool
{
    private $instances = [];

    public function get($key)
    {
        if (!isset($this->instances[$key])) {
            $this->instances[$key] = $this->create($key);
        }

        return $this->instances[$key];
    }

    private function create($key)
    {
        if ($key == "mysql") {
            return new ClassA();
        }
        if ($key == "mssql") {
            return new ClassB();
        }
    }
}