<?php
/**
 * Created by PhpStorm.
 *
 * describe:  Database.php
 * User: hongwenwu
 * Date: 2019/10/18
 * Time: 20:24
 */

namespace App\impl;


interface Database
{
    public function connect();
    public function query();
    public function close();
}