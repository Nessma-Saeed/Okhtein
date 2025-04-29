<?php

namespace App;
use mysqli;
class DB
{
    private string $hostname = "localhost";
    private string $username = "root";
    private string $password = "";
    private string $database = "okhtein_db";
    public mysqli $Connection;

    public function __construct() //init  // $this-> self in python
    /*called auto. when making an obj. from DB*/
    {
        // Parameters: hostname username password database بعرفهم فوق 
        $this->Connection = new mysqli($this->hostname, $this->username, $this->password, $this->database);
    }

    public function checkConnection()
    {
        if ($this->Connection->connect_error == null)
            echo "Connected To Database";
        else
            echo "Not Connected To Database";
    }
}