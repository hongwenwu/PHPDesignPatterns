<?php
/**
 * Created by PhpStorm.
 *
 * describe:  test.php
 * User: hongwenwu
 * Date: 2019/10/17
 * Time: 21:45
 */
// 对象池模式
use App\DbPool;

require "vendor/autoload.php";

$pool= new DbPool();

$pool->get('mysql')->show();
$pool->get('mssql')->show();
