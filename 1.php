<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>No 1 LKPD 2</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- <style>
      h1{
        text-align: center;
        margin: 20px auto;
        font-size: 40px;
        
      }
    </style> -->
</head>

<body>
  <div class="container bg-light p-2 w-50 mt-5 rounded-top-5 shadow">
    <h1 class="fs-2 mt-5 text-center">Mengecek kalimat (No 1 LKPD 2)</h1>
    <form method="post" action="" class="w-75  mx-auto my-4 ">
      <div class="mb-3">
        <input type="text" class="form-control" id="text" name="text" placeholder="Masukkan text.."> 
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
if(isset($_POST["submit"])) {
  $text = $_POST["text"];
  $str = preg_replace('/[\w\s]/', '', $text);
// pettern = "menghapus alphabet, angka, dan spasi"
// replace = "mengganti string di text utama apabila $text1 dihapus"
// string yang akan dihapus atau diubah
echo "<div class='text-center fs-4 mt-5 bg-light w-50 p-3 mx-auto shadow'>";
if ($str) { //preg_replace: mengembalikan string menjadi substring dan melakukan pencarian berdasarkan regex (pencocokan string yang memiliki pola tertentu)
  echo "<b>" ."Kalimat Awal: ". "</b>". $text ;
  echo "<br>";
  //str_split mengganti string ke array
  // implode mengubah array ke string
  echo "Karakter yang terdapat pada kalimat: " . implode(",", str_split($str)); //mengubah array menjadi string
} else {
  echo "<b>" . "Kalimat Awal:". "</b>" . $text ;
  echo "<br>";
  echo "Tidak terdapat simbol dalam kalimat";
}
echo "</div>";
}
?>