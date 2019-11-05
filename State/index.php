<?php
/**
 * Created by PhpStorm.
 *
 * describe:  index.php
 * User: hongwenwu
 * Date: 2019/11/5
 * Time: 23:19
 */

require_once 'Shop.php';

$shop = new Shop;
$shop->state ="male";
$shop->show();
//展示男性商品目录
$shop->state ="female";
$shop->show();