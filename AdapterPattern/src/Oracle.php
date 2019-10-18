<?php
/**
 * Created by PhpStorm.
 *
 * describe:  Oracle.php
 * User: hongwenwu
 * Date: 2019/10/18
 * Time: 20:45
 */

namespace App;


use App\impl\Database;

class Oracle implements Database
{
    public function connect()
    {
        echo "TODO: Oracle connect() method.";
    }

    public function query()
    {
        echo "TODO: Oracle query() method.";
    }

    public function close()
    {
        echo "TODO: Oracle close() method.";
    }
}