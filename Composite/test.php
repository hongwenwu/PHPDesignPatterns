<?php
/**
 * Created by PhpStorm.
 *
 * describe:  test.php
 * User: hongwenwu
 * Date: 2019/10/19
 * Time: 23:00
 */

use App\Button;
use App\Form;
use App\Input;
use App\Text;

require "vendor/autoload.php";

$form = new Form();
$form->addElement(new Input());
$form->addElement(new Input("password"));
$form->addElement(new Text());
$form->addElement(new Button("submit"));

echo $form->render();