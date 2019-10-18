<?php
/**
 * Created by PhpStorm.
 *
 * describe:  MsSqlt.php
 * User: hongwenwu
 * Date: 2019/10/17
 * Time: 19:28
 */

namespace App;


use App\impl\OperationIntface;

class MsSqlt implements OperationIntface
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
    }

    /**
     * @param string $sql
     * @return mixed
     */
    public function query(string $sql)
    {
        // TODO: Implement query() method.

        echo "Mssql query {$sql}";
    }
}