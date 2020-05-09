<?php

namespace Controller;

use Model\Customer;
use Model\CustomerDB;
use Model\DBconnection;

class CustomerController
{
    public $custemerDB;

    public function __construct()
    {
        $connection = new DBconnection("mysql:host=localhost;dbname=mvcdb", "root", "");
        $this->custemerDB = new  CustomerDB($connection->connect());
    }
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include "View/add.php";
        } else {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $customer = new Customer($name, $email, $address);
            $this->custemerDB->creat($customer);
            $message = "Success!";
            include "View/add.php";
        }
    }
    public function getAllCustomers() {
        // lay danh sach customer truyen sang view list de hien thi
        $customers = $this->custemerDB->getAll();
        include_once 'View/list.php';
    }
}
