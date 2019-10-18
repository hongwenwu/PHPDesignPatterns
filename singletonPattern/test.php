<?php
/**
 * Created by PhpStorm.
 *
 * describe:  test.php
 * User: hongwenwu
 * Date: 2019/10/17
 * Time: 15:49
 */

// 单例模式
use App\Db;

require 'vendor/autoload.php';
$do = 0;

do {
    $test_db = Db::getInstance();
    $test_db->connect();

    sleep(10);
    $do++;
} while ( $do < 3);