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
                <p class="small">1. Persegi</p>
                <p class="small">2. Persegi Panjang</p>
                <p class="small">3. Bola</p>
                <p class="small">4. Kerucut</p>
              </div>
              <form method="post" class="row g-3 needs-validation">
                <div class="col-12">
                <label for="condition">Pilihan :</label><br>
                <input type="text" class="form-control" id="condition" name="condition">
                </div>
            <div class="col-12">
            <button type="submit" name="submit" class="btn btn-danger w-100">Submit</button>
            </div>
        </form>
        <?php
        $persegi = false;
        $persegiPanjang = false;
        $Bola = false;
        $Kerucut = false;
        if (isset($_POST['submit'])) {
            // Kondisi untuk menampilkan lanjutan
            if ($_POST['condition'] == '1') {
                Header ("location:ControllerPersegi.php");
            } elseif ($_POST['condition'] == '2') {
                Header ("location:ControllerPP.php");
            } elseif ($_POST['condition'] == '3') {
                Header ("location:ControllerBola.php");
            }elseif ($_POST['condition'] == '4') {
                Header ("location:ControllerKerucut.php");
            } else{
                echo "Error, Masukkan Pilihan Sesuai dengan Menu!";
            }
        }
        ?>
    </div>

    <!-- Modal 
    <div class="modal" id="myModalPersegi">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Persegi</h4>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="myModalPP">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Persegi Panjang</h4>
                </div>
                <div class="modal-body">
                    Modal body..
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="myModalBola">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Bola</h4>
                </div>
                <div class="modal-body">
                    Modal body..
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="myModalKerucut">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Kerucut</h4>
                </div>
                <div class="modal-body">
                    Modal body..
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            <?php if ($persegi) { ?>
                $("#myModalPersegi").modal('show');
            <?php } ?>
        });
        $(document).ready(function(){
            <?php if ($persegiPanjang) { ?>
                $("#myModalPP").modal('show');
            <?php } ?>
        });
        $(document).ready(function(){
            <?php if ($Bola) { ?>
                $("#myModalBola").modal('show');
            <?php } ?>
        });
        $(document).ready(function(){
            <?php if ($Kerucut) { ?>
                $("#myModalKerucut").modal('show');
            <?php } ?>
        });
    </script>
    -->
    <hr>
    <?php include "Footer.php"?>
</body>
</html>