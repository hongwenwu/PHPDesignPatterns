<?php
/**
 * Created by PhpStorm.
 *
 * describe:  test.php
 * User: hongwenwu
 * Date: 2019/10/17
 * Time: 17:42
 */

use App\SimpleFactory;

require_once "vendor/autoload.php";

$sf = new SimpleFactory();

$cacol = $sf->createCoke();
$cacol->buy("12312");