<?php 
include("../../include/config/config.php");

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = mysqli_query($conn, "SELECT * FROM admin where username = '$username' and password  = '$password'");
$checking = mysqli_num_rows($sql);

if($checking > 0) {
  session_start();
  $_SESSION['username'] = $username;
  $_SESSION['status'] = 'login';

  header("location:dashboard.php");
} else {
  header("location:index.php");
}