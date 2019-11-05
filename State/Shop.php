<?php
/**
 * Created by PhpStorm.
 *
 * describe:  Shop.php
 * User: hongwenwu
 * Date: 2019/11/5
 * Time: 23:05
 */
require_once 'maleHandler.php';

class Shop {
    private $handler;
    //这里$state设置一个状态值
    public $state;
    //设置默认状态，和默认处理器
    public function __construct() {
        $this->state = 'male';
        $this->handler = new maleHandler();
    }
    public function setHandler(Handler $handler) {
        $this->handler = $handler;
    }
    public function show() {
        $this->handler->handle($this);
    }
}