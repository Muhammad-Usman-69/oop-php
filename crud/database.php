<?php

//connecting to db
class Database
{
    public $host;
    public $user;
    public $pass;
    public $db;

    public function __construct($host, $user, $pass, $db)
    {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->db = $db;
    }

    public function connect()
    {
        //we don't use same code as in procedural one, instead we use predefined object:
        $conn = new mysqli($this->host, $this->user, $this->pass, $this->db);

        //diagnosing error
        if ($conn->connect_error) {
            echo $conn->connect_error;
            exit();
        } else {
            //returning the object
            return $conn;
        }
    }
}

//fetching data from db
class Queries extends Database
{
    public function getData()
    {
        $sql = "SELECT * FROM `users`";

        //using object inherited from class by function connect(). Using prepared statement and then executing it
        $conn = $this->connect();
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        //fetching data
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        $stmt->close();

        echo print_r($data);
    }
}

$obj = new Queries("localhost", "root", "", "oop");

$obj->getData();