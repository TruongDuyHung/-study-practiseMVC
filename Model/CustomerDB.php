<?php

namespace Model;
class CustomerDB
{
    protected $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }
    public function creat($customer)
    {
        $sql = "insert into customers(name,email,address) values (?,?,?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1, $customer->name);
        $stmt->bindParam(2, $customer->email);
        $stmt->bindParam(3, $customer->address);
        return $stmt->execute();
    }
    public function getAll()
    {
        $sql= "select * from customers";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $customers= [];
        foreach ($result as $row) {
            $customer= new Customer($row['name'],$row['email'],$row['address']);
            $customer->setID($row['id']);
            $customers[]=$customer;
        }
        return $customers;
    }
}