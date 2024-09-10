<?php
$square = 8;
$split = 4;
for ($x = 1; $x <= $square; $x++) {
  for ($y = 1; $y <= $square; $y++) {
    echo "*";
  }
  echo "<br>";
  if ($x % $split == 0 && $x != $square) {
    echo "<br>";
  }
}
