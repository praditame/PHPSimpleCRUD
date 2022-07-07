<?php
require 'functions.php';

//cek apabila tombol submit di klik, maka ...............
if (isset($_POST['tambah'])) {
  if (insert($_POST) > 0) {
    // echo "berhasil";
    echo "<script>
    alert('data berhasil ditambah');
    document.location.href = 'index.php';</script>";
  } else {
    echo "<script>
    alert('data gagal ditambah'); </script>";
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
  <title>Insert Data</title>
</head>

<body>
  <h1>Form Data Mahasiswa</h1>
  <form action="" method="post">
    <ul>
      <li><label>
          NIM :
          <input type="text" name="nim" required>
        </label></li>
      <li><label>
          Nama :
          <input type="text" name="nama">
        </label></li>
      <li><label>
          Prodi :
          <input type="text" name="prodi">
        </label></li>
      <li><label>
          Foto :
          <input type="text" name="foto">
        </label></li>
      <li>
        <button type="submit" name="tambah">Submit</button>
      </li>
    </ul>
  </form>
</body>

</html>