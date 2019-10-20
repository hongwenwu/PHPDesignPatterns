<?php
/**
 * Created by PhpStorm.
 *
 * describe:  Configure.php
 * User: hongwenwu
 * Date: 2019/10/20
 * Time: 11:29
 */

namespace App;
class Configure
{
    private $host;
    private $user;
    private $pass;
    private $dbname;
    private $port;
    private $charset;

    public function __construct($host = '', $user = '', $pass = '', $dbname = '', $port = 3306, $charset = '')
    {
        $this->host    = $host;
        $this->user    = $user;
        $this->pass    = $pass;
        $this->dbname  = $dbname;
        $this->port    = $port;
        $this->charset = $charset;
    }

    /**
     * @return mixed
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @param mixed $host
     */
    public function setHost($host)
    {
        $this->host = $host;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * @param mixed $pass
     */
    public function setPass($pass)
    {
        $this->pass = $pass;
    }

    /**
     * @return mixed
     */
    public function getDbname()
    {
        return $this->dbname;
    }

    /**
     * @param mixed $dbname
     */
    public function setDbname($dbname)
    {
        $this->dbname = $dbname;
    }

    /**
     * @return mixed
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @param mixed $port
     */
    public function setPort($port)
    {
        $this->port = $port;
    }


    /**
     * @return mixed
     */
    public function getCharset()
    {
        return $this->charset;
    }

    /**
     * @param mixed $charset
     */
    public function setCharset($charset)
    {
        $this->charset = $charset;
    }

}