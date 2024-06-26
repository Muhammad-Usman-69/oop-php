<?php
//encapsulation is a functionability by which we can show neccessary data and hide other data
//access modifiers is used in it

class Mobile
{
    //this is a public var which can be accessed and change externally
    public $publicNum = 10;

    //however a protected var/function can't be accessed and changed externally
    protected $protectedNum = 30;

    //for this we use getter and setter function to access and change it's value
    function getProtNum() {
        echo $this->protectedNum;
    }
    function setProtNum($num) {
        $this->protectedNum = $num;
    }

    //a private var/function is same as protected but it's not inherited by child class
    private $privateNum = 50;
    private function privateFunc() {
        echo $this->privateNum;
    }
    //making public function to access private (same as protected but in parent class only) function
    function getPrivNum() {
        return $this->privateFunc();
    }
}

$samsung = new Mobile();

//changing public class var
$samsung->publicNum = 20;

echo $samsung->publicNum;
echo "<br>";

//accessing and changing protected number through a getter and setter
$samsung->setProtNum(40);
$samsung->getProtNum();
echo "<br>";

//accessing private (same as protected but in parent class only) function through a public function
$samsung->getPrivNum();