<?php

/**
 * Created by PhpStorm.
 *
 * describe:  Journey.php
 * User: hongwenwu
 * Date: 2019/11/3
 * Time: 01:45
 */
abstract class Journey
{
    private $thingsToDo = [];

    //final关键字的作用是不让这个方法被子类覆盖
    final public function takeATrip()
    {
        $this->thingsToDo[] = $this->buyAFlight();
        $this->thingsToDo[] = $this->takePlane();
        $this->thingsToDo[] = $this->enjoyVacation();
        $buyGift            = $this->buyGift();
        if ($buyGift !== null) {
            $this->thingsToDo[] = $buyGift;
        }
        $this->thingsToDo[] = $this->takePlane();
    }

//子类必须实现的抽象方法
    abstract protected function enjoyVacation(): string;

    protected function buyGift()
    {
        return null;
    }

    private function buyAFlight(): string
    {
        return 'Buy a flight ticket';
    }

    private function takePlane(): string
    {
        return 'Taking the plane';
    }

    //把所有旅行中干过的事情列出来
    public function getThingsToDo(): array
    {
        return $this->thingsToDo;
    }
}