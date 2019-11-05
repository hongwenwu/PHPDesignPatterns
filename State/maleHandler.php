<?php
/**
 * Created by PhpStorm.
 *
 * describe:  maleHandler.php
 * User: hongwenwu
 * Date: 2019/11/5
 * Time: 23:18
 */

require_once 'Handler.php';
require_once 'femaleHandler.php';

class maleHandler implements Handler
{
    public function handle(Shop $shop)
    {
        if($shop->state =="male"){
            echo '展示男性商品目录';
        }else{
            $shop->setHandler(new femaleHandler());
            $shop->show();
        }
    }
}