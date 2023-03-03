<!-- php tag for get user input -->
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

        <!-- php tag for get user input -->
        <?php if ($_POST) : ?>
        <?php // deklarasi variable
        $email = $_POST['email'];
        $password = $_POST['password'];
        $login = $_POST['login'];
        $nickname = $_POST['nickname'];
        $request = $_POST['request'];
        $note = $_POST['note'];
        $payment = $_POST['payment'];
        $order = $_POST['rank']
        ?>
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
        <?php endif; ?>

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