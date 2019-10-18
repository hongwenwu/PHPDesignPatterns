<?php
/**
 * Created by PhpStorm.
 *
 * describe:  MySql.php
 * User: hongwenwu
 * Date: 2019/10/18
 * Time: 20:44
 */

namespace App;


use App\impl\Database;

class MySql implements Database
{

    public function connect()
    {
        echo "TODO: MySql connect() method.";
    }

    public function query()
    {
        echo "TODO: MySql query() method.";
    }

    public function close()
    {
        echo "TODO: MySql close() method.";
    }
}