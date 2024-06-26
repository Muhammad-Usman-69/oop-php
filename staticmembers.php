<?php

//static members are used to directly access class props instead of using object

class Fan {
    //we can declare static var/func using static between access modifies and var/func
    public static $name = "Gfc fans";
    public static function getName() {
        //we use self:: instead of $this for static var
        echo self::$name;
    }
}

class CeilingFan extends Fan {
    //we can access parent static props through parent::
    function __construct($n) {
        echo "Ceiling Fan: " . parent::$name . $n;
    }
}

echo Fan::$name;
echo "<br>";
echo Fan::getName();
echo "<br>";
$nabeel = new CeilingFan("Nabeel");