<?php 
for($i=1;$i<=30;$i++) {
  if(90 % $i === 0) {
    $hasil = 90 / $i;
    echo "90". ":". $i . "= ". $hasil . "<br>";
  }
}