<?php
/**
 * Created by PhpStorm.
 *
 * describe:  index..php
 * User: hongwenwu
 * Date: 2019/11/4
 * Time: 00:45
 */
//策略模式是一个非常常用，且非常有用的设计模式。
//简单的说，它是当你使用大量if else逻辑时的救星。
//if else 就是一种判断上下文的环境所作出的策略，如果你把if else写死，那么在复杂逻辑的时候你会发现代码超级长，而且最蛋疼的是，当你以后要新增策略时，再写一个elseif？
//万一这个逻辑要修改20个地方呢？
//一口老血吐在屏幕上…
//策略模式就是来解决这个问题的。
//举一个场景，商城的首页，男的进来看男性商品，女的进来看女性商品，不男不女…以此类推，各种条件下用不同策略展示不同商品。

class Page{
    private $_strategy;
    public function __construct(showStrategy $strategy) {
        $this->_strategy = $strategy;
    }
    public function showPage() {
        $this->_strategy->showCategory();
    }
}

if(isset($_GET['male'])){
    $strategy = new maleShowStrategy();
}elseif(isset($_GET['female'])){
    $strategy = new femaleShowStrategy();
}
//注意看这里上下，Page类不再依赖一种具体的策略，而是只需要绑定一个抽象的接口，这就是传说中的控制反转（IOC）。
$question = new Page($strategy);
$question->showPage();