<?php

  include("../include/config/config.php");

  if(isset($_POST['submit'])){
    $sql = mysqli_query($conn, "INSERT INTO `pelanggan`(`email`, `password`, `via_login`, `nickname`, `request`, `catatan`, `jenis_order`, `payment`, `tgl_pembelian`) VALUES ('$_POST[email]', '$_POST[password]','$_POST[login]','$_POST[nickname]','$_POST[request]','$_POST[note]','$_POST[rank]','$_POST[payment]',current_timestamp) ");

    if ($sql) {
      echo "<script>
            alert('Simpan Data Sukses!');
            document.location='pricing.php';
            </script>";
    } else {
      echo "<script>
            alert('Simpan Data Gagal!');
            document.location='pricing.php';
            </script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proses Input</title>

  <!-- include bootstrap -->
  <?php include("../include/cdn.php") ?>

  <style>
    .row {
      margin-bottom: 1rem;
    }
  </style>
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">

          <div class="card">
            <div class="card-header">Output</div>
            <div class="card-body">
              <p><?= "Email : " . $email ?></p>
              <p><?= "Password : " . $password ?></p>
              <p><?= "Login Via : " . $login ?></p>
              <p><?= "Nickname : " . $nickname ?></p>
              <p><?= "Request : " . $request ?></p>
              <p><?= "Catatan : " . $note ?></p>
              <p><?= "Pembayaran : " . $payment?></p>
              <p><?= "Order : " . $order?></p>
            </div>
          </div>

      </div>
    </div>

    <div class="row">
      <div class="col-md-8 mx-auto">
        <div class="card">
          <div class="card-header">Konfimasi</div>
          <div class="card-body">
            <a href="index.php" class="btn btn-primary">Jokiin Lagi?</a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php include("../include/cdn-js.php") ?>
</body>

</html>