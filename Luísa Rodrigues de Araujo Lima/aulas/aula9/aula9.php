<?php

for ($x = 0; $x <= 10; $x++){
    echo "O número é: $x <br>";
}
echo "<br>";
echo"##############################";
echo "<br>";


for ($x = 0; $x <= 10; $x++) {
    if ($x == 3) 
    break;
    echo "O número é: $x <br>";
  }
  echo "<br>";
  echo"##############################";
  echo "<br>";

  for ($x = 0; $x <= 10; $x++) {
    if ($x == 3) 
    continue;
    echo "O número é: $x <br>";
  }
  echo "<br>";
  echo"##############################";
  echo "<br>";

  $i = 1;
    while ($i < 6) {
  echo "O número é: $i <br>";
  $i++;
}

echo "<br>";
  echo"##############################";
  echo "<br>";

  $i = 1;
    while ($i <= 6) {
  echo "O número é: $i <br>";
  $i++;
}

echo "<br>";
  echo"##############################";
  echo "<br>";
  
?>