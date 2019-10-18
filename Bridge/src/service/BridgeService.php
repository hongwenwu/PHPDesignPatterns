<?php

/**
 * Created by PhpStorm.
 *
 * describe:  BridgeService.php
 * User: hongwenwu
 * Date: 2019/10/19
 * Time: 00:47
 */
namespace App\service;

use App\impl\Animal;

abstract class BridgeService
{
    protected $object;

    public function __construct(Animal $animal)
    {
        $this->object = $animal;
    }

    public function setObject(Animal $animal)
    {
        $this->object = $animal;
    }

    abstract public function get();
}