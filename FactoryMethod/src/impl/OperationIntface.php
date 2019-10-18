<?php
/**
 * Created by PhpStorm.
 *
 * describe:  OperationIntface.php
 * User: hongwenwu
 * Date: 2019/10/17
 * Time: 18:44
 */
namespace App\impl;

interface OperationIntface
{
    /**
     * @param string $host
     * @param string $name
     * @param string $pass
     * @param string $db
     * @return mixed
     */
    public function connect(string $host, string $name, string $pass, string $db);

    /**
     * @param string $sql
     * @return mixed
     */
    public function query(string $sql);

}