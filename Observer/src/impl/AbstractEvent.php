<?php
/**
 * Created by PhpStorm.
 *
 * describe:  AbstructEvent.php
 * User: hongwenwu
 * Date: 2019/10/19
 * Time: 01:08
 */

namespace App\impl;

abstract class AbstractEvent
{
    private $Observers = [];

    public function __construct(...$argv)
    {
        foreach ($argv as $item){
            $this->Observers[] = $item;
        }
    }

    public function  register($observer)
    {
        $this->Observers[] = $observer;
    }

    public function notify()
    {
        foreach ($this->Observers as $observer){
            if($observer instanceof Observer){
                $observer->handler();
                echo PHP_EOL;
            }
        }
    }

    abstract public function handler();

//    public function __destruct()
//    {
//        var_dump($this->Observers);
//    }
}