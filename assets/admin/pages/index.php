<?php include("../../include/config/config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jokiinaja | Login</title>

  <?php include("../../include/cdn.php"); ?>
  <link rel="stylesheet" href="../../css/style.css">
</head>
<style>
  label {
    color: #fff;
  }

  .row {
    height: 100vh;
  }
</style>

<body>

  <div class="row align-items-center">
    <div class="mx-auto col-10 col-md-8 col-lg-6">
      <form action="login.php" method="post" onsubmit="return validation()">

        <div class="col-md-6">
          <label for="username">Username</label>
          <input type="text" name="username" id="username" class="form-control">
        </div>

        <div class="col-md-6">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" class="form-control">
        </div>

        <input type="submit" value="Login" class="btn btn-primary mt-3">
      </form>
    </div>
  </div>


  <?php include("../../include/cdn-js.php"); ?>
</body>

<script>
  function validation() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    if (username != "" && password != "") {
      return true;
    } else {
      alert('Username dan password harus diisi!');
      return false;
    }
  }
</script>

</html>