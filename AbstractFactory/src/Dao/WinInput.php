<?php
namespace App\Dao;

use App\Impl\Input;

/**
 * Created by PhpStorm.
 *
 * describe:  WinInput.php
 * User: hongwenwu
 * Date: 2019/10/17
 * Time: 21:16
 */

class WinInput extends Input
{
    public function show()
    {
       echo "win input".$this->text.PHP_EOL;
    }
}