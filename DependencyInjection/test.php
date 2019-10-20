<?php
/**
 * Created by PhpStorm.
 *
 * describe:  test.php
 * User: hongwenwu
 * Date: 2019/10/19
 * Time: 23:44
 */

use App\Configure;
use App\MysqlDemo;

require "vendor/autoload.php";
$config = new Configure();
$config->setHost('127.0.0.1');
$config->setUser('root');
$config->setPass('root');
$config->setDbname('test');
$config->setPort('3306');

$db = new MysqlDemo($config);

$db->connect();
$array = $db->query("select * from notepad limit 10");

foreach ($array as $item){
    echo $item['title'].PHP_EOL;
}