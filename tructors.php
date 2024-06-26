<?php
//constructors and destructors
//functions which are executed when object is initialized are called magic methods
class Laptop
{
    // __construct is the first pre-defined function which is executed when object is initialized
    function __construct($ram)
    {
        //we can initialize var in __construct too instead of Access Modifiers
        $this->ram = $ram;
    }

    // __destruct is the last pre-defined function which is executed when object is initialized
    function __destruct()
    {
        echo "Shutting down";
    }
}

//we can pass arg while initializing class for __construct
$dell = new Laptop(8);

echo $dell->ram;