<?php
$car = array("brand"=>"Ford", "model"=>"Mustang GT", "year"=>1964);
var_dump($car);

echo "<br>";
echo"##############################";
echo "<br>";

$car = array("brand"=>"Ford", "model"=>"Mustang GT", "year"=>1964);
echo $car["brand"];
echo "<br>";
echo $car["model"];
echo "<br>";
echo $car["year"];

echo "<br>";
echo"##############################";
echo "<br>";

$car = array("brand"=>"Ford", "model"=>"Mustang GT", "year"=>1964);

foreach($car as $x=>$y){
    echo "$x: $y <br>";
}

?>