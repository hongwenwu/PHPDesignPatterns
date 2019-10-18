<?php
namespace App\Dao;

use App\Impl\AbstractFactory;

/**
 * Created by PhpStorm.
 *
 * describe:  Factory.php
 * User: hongwenwu
 * Date: 2019/10/17
 * Time: 21:19
 */

class WinFactory implements AbstractFactory
{

    public function createButton()
    {
        return new WinButton();
    }

    public function createInput()
    {
        return new WinInput();
    }
}