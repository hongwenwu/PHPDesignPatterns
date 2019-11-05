<?php
/**
 * Created by PhpStorm.
 *
 * describe:  femaleShowStrategy.php
 * User: hongwenwu
 * Date: 2019/11/4
 * Time: 11:02
 */
class femaleShowStrategy implements showStrategy { // 具体策略B
    public function showCategory(){
        echo '展示女性商品目录';
    }
}