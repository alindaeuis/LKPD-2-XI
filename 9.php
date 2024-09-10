<?php
function uangKoin($jumlahUang)
{
  $jenisKoin = [1000, 500, 200];
  $hasil = [];
  $uangAsli = $jumlahUang;

  foreach ($jenisKoin as $koin) {
    if ($jumlahUang >= $koin) {
      // dividend & divisor
      $jumlahKoin = intdiv($jumlahUang, $koin);
      // simpan hasil jumlah koin dalam array
      $hasil[$koin] = $jumlahKoin;
      // kurangin jumlah uang dengan koin yang telah digunakan
      $jumlahUang -= $jumlahKoin * $koin;
    }
  }

  // $koin =  implode("<br>", array_keys($hasil));
  echo "Jenis koin untuk uang Rp. " . $uangAsli . " : " . "<br>";
  // echo $koin;

  foreach ($hasil as $koin => $jumlah) {
    echo "<li>" . $koin . " = " . $jumlah . " Koin" . "</li>";
  }
  // if ($jumlahKoin != 0) {
  //   echo "<li>" . "Sisa Koin = " . $jumlahUang . "</li>";
  // }
}

uangKoin(1000);