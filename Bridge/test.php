<?php
/**
 * Created by PhpStorm.
 *
 * describe:  test.php
 * User: hongwenwu
 * Date: 2019/10/19
 * Time: 00:02
 */

use App\Action;
use App\Cat;
use App\Human;

require "vendor/autoload.php";

$action = new Action(new Human());
$action->get();

$action = new Action(new Cat());
$action->get();