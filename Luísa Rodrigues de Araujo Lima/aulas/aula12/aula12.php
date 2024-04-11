<?php
echo "<br>";
echo"<h1>Aula 12</h1>";
echo "##############################";

$cars = [
    0 => "Volvo",
    1 => "BMW",
    2 => "Mercedes"

];

echo "<br>";
echo $cars["0"];
echo "<br>";
echo $cars["1"];

echo "<br>";

$myCar = [
    "brand" => "Ford",
    "model" => "Mustang",
    "year" => 1964
  ];

$cars = [];
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Mecedes";

echo "<br>";
echo "##############################";
echo "<br>";

$cars = array("brand"=>"Ford", "model"=>"Mustang GT", "year"=>1964);
$cars["year"] = 2024;

foreach ($cars as $x => $y){
    echo "$x: $y <br>";
}


?>