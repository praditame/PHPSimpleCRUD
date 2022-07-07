<?php

function koneksi()
{
  $con = mysqli_connect('localhost', 'root', '', 'pwd');
  if (!$con) {
    die("Koneksi gagal:" . mysqli_connect_error());
  }
  return $con;
}
