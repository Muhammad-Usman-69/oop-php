<?php
//we can't inherit two classes at once in php so we use interface to inherit multiple classes. It also prevent multiple use of abstract word

//although it is the same as abstraction. It allows only declaring public function and use "interface" to declare class

interface Mouse {
    public function setMouse($name);
}

interface MousePad {
    public function setMousePad($name);
}

//interfaces are inherited through implements instead of inherit and impletemented/inherited functions must be defined like abstracted functions
class PointingDevices implements Mouse, MousePad {
    public $mouse;
    public $mousePad;
    
    function setMouse($name) {
        $this->mouse = $name;
    }

    function setMousePad($name) {
        $this->mousePad = $name;
    }

    function getProp() {
        echo "Mouse: " . $this->mouse;
        echo "<br>";
        echo "Mouse Pad: " . $this->mousePad;
    }
}

$mouse = new PointingDevices();

$mouse->setMouse("hp");
$mouse->setMousePad("local");

$mouse->getProp();