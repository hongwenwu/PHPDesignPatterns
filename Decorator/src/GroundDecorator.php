<?php
/**
 * Created by PhpStorm.
 *
 * describe:  GroundDecorator.php
 * User: hongwenwu
 * Date: 2019/10/19
 * Time: 23:37
 */

namespace App;


class GroundDecorator implements InterfaceDecorator
{

    public function before()
    {
        echo "放咖啡".PHP_EOL;
    }

    public function after()
    {
        echo "磨咖啡".PHP_EOL;
    }
}