<?php
/**
 * Created by PhpStorm.
 *
 * describe:  Input.php
 * User: hongwenwu
 * Date: 2019/10/17
 * Time: 21:01
 */

namespace App\Impl;


abstract  class Input
{
    protected $text;

    public function setText($value)
    {
        $this->text = $value;
    }

    public abstract function show();
}