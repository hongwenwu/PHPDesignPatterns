<?php
/**
 * Created by PhpStorm.
 *
 * describe:  AliMessage.php
 * User: hongwenwu
 * Date: 2019/10/19
 * Time: 01:22
 */
namespace App;

use App\impl\Observer;

class AliMessage implements Observer
{

    function handler()
    {
        echo  "send ali msg";
    }
}