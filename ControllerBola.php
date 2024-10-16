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
                <h3 style="text-align: center;">Bola</h3>
                <br>
                <div class="col-12">
                <label for="jari_bola" class="form-label">Jari-Jari:</label>
                <input type="number" id="jari_bola" name="jari_bola" class="form-control" required>
                <div class="invalid-feedback">Silahkan Masukkan Lebar</div></div><br>
                </div>
<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Bola
    $jari_bola = $_POST['jari_bola'];
    $luas_bola = 4 * pi() * pow($jari_bola, 2);
    $volume_bola = (4/3) * pi() * pow($jari_bola, 3);

    echo "<hr>"."Hasil Penghitungan Bola dengan Jari-Jari : ". $jari_bola ."<br>";
    echo '<div class="col-12">
            <label for="sisi" class="form-label">Volume Bola:</label>
            <input class="form-control" type="text" value="'. $volume_bola . ' cm^3'.'"aria-label="Disabled input example" disabled readonly></div>';
    echo '<div class="col-12">
            <label for="sisi" class="form-label">Luas Permukaan Bola:</label>
            <input class="form-control" type="text" value="'. $luas_bola . ' cm^2"aria-label="Disabled input example" disabled readonly></div>';
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