<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="AMIK.png">
    <title>Rumus Matematika</title>
    <style>
        body {
            background-image: url(102.jpg) !important;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">

<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

        <div class="d-flex justify-content-center py-4">
          <a href="index.html" class="logo d-flex align-items-center w-auto">
            <img src="AMIK.png" alt="" height="100">
          </a>
        </div><!-- End Logo -->
          <div class="card mb-3">

            <div class="card-body">

              <div class="pt-4 pb-2">
                <h5 class="card-title text-center pb-0 fs-4">Rumus Matematika</h5>
                <br>
              <form method="post" class="row g-3 needs-validation">
                <div class="col-12">
                <h3 style="text-align: center;">Persegi Panjang</h3>
                <br>
                <div class="col-12">
                <label for="panjang" class="form-label">Panjang:</label>
                <input type="number" id="panjang" name="panjang" class="form-control" required>
                <div class="invalid-feedback">Silahkan Masukkan Panjang</div></div>
                <div class="col-12">
                <label for="lebar" class="form-label">Lebar:</label>
                <input type="number" id="lebar" name="lebar" class="form-control" required>
                <div class="invalid-feedback">Silahkan Masukkan Lebar</div></div><br>
                </div>
<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Persegi Panjang
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];
    $keliling_persegi_panjang = 2 * ($panjang + $lebar);
    $luas_persegi_panjang = $panjang * $lebar;

    echo "<hr>"."Hasil Penghitungan Persegi Panjang dengan <br>
    Panjang : ". $panjang ."<br>" .
    "Lebar : ". $lebar."<br>";
    echo '<div class="col-12">
            <label for="sisi" class="form-label">Keliling Persegi:</label>
            <input class="form-control" type="text" value="'. $keliling_persegi_panjang . '"aria-label="Disabled input example" disabled readonly></div>';
    echo '<div class="col-12">
            <label for="sisi" class="form-label">Luas Persegi:</label>
            <input class="form-control" type="text" value="'. $luas_persegi_panjang . '"aria-label="Disabled input example" disabled readonly></div>';
  }
?>
            <div class="col-12">
            <button type="submit" name="submit" class="btn btn-danger w-100">Submit</button>
            <hr>
            <a href="View.php" class="btn btn-warning w-100" role="button">Back</a>
            </div>
        </form>
        <hr>
        <?php include "Footer.php"?>
</body>
</html>