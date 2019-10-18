<?php
/**
 * Created by PhpStorm.
 *
 * describe:  test.php
 * User: hongwenwu
 * Date: 2019/10/17
 * Time: 18:41
 */
use App\Db;

require "vendor/autoload.php";

$db = Db::create('App\MySqlt');
$db->query("sql");

echo PHP_EOL;

$db = Db::create('App\MsSqlt');
$db->query("sql");

echo PHP_EOL;

$db = Db::getInstance('App\MsSqlt');
$db->query("getInstance sql");

echo PHP_EOL;

$db = Db::getInstance('App\MySqlt');
$db->query("getInstance sql");