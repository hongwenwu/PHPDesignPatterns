<?php
namespace App\Dao;

use App\Impl\Button;

/**
 * Created by PhpStorm.
 *
 * describe:  WinButton.php
 * User: hongwenwu
 * Date: 2019/10/17
 * Time: 21:04
 */

class WinButton extends Button
{

    public function click()
    {
        echo "click win btn".PHP_EOL;
    }
}