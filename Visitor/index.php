<?php
/**
 * Created by PhpStorm.
 *
 * describe:  Visitor.php
 * User: hongwenwu
 * Date: 2019/11/5
 * Time: 13:40
 */

use App\User;
use App\UserPhone;

require_once "vendor/autoload.php";

$user = new User();
//正常获取名字
$user->getName();
//通过访问者获取电话
$user->accept(new UserPhone());

