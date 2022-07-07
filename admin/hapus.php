<?php
require 'functions.php';

//ambil id dari url yg dikirim
$id = $_GET['id'];

if (delete($id) > 0) {
  echo "<script>
    alert('data berhasil dihapus');
    document.location.href = 'index.php';</script>";
}
