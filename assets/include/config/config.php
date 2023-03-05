<?php

  $host = "localhost";
  $usr = "root";
  $pass = "adamfebrian";
  $db = "jokiinaja";

  $conn = mysqli_connect($host, $usr, $pass, $db);

  if(!$conn){
    die("Koneksi gagal " . mysqli_connect_error());
  } else {
    echo "Koneksi berhasil";
  }
