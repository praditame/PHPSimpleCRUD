<?php
require 'functions.php';

//ambil id dari URL
$id = $_GET['id'];
// var_dump($id);

//query data mhs berdasarkan id 
// $mhs = [];
$mhs = query("SELECT * FROM mahasiswa where id = '$id'");

//jika tdk ada ID di url
if (!isset($_GET['id'])) {
  header("Location:index.php");
  exit;
}
//cek apabila tombol submit di klik, maka ...............
if (isset($_POST['ubah'])) {
  if (update($_POST) > 0) {
    // echo "berhasil";
    echo "<script>
    alert('data berhasil diubah');
    document.location.href = 'index.php';</script>";
  } else {
    echo "<script>
    alert('data gagal diubah'); </script>";
  }
}


?>


<!-- form -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Data</title>
</head>

<body>
  <h1>Form Ubah Data Mahasiswa</h1>

  <form action="" method="post">
    <!-- hidden id form utk kirim id -->
    <input type="hidden" name="id" value="<?= $mhs[0]['id']; ?>">
    <ul>
      <li><label>
          NIM :
          <input type="text" name="nim" required" value="<?= $mhs[0]['nim']; ?> ">
        </label></li>
      <li><label>
          Nama :
          <input type=" text" name="nama" value="<?= $mhs[0]['nama']; ?>">
        </label></li>
      <li><label>
          Prodi :
          <input type="text" name="prodi" value="<?= $mhs[0]['prodi']; ?>">
        </label></li>
      <li><label>
          Foto :
          <input type="text" name="foto" value="<?= $mhs[0]['foto']; ?>">
        </label></li>
      <li>
        <button type="submit" name="ubah">Update</button>
      </li>
    </ul>
  </form>
</body>

</html>