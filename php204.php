<?php
    $x = "Welcome to PHP";
    $y = "My Website";
    $version = 4.0;
    $isTrue = true; //boolean
    $cars = array("Toyota", "Nisan", "Honda");
    
        if($isTrue){
            echo $x."<br/>";
            echo $y."<br/>";
            echo $version."<br/>";
            echo $cars[0]."<br/>";
            echo var_dump($x)."<br/>";
            echo var_dump($version)."<br/>";
           // echo var_dump($cars);
        }
        else{
            echo "It is false";
        }
    echo "<br>";
    echo "end";

?>