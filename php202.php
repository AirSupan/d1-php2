<?php
$msg = "Welcome to Thailand";
$name = "Mark";
$x = 5;
$y = 10;
$z = 0;

    function myTest() {
        global $name;
        $msg = 'Hello ';
        global $x,$y;
        //$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        $y = $x+$y;
        echo $msg.$name.' ',$y,"<br>";
    }
        echo $msg."<br />";
        myTest();
?>