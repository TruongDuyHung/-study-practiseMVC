<?php

namespace Model;
use PDO;

class DBconnection
{
    protected $dns, $user, $password;

    public function __construct($dns, $user, $password)
    {
        $this->dns = $dns;
        $this->user = $user;
        $this->password = $password;
    }

    public function connect()
    {
        try {
            $pdo = new PDO($this->dns, $this->user, $this->password);
        } catch (\PDOException $e) {
            echo $e->getMessage();
            exit();
        }
        return $pdo;
    }
}