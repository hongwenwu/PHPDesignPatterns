<?php
/**
 * Created by PhpStorm.
 *
 * describe:  test.php
 * User: hongwenwu
 * Date: 2019/10/19
 * Time: 23:22
 */

use App\GroundDecorator;
use App\PlainCoffee;
use App\SwitchDecorator;

require "vendor/autoload.php";

$plain = new PlainCoffee();
$plain->addDecorators(new SwitchDecorator());
$plain->addDecorators(new GroundDecorator());

$plain->makeCoffee();