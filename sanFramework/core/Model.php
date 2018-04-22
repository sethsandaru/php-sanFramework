<?php
/**
 * Created by PhpStorm.
 * User: 84066
 * Date: 4/3/2018
 * Time: 5:26 PM
 */

class Model
{
    protected $db;

    public function __construct()
    {
        $this->db = new \mysqli(SAN_HOST, SAN_USER, SAN_PASS, SAN_DB);
    }


    public function __destruct()
    {
        $this->db->close();
    }
}