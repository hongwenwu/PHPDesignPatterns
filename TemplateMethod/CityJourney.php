<?php
/**
 * Created by PhpStorm.
 *
 * describe:  CityJourney.php
 * User: hongwenwu
 * Date: 2019/11/3
 * Time: 12:46
 */
class CityJourney extends Journey
{
    protected function enjoyVacation(): string
    {
        return "Eat, drink, take photos and sleep";
    }
//覆盖父类已有方法
    protected function buyGift(): string
    {
        return "Buy a gift";
    }
}