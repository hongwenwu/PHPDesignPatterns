<?php
/**
 * Created by PhpStorm.
 *
 * describe:  ClonePrototype.php
 * User: hongwenwu
 * Date: 2019/10/18
 * Time: 16:34
 */

namespace App;

use App\impl\Prototype;

class ClonePrototype implements Prototype
{

    private $obj;

    public function __construct($obj)
    {
        $this->obj = $obj;
    }

    /**
     * @return mixed
     */
    public function getObj()
    {
        return $this->obj;
    }

    public function setObj($obj)
    {
        $this->obj = $obj;
    }

    public function copy()
    {
        return clone $this;
    }

    public function deepCopy()
    {
        $object =  serialize($this);
        $cloneObject = unserialize($object);
        return clone $cloneObject;
    }
}