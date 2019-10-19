<?php
/**
 * Created by PhpStorm.
 *
 * describe:  Form.php
 * User: hongwenwu
 * Date: 2019/10/19
 * Time: 22:50
 */

namespace App;

use App\impl\RenderableInterface;

class Button implements RenderableInterface
{
    private $type;
    private $value;

    public function __construct($value = "button", $type = "button")
    {
        $this->type  = $type;
        $this->value = $value;
    }

    public function render()
    {
        return "<button type=\"{$this->type}\">{$this->value}</button>";
    }
}