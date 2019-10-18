<?php
/**
 * Created by PhpStorm.
 *
 * describe:  test.php
 * User: hongwenwu
 * Date: 2019/10/18
 * Time: 20:51
 */

use App\GreenAdapter;
use App\MySql;
use App\RedAdapter;

require "vendor/autoload.php";
// 将一个类的接口转换成客户希望的另外一个接口,使用原本不兼容的而不能在一起工作的那些类可以在一起工作.
class testDriver
{
    public function run()
    {
        //实例化一只狗玩具
        $mysql = new MySql();
        echo "给mysql套上红枣适配器\n";
        $adapter_red = new RedAdapter($mysql);
        //张嘴
        $adapter_red->doMouthOpen();
        //闭嘴
        $adapter_red->doMouthClose();
        echo "\n给mysql套上绿枣适配器\n";
        $adapter_green = new GreenAdapter($mysql);
        //张嘴
        $adapter_green->operateMouth(1);
        //闭嘴
        $adapter_green->operateMouth(0);
    }
}

$test = new testDriver();
$test->run();