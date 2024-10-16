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
                <h3 style="text-align: center;">Persegi</h3>
                <br>
                <label for="sisi" class="form-label">Sisi Persegi:</label>
                <input type="number" id="sisi" name="sisi"class="form-control"><br>
                </div>
<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Persegi
    $sisi = $_POST['sisi'];
    $keliling_persegi = 4 * $sisi;
    $luas_persegi = $sisi * $sisi;

    echo "<hr>"."Hasil Penghitungan Persegi dengan Sisi : ". $sisi ."<br>";
    echo '<div class="col-12">
            <label for="sisi" class="form-label">Keliling Persegi:</label>
            <input class="form-control" type="text" value="'. $keliling_persegi . '"aria-label="Disabled input example" disabled readonly></div>';
    echo '<div class="col-12">
            <label for="sisi" class="form-label">Luas Persegi:</label>
            <input class="form-control" type="text" value="'. $luas_persegi . '"aria-label="Disabled input example" disabled readonly></div>';
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