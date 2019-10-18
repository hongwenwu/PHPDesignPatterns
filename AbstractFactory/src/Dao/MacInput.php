<?php
namespace App\Dao;

use App\Impl\Input;

/**
 * Created by PhpStorm.
 *
 * describe:  MacInput.php
 * User: hongwenwu
 * Date: 2019/10/17
 * Time: 21:18
 */

class MacInput extends Input
{
    public function show()
    {
        echo "mac input ".$this->text.PHP_EOL;
    }
}