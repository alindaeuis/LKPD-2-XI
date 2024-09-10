<?php
$barang = [
  [
    "nama_barang" => "Pasta Gigi",
    "harga_barang"=> 18000,
    "jumlah_beli" => 1,
  ],
  [
    "nama_barang" => "Sabun Mandi",
    "harga_barang" => 5000,
    "jumlah_beli" => 3,
  ],
  [
    "nama_barang" => "Aloe Vera Sheet Mask",
    "harga_barang" => 15000,
    "jumlah_beli" => 4,
  ],
];

$total = 0;
foreach($barang as $items) {
  $totalBelanjaan =  $items['harga_barang'] * $items["jumlah_beli"];
  echo $items['nama_barang'] . "(".$items["jumlah_beli"].")". ": ". $totalBelanjaan. "<br>";

  $total += $totalBelanjaan;
}
echo "Total harga yang harus dibayar adalah " . "<b>". "Rp. ". "</b>" . number_format($total, 0, ",", ".");



