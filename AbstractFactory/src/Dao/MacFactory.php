<?php
namespace App\Dao;

use App\Impl\AbstractFactory;

/**
 * Created by PhpStorm.
 *
 * describe:  MacFactory.php
 * User: hongwenwu
 * Date: 2019/10/17
 * Time: 21:30
 */

class MacFactory implements AbstractFactory
{

    public function createButton()
    {
        return new MacButton();
    }

    public function createInput()
    {
        return new MacInput();
    }
}