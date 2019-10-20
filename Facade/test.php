<?php
/**
 * Created by PhpStorm.
 *
 * describe:  test.php
 * User: hongwenwu
 * Date: 2019/10/20
 * Time: 14:38
 */
require "vendor/autoload.php";

use App\facade\CacheFacade;


CacheFacade::set("name_11", date('Y-m-d H:i:s'));

echo CacheFacade::get("name_11");