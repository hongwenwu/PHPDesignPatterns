<?php
/**
 * Created by PhpStorm.
 *
 * describe:  MysqlDemo.php
 * User: hongwenwu
 * Date: 2019/10/20
 * Time: 11:48
 */

namespace App;

class MysqlDemo
{
    private $configure;
    private $conn;

    public function __construct(Configure $configure)
    {
        $this->configure = $configure;
    }

    public function connect()
    {
        $this->conn = mysqli_connect(
            $this->configure->getHost(),
            $this->configure->getUser(),
            $this->configure->getPass(),
            $this->configure->getDbname(),
            $this->configure->getPort()
        );

        if (!$this->conn) {
            echo "Error: Unable to connect to MySQL." . PHP_EOL;
            echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }

    }

    public function query($sql)
    {
        $result =  mysqli_query($this->conn, $sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }
}