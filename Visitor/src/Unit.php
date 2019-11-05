<?php
/**
 * Created by PhpStorm.
 *
 * describe:  Unit.php
 * User: hongwenwu
 * Date: 2019/11/4
 * Time: 11:37
 */
namespace App;

class Unit{
    //注意这个方法，非常关键，你现在可能没看懂，接着往下看，然后再回来看。
    public function accept($visitor){
        $method = 'visit'. (new \ReflectionClass($this))->getShortName();

        if (method_exists($visitor, $method)) {
            $visitor->$method($this);
        }
    }
}