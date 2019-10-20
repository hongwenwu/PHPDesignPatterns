<?php
/**
 * Created by PhpStorm.
 *
 * describe:  ImageProxy.php
 * User: hongwenwu
 * Date: 2019/10/20
 * Time: 23:36
 */

namespace App;


class ImageProxy implements Image
{
    private $img;
    public function __construct()
    {
        $this->img = new JpgImage();
    }

    public function getWidth()
    {
        // TODO: Implement getWidth() method.
        return  $this->img->getWidth();
    }
}