<?php

// same operation may behave differently in different class

/*
can be implemented through:
1) abstraction
2) interface
*/

// for example. 
//During a cricket match, match may start but each player will play differently.
// A bowler will bowl. A batter will bat etc

abstract class Cricket {
    abstract function start();
}

class Batsman extends Cricket {
    function start()
    {
        echo "Start doing sixers";
    }
}

class Bowler extends Cricket {
    function start()
    {
        echo "Start outing batsmen";
    }
}

$bobzi = new Batsman();
$bobzi->start();

echo "<br>";

$amir = new Bowler();
$amir->start();

//match has started and bobzi started doing sixers and amir started outing batsman