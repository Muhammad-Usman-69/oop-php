<?php

//connecting to db
class Database {
    public function connect($host, $user, $pass, $db) {
        //we don't use same code as in procedural one, instead we use predefined object:
        $conn = new mysqli($host, $user, $pass, $db);

        //diagnosing error
        if ($conn->connect_error) {
            echo $conn->connect_error;
        } else {
            echo "Connected Successfully";
        }
    }
}

// $obj = new Database();
// $obj->connect("localhost", "root", "", "oop");