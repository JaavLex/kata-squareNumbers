<?php

$SIZE = 5;
$incr = 1;

for ($j = 1; $j <= $SIZE; $j++) {
  for ($i = 1; $i <= $SIZE; $i++) {
    if ($incr < 10) {
      print("0$incr ");
    } else {
      print("$incr ");
    }
    $incr++;
  }
  print("\n");
}
?>
