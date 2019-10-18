<?php
/**
 * Created by PhpStorm.
 *
 * describe:  MySqlt.php
 * User: hongwenwu
 * Date: 2019/10/17
 * Time: 18:52
 */

namespace App;


use App\impl\OperationIntface;

class MySqlt implements OperationIntface
{
    /**
     * @param string $host
     * @param string $name
     * @param string $pass
     * @param string $db
     * @return mixed
     */
    public function connect(string $host, string $name, string $pass, string $db)
    {
        // TODO: Implement connect() method.
        echo "connect";
    }

    /**
     * @param string $sql
     * @return mixed
     */
    public function query(string $sql)
    {
        // TODO: Implement query() method.
        echo "mysql query {$sql}";
    }
}