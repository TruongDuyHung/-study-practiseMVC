<?php

namespace Model;

class Customer
{
    public  $id,$name, $email, $address;

    public function __construct($name, $email, $address)
    {
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
    }
    public function setID($id)
    {
        $this->id = $id;
    }
}