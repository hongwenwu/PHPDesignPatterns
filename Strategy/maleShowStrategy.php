<?php
/**
 * Created by PhpStorm.
 *
 * describe:  maleShowStrategy.php
 * User: hongwenwu
 * Date: 2019/11/4
 * Time: 00:45
 */
class maleShowStrategy implements showStrategy { // 具体策略A
    public function showCategory(){
        echo '展示男性商品目录';
    }
}