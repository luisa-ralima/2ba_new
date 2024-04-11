<?php

echo "<br>";
echo"##############################";
echo "<br>";

$colors = array("red", "green", "blue", "yellow", "pink", "black");

foreach($colors as $x) {
    echo "$x <br>";
}

echo "<br>";
echo"##############################";
echo "<br>";

$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach ($members as $x => $y) {
  echo "$x : $y <br>";
}
echo "<br>";
echo"##############################";
echo "<br>";

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") 
  break;
  echo "$x <br>";
}
echo "<br>";
echo"##############################";
echo "<br>";


$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") 
  continue;
  echo "$x <br>";
}
echo "<br>";
echo"##############################";
echo "<br>";
?>
