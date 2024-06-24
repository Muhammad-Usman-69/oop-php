<?php

//basic class format
class System
{
    //class has functions
    function shutdown()
    {
        echo "Shutting Down";
    }

    function start()
    {
        echo "Starting System";
    }

    //variable are initialized by Access Modifiers such as public
    public $ram = 2;

    //$this is the instance of object for class. Two object can't have same $this.
    //$this can represent variable in class for the object which calls it
    function increaseRam($i)
    {
        return $this->ram += $i;
    }
}

//creating new object of system
$lenovo = new System();

//function of system can be accessible by object
$lenovo->start();
$lenovo->shutdown();

//increasing ram
$lenovo->increaseRam(2);

//printing variable
echo $lenovo->ram;
