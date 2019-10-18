<?php
/**
 * Created by PhpStorm.
 *
 * describe:  Action.php
 * User: hongwenwu
 * Date: 2019/10/19
 * Time: 00:51
 */

namespace App;


use App\service\BridgeService;

class Action extends BridgeService
{
    public function get()
    {
        echo "被动作执行:";
        $this->object->exchange();
        echo PHP_EOL;
    }
}