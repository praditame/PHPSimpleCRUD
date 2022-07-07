<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'pwd');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);
  $dataArray = [];
  while ($data = mysqli_fetch_assoc($result)) {
    $dataArray[] = $data;
  }
  return $dataArray;
}

function insert($insert)
{
  $conn = koneksi();

  $nim = $insert['nim'];
  $nama = $insert['nama'];
  $prodi = $insert['prodi'];
  $foto = $insert['foto'];

  $query = "INSERT INTO mahasiswa VALUES 
          (null, '$nim', '$nama', '$prodi', '$foto')";

  mysqli_query($conn, $query);


  return mysqli_affected_rows($conn);
  // mysqli_affected_rows : menyediakan fungsi angka utk cek apakah
  //ada modifikasi data dari tabel db kita (insert, update, delete)
  //0 --> tidak ada data yg dimodifikasi
  //1 --> ada data yang dimodifikasi

}

function update($upd)
{
  $conn = koneksi();
  $id = $upd['id'];
  $nim = $upd['nim'];
  $nama = $upd['nama'];
  $prodi = $upd['prodi'];
  $foto = $upd['foto'];

  $query = "UPDATE mahasiswa SET 
        nim = '$nim', 
        nama = '$nama', 
        prodi = '$prodi',
        foto = '$foto'
        WHERE id = $id";

  mysqli_query($conn, $query);


  return mysqli_affected_rows($conn);
  // mysqli_affected_rows : menyediakan fungsi angka utk cek apakah
  //ada modifikasi data dari tabel db kita (insert, update, delete)
  //0 --> tidak ada data yg dimodifikasi
  //1 --> ada data yang dimodifikasi

}

function delete($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function cari($cari)
{
  $conn = koneksi();
  $query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$cari%'";
  $result = mysqli_query($conn, $query);
  $dataArray = [];
  while ($data = mysqli_fetch_assoc($result)) {
    $dataArray[] = $data;
  }
  return $dataArray;
}
