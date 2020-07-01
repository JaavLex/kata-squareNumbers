<?php

$SIZE = 10;
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

print("\n\n\n");

$incr = 0;
$z = [];

for ($i = 1; $i <= $SIZE*$SIZE; $i++) {
  array_push($z, $i);
}

for ($j = 1; $j <= $SIZE; $j++) {
  $PLACER = 1;
  print("0");
  print($z[$incr]);
  print(" ");
  for ($k = 2; $k <= $SIZE; $k++) {
    if ($z[$incr+($PLACER*$SIZE)] < 10) {
      print("0");
    }
    print($z[$incr+($PLACER*$SIZE)]);
    print(" ");
    $PLACER++;
  }
  $incr++;
  print("\n");
}

?>
