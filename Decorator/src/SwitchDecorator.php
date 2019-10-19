<?php
/**
 * Created by PhpStorm.
 *
 * describe:  SwitchDecorator.php
 * User: hongwenwu
 * Date: 2019/10/19
 * Time: 23:30
 */

namespace App;


class SwitchDecorator implements InterfaceDecorator
{
    public function before()
    {
        // TODO: Implement before() method.
    }

    public function after()
    {
        $this->addWater();
    }

    public function addWater()
    {
        echo "加水".PHP_EOL;
    }
}