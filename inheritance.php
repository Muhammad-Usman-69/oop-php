<?php

class Land
{
    public $plots = [];

    function __construct()
    {
        echo "Parent Class";
    }
}

//inheritance is used to inherit the properties of class
class Plot extends Land
{

    public $plots;

    function __construct()
    {
        //we can call previous function like this
        parent::__construct();

        echo "Child Class";
    }
}

$plot = new Plot();