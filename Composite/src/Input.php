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

class Input implements RenderableInterface
{
    private $type;

    public function __construct($type="text")
    {
        $this->type = $type;
    }

    public function render()
    {
        return "<input type=\"{$this->type}\" />";
    }
}