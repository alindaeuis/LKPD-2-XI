<?php
function cekNilai($nama, $jawabanSiswa) {
  $jawabanBenar =  ["A", "D", "C", "C", "B", "A", "E", "B", "A", "E"];

  $jumlahBenar = 0;
  $jumlahSalah = 0;~

  $hasil = [];

  foreach($jawabanSiswa as $index => $result) {
    if($result === $jawabanBenar[$index]) {
      $hasil[] = ($index + 1);
      $jumlahBenar++;
    }else {
      $hasil[] = ($index + 1);
      $jumlahSalah++;
    }

  }
  // foreach($hasil as $res) {
  //   echo $res;
  // }

  echo "Nama: ". $nama . "<br>";
  echo "Jumlah Jawaban Benar: " . "<b>".$jumlahBenar . "</b>". "<br>";
  echo "Jumlah Jawaban salah: " ."<b>".$jumlahSalah. "</b>";
}

// $nama = "alinda";
// $jawaban = ["B", "D", "C", "C", "B", "A", "D", "A", "E", "E"];

cekNilai("alinda",  ["B", "D", "C", "C", "B", "A", "D", "A", "E", "E"]);