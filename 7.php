<?php
function limitText($text, $limit) {
  // strlen untuk menghitung banyaknya karakter dari suatu string
  if(strlen($text) > $limit) {
    $text = substr($text, 0, 50) . "...";
  }

  return $text;
}

echo "<b>"."Kalimat awal: ". "</b>". "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos autem reprehenderit quidem eveniet perspiciatis, est accusamus architecto quia hic inventore provident molestias. Adipisci tempora perferendis error ratione expedita facilis minus. ". "<br>";

echo limitText("Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos autem reprehenderit quidem eveniet perspiciatis, est accusamus architecto quia hic inventore provident molestias. Adipisci tempora perferendis error ratione expedita facilis minus.", 50);