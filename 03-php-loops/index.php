<?php

//While  ciclo que imprime la tabla del 5

$i = 0;
while ($i < 50) {
    $i+=5;
    echo $i;
echo"<br>";
}

$i = 1;
while ($i <= 10) {
  echo "5 x $i = " . (5 * $i) . "<br>";
  $i++;
}

//for imprime una lista de nombres 


$i = 0;
for ($i = 3; $i <= 10; $i++) {
    if ($i % 3 == 0) {
        echo "$i multiplo de 3";
    }
    echo"<br>";
}

// foreach 

$vengadores = array("spiderman", "ironman", "panteranegra");

foreach ($vengadores as $x) {
  if ($x == "spiderman") continue;
  echo "$x <br>";
}

?>