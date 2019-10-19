<?php
/**
 * Created by PhpStorm.
 *
 * describe:  Form.php
 * User: hongwenwu
 * Date: 2019/10/19
 * Time: 22:50
 */
namespace  App;

use App\impl\RenderableInterface;

class Text implements RenderableInterface
{
    public function render()
    {
        return "<textarea rows='8' cols='20'></textarea>";
    }
}