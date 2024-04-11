<?php
echo "<br>";
echo "##########################################";
echo "<br>";
    if (3 < 5){
        echo "have a good day and a good night!";
    }
    echo "<br>";
    echo "##########################################";
    echo "<br>";

    $t = 10;
    if ($t != 20) {
        echo "have a good day and a good night!";
    }
    echo "<br>";
    echo "##########################################";
    echo "<br>";

    $t = 10;
    if ($t == 20) {
        echo "have a good day and a good night!";
    } else{
        echo "have a good evening!";
    }
    echo "<br>";
    echo "##########################################";
    echo "<br>";

    $z = date("H") -3;
    if ($z < "19"){
        echo "have a good day!";
    }else{
        echo "have a good night!";
    }
    echo "<br>";
    echo "##########################################";
    echo "<br>";

    $y = date("H") -3;
    if ($y < "8"){
        echo "have a good morning!";
    }elseif ($y < "12"){ 
        echo "have a good day!";
    }else{
        echo "have a good night!";
    }
    echo "<br>";
    echo "##########################################";
    echo "<br>";
?>