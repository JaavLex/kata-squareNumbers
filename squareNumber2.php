<?php

$SIZE = 6;
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

function printTableau($tableau) {
  foreach ($tableau as $ligne) {
    foreach ($ligne as $colonne) {
      print $colonne . " ";
    }
    print "\n";
  }
}
function initTableau($size) {
  $monTableau = [];
  for ($i=0; $i < $size; $i++) {
    // see https://www.php.net/manual/en/function.array-fill.php
    $monTableau[] = array_fill(0, $size, 'XX');
  }
  return $monTableau;
}

printTableau(initTableau(6));
print "\n";

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

print "\n";





function turn($x, $y) {

}

function spiral($SIZE) {
  // On crée le tableau avec des valeurs "--"
  $tableau = initTableau($SIZE);
  printTableau($tableau);
  print "Tableau en spirale de taille $SIZE \n";

  $TOTVAL = ($SIZE*$SIZE);

  $offset_ligne = 0;
  $offset_colonne = 0;
  // parcourt la première ligne de droite à gauche
  // et remplace les "--" par les bonnes valeurs
  // ←←←←←←←←←←
  for ($c = $SIZE-1-$offset_colonne; $c >= $offset_colonne; $c--) {
    $tableau[$offset_ligne][$c] = $TOTVAL--;
  }
  $offset_ligne++;
  // Au bout de la première ligne, on aimerait "tourner"
  // pour descendre et compléter la première colonne
  // ↓↓↓↓↓↓↓↓↓↓↓↓↓↓
  for ($l = $offset_ligne; $l <= $SIZE-$offset_ligne; $l++) {
    $tableau[$l][$offset_colonne] = $TOTVAL--;
  }
  $offset_colonne++;
  // Au bout de la première colonne, on aimerait "tourner"
  // pour aller à droite et compléter la dernière ligne
  // →→→→→→→→→→→→→→
  for ($c = $offset_colonne; $c <= $SIZE-$offset_colonne; $c++) {
    $tableau[$SIZE-($offset_ligne)][$c] = $TOTVAL--;
  }
  $offset_ligne++;
  // Au bout de la dernière ligne, on aimerait "tourner"
  // pour monter et compléter la dernière colonne
  // ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑
  for ($l = $SIZE-$offset_ligne; $l >= $offset_ligne-1; $l--) {
    $tableau[$l][$SIZE-($offset_colonne)] = $TOTVAL--;
  }
  $offset_colonne++;
  // parcourt la première ligne de droite à gauche
  // et remplace les "--" par les bonnes valeurs
  // ←←←←←←←←←←
  for ($c = $SIZE-$offset_colonne; $c >= $offset_colonne; $c--) {
    $tableau[$offset_ligne-1][$c] = $TOTVAL--;
  }
  $offset_ligne++;
  // Au bout de la première ligne, on aimerait "tourner"
  // pour descendre et compléter la première colonne
  // ↓↓↓↓↓↓↓↓↓↓↓↓↓↓
  for ($l = $offset_ligne; $l <= $SIZE-$offset_ligne; $l++) {
    $tableau[$l][$offset_colonne] = $TOTVAL--;
  }
  $offset_colonne++;
  // Au bout de la première colonne, on aimerait "tourner"
  // pour aller à droite et compléter la dernière ligne
  // →→→→→→→→→→→→→→
  for ($c = $offset_colonne; $c <= $SIZE-$offset_colonne; $c++) {
    $tableau[$SIZE-($offset_ligne)][$c] = $TOTVAL--;
  }
  $offset_ligne++;
  // Au bout de la dernière ligne, on aimerait "tourner"
  // pour monter et compléter la dernière colonne
  // ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑
  for ($l = $SIZE-$offset_ligne; $l >= $offset_ligne-1; $l--) {
    $tableau[$l][$SIZE-($offset_colonne)] = $TOTVAL--;
  }
  $offset_colonne++;

  // ----------------------------------------------------------




  printTableau($tableau);
}
//
  // for ($j = $SIZE; $j >= 0; $j--) {
    // $tableau[$i][$j] = $TOTVAL--;
  // }


spiral($SIZE);

?>
