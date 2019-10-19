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

class Form implements RenderableInterface
{
    private $elements = [];

    public function render()
    {
        $form= "<form>";
        foreach ($this->elements as $element){
            $form .= $element->render();
        }
        $form .= "</form>";

        return $form;
    }

    public function addElement($element)
    {
        $this->elements[] = $element;
    }
}