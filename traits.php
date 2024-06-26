<?php
//trait are used for efficiency. Using trait, it can be inherited by multiple classes and we can change props in trait to change everywhere instead of changing them individually

trait Good
{
    function showGood($n)
    {
        //changing here will change where it is used
        echo "$n is a good person";
    }
}

trait Handsome
{
    function showHandsome($n)
    {
        echo "$n is a handsome person";
    }
}

class TraitsOne
{
    //traits can be inherited by "use"
    use Good, Handsome;
}

//traits are inherited by multiple classes. We use this to prevent individual functions
class TraitsTwo
{
    use Good;
}

$Ali = new TraitsOne();

$Ali->showGood("Ali");
echo "<br>";
$Ali->showHandsome("Ali");
echo "<br>";


$Ahmad = new TraitsTwo();

$Ahmad->showGood("Ahmad");