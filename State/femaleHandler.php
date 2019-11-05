<?php
/**
 * Created by PhpStorm.
 *
 * describe:  femaleHandler.php
 * User: hongwenwu
 * Date: 2019/11/5
 * Time: 23:19
 */
require_once 'Handler.php';
require_once 'maleHandler.php';

class femaleHandler implements Handler
{
    public function handle(Shop $shop)
    {
        if($shop->state =="female"){
            echo '展示女性商品目录';
        }else{
            $shop->setHandler(new maleHandler());
            $shop->show();
        }
    }
}