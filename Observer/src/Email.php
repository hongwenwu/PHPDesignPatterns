<?php
/**
 * Created by PhpStorm.
 *
 * describe:  Email.php
 * User: hongwenwu
 * Date: 2019/10/19
 * Time: 01:24
 */

namespace App;


use App\impl\Observer;

class Email implements Observer
{
    function handler()
    {
        echo "send email";
    }
}