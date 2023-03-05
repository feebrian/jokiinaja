<?php 
include("../../include/config/config.php"); 
session_start();

if($_SESSION['status'] != 'login'){
  header("location:index.php");
}

echo("Hai selamat datang," . $_SESSION['username']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jokiinaja Admin Dashboard</title>
</head>
<body>
  
</body>
</html>