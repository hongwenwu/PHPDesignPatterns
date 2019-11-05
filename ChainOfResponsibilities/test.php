<?php
/**
 * Created by PhpStorm.
 *
 * describe:  test.php
 * User: hongwenwu
 * Date: 2019/10/26
 * Time: 10:18
 */
abstract class TranslationResponsibility { // 抽象责任角色
    protected $next; // 下一个责任角色
    protected $translator;
    public function setNext(Responsibility $l) {
        $this->next = $l;
        return $this;
    }
    public function canTranslate($input){
        return $this->translator == $this->check($input);
    }
    public function check($input){
        //写验证输入语言总类的逻辑
    }
    abstract public function translate($input); // 翻译方法
}
class EnglishTranslator extends TranslationResponsibility {
    public function __construct() {
        $this->translator = 'English';
    }
    public function translate($input){
        //如果当前翻译器翻译不了，并且责任链上还有下一个翻译器可用，则让下一个翻译器试试
        if (!is_null($this->next) && !$this->canTranslate($input)) {
            $this->next->translate();
        }else{
            //翻译成英语逻辑
        }
    }
}
class FrenchTranslator extends TranslationResponsibility {
    public function __construct() {
        $this->translator = 'French';
    }
    public function translate($input){
        //如果当前翻译器翻译不了，并且责任链上还有下一个翻译器可用，则让下一个翻译器试试
        if (!is_null($this->next) && !$this->canTranslate($input)) {
            $this->next->translate();
        }else{
            //翻译成法语逻辑
        }
    }
}
//组建注册链
$res_a = new EnglishTranslator();
$res_b = new FrenchTranslator();
$res_a->setNext($res_b);
//使用
$res_a->translate('Bonjour');