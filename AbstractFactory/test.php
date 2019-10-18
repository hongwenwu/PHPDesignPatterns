<?php
/**
 * Created by PhpStorm.
 *
 * describe:  test.php
 * User: hongwenwu
 * Date: 2019/10/17
 * Time: 21:31
 */

use App\Dao\MacFactory;
use App\Dao\WinFactory;

require "vendor/autoload.php";

$winfs = new WinFactory();

$winbtn = $winfs->createButton();
$winbtn->click();

$winInput = $winfs->createInput();
$winInput->setText('world');
$winInput->show();

$macfs = new MacFactory();
$macBtn = $macfs->createButton();
$macBtn->click();

$macInput = $macfs->createInput();
$macInput->setText('hello');
$macInput->show();