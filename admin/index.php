<?php
require 'functions.php';
session_start();

$mahasiswa = query("SELECT * FROM mahasiswa");

//button cari
if (isset($_POST['cari'])) {
  $mahasiswa = cari($_POST['key']);
}

?>

<!-- halaman HTML sbg halaman utama -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belajar CRUD PHP</title>
</head>

<body>
  <p>Halo <b><?php echo $_SESSION['user']; ?><br></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
  <a href="logout.php">logout</a>

  <h1>Data Mahasiswa</h1>
  <a href="tambah.php">Tambah Data</a><br><br>

  <form action="" method="POST">
    <input type="text" name="key" placeholder="Cari data" autocomplete="off" autofocus>
    <button type="submit" name="cari">Cari</button>
  </form>
  <table border="1" cellspacing="0" cellpadding="">
    <!-- baris header -->
    <tr>
      <th>No</th>
      <th>Foto</th>
      <th>NIM</th>
      <th>Nama</th>
      <th>Prodi</th>
      <th>Aksi</th>
    </tr>

    <!-- jika data yg dicari tdk ditemukan -->
    <?php if (empty($mahasiswa)) :     ?>
      <tr>
        <td colspan="6">
          <p>data tidak ditemukan</p>
        </td>
      </tr>
    <?php endif; ?>

    <!-- baris data -->
    <!-- looping -->
    <?php $i = 1;
    foreach ($mahasiswa as $mhs) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="../img/<?= $mhs['foto']; ?>" alt="foto" width="50px"></td>
        <td><?= $mhs['nim']; ?></td>
        <td><?= $mhs['nama']; ?></td>
        <td><?= $mhs['prodi']; ?></td>
        <td><a href="ubah.php?id=<?= $mhs['id']; ?>">Ubah</a> | <a href="hapus.php?id=<?= $mhs['id']; ?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')">Hapus</a></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>