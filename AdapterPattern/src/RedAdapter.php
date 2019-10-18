<?php
/**
 * Created by PhpStorm.
 *
 * describe:  Adapter.php
 * User: hongwenwu
 * Date: 2019/10/18
 * Time: 20:25
 */

namespace App;

use App\impl\Database;
use App\impl\RedTarget;

class RedAdapter implements RedTarget
{
    /**
     * @var Database
     */
    private $driver;

    public function __construct($driver)
    {
        $this->driver = $driver;
    }

    public function doMouthOpen()
    {
        $this->driver->connect();
    }

    public function doMouthClose()
    {
        $this->driver->close();
    }
}