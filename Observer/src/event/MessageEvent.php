<?php
namespace App\event;

use App\impl\AbstractEvent;

/**
 * Created by PhpStorm.
 *
 * describe:  MessageEvent.php
 * User: hongwenwu
 * Date: 2019/10/19
 * Time: 01:19
 */

class MessageEvent extends AbstractEvent
{
    public function handler()
    {
        echo "Messgae Event:";
        $this->notify();
        echo PHP_EOL;
    }
}