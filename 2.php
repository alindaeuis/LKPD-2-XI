<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>No 2 LKPD 2</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <div class="container  bg-light p-2 w-50 mt-5 rounded-top-5 shadow">
    <h1 class="fs-2 mt-5 text-center">Mengecek Total Belanjaan</h1>
  <form method="post" action="" class="w-75  mx-auto my-4 ">
      <div class="mb-3">
        <input type="number" class="form-control" id="totalBelanjaan" name="totalBelanjaan" placeholder="Total Belanjaan.."> 
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>
<?php
$namaHari = date('l');
$totalBelanjaan = 0;
$diskon = 0;

if(isset($_POST["submit"])) {
  $totalBelanjaan = $_POST["totalBelanjaan"];

  if ($totalBelanjaan > 100000) {
    $diskon = 7 / 100;
    $totalHarga = $totalBelanjaan - ($totalBelanjaan * $diskon);
  } else if ($namaHari === 'Tuesday') {
    $diskon = 5 / 100;
    $totalHarga = $totalBelanjaan - ($totalBelanjaan * $diskon);
  } else {
    $totalHarga = $totalBelanjaan;
  }
  echo "<div class='text-center fs-4 mt-5 bg-light w-50 p-3 mx-auto shadow'>";
  echo "Hari ini: " . $namaHari . "<br>";
  // number = yang akan di format
  // decimal = jumlah digit yang akan ditampilkan
  // decimal saparator = sebagai pemisah decimal
  // thousands saparator = sebagai pemisah ribuan
  echo "Total Pembelanjaan: " . "Rp." . number_format($totalBelanjaan, 0, ".") . "<br>";
  echo "Total yang harus dibayar: " . "Rp." . number_format($totalHarga, 0, ".") . "<br>";
  echo "</div>";
}




