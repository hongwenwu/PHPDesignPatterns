<?php
/**
 * Created by PhpStorm.
 *
 * describe:  JpgImage.php
 * User: hongwenwu
 * Date: 2019/10/20
 * Time: 23:35
 */

namespace App;

class JpgImage implements Image
{

    public function getWidth()
    {
        return "jpg100px";
    }
}