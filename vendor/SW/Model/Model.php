<?php


namespace SW\Model;


abstract class Model
{
    protected $conn;

    public function __construct(\PDO $conn)
    {
        $this->conn = $conn;
    }
}