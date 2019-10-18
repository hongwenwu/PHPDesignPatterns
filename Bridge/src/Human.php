<?php
/**
 * Created by PhpStorm.
 *
 * describe:  Human.php
 * User: hongwenwu
 * Date: 2019/10/19
 * Time: 00:18
 */
namespace App;

use App\impl\Animal;

class Human implements Animal
{

    public function exchange()
    {
        echo "人类交流的方式是说话";
    }
}