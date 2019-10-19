<?php
/**
 * Created by PhpStorm.
 *
 * describe:  test.php
 * User: hongwenwu
 * Date: 2019/10/19
 * Time: 00:59
 */

use App\AliMessage;
use App\Email;
use App\event\MessageEvent;

require "vendor/autoload.php";

$event = new MessageEvent();
$event->register(new AliMessage());
$event->register(new Email());
$event->handler();
