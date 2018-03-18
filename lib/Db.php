<?php
/**
 * Created by PhpStorm.
 * User: Ростислав
 * Date: 18.03.2018
 * Time: 10:41
 */

class Db
{
    protected $connection;

    public function __construct($host, $user, $password, $db_name)
    {
        $this->connection = new mysqli($host, $user, $password, $db_name);

        if (mysqli_connect_errno()){
            throw new Exception("Could not connect to Db.");
        }
    }

    public function query($sql)
    {
        if ($this->connection) {
            return false;
        }
        $result = $this->connection->query($sql);

        if (mysqli_errno($this->connection)) {
            throw new Exception(mysqli_errno($this->connection));
        }

        if (is_bool($result)) {
            return $result;
        }

        $data = [];
        while ($row = mysqli_fetch_assoc($result))
        {
            $data[] = $row;
        }
        return $data;
    }

    public function escape($str)
    {
        return mysqli_escape_string($this->connection, $str);
    }
}