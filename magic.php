<?php
//special methods which override PHP's default's action when certain actions are performed on an object
//repesented by __ before the function e.g/ ___construct

class Magic
{
    public $name;

    //automatically executed when object is initialized 
    function __construct()
    {
        $this->name = "Billu Butt called as a function";
    }

    //this method is called when a script tries to call an object as a function 
    function __invoke()
    {
        echo $this->name;
    }
}

$obj = new Magic();

//calling object as a function
$obj();
