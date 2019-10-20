<?php
/**
 * Created by PhpStorm.
 *
 * describe:  test.php
 * User: hongwenwu
 * Date: 2019/10/20
 * Time: 19:03
 */

use App\ImageProxy;

require "vendor/autoload.php";

$proxy = new ImageProxy();

echo $proxy->getWidth();