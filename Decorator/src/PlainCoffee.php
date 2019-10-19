<?php
/**
 * Created by PhpStorm.
 *
 * describe:  PlainCoffee.php
 * User: hongwenwu
 * Date: 2019/10/19
 * Time: 23:25
 */

namespace App;

class PlainCoffee
{
    /**
     * @var InterfaceDecorator[]
     */
    private $decorators;

    /**
     * @param mixed $decorators
     */
    public function addDecorators($decorators)
    {
        $this->decorators[] = $decorators;
    }

    public function before()
    {
        foreach ($this->decorators as $decorator) {
            $decorator->before();
        }
    }

    public function after()
    {
        foreach ($this->decorators as $decorator) {
            $decorator->after();
        }
    }

    public function makeCoffee()
    {
        $this->before();
        $this->addCoffee();
        $this->after();
    }

    public function addCoffee()
    {
        echo "加咖啡".PHP_EOL;
    }
}