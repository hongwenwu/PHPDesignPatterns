<?php
/**
 * Created by PhpStorm.
 *
 * describe:  GreenAdapter.php
 * User: hongwenwu
 * Date: 2019/10/18
 * Time: 20:49
 */

namespace App;


use App\impl\Database;
use App\impl\GreenTarget;

class GreenAdapter implements GreenTarget
{
    /**
     * @var Database
     */
    private $driver;

    public function __construct($driver)
    {
        $this->driver = $driver;
    }

    public function operateMouth($type = 0)
    {
        if ($type) {
            $this->driver->connect();
        } else {
            $this->driver->close();
        }
    }
}
