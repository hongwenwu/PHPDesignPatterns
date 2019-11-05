<?php
/**
 * Created by PhpStorm.
 *
 * describe:  test.php
 * User: hongwenwu
 * Date: 2019/10/26
 * Time: 00:23
 */
// 注册器模式

use App\Register;

require  "Register.php";


Register::set('rand',stdClass::class);
Register::get('rand');