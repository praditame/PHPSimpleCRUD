<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman User</title>
</head>

<body>
  <?php
  if (isset($_GET['alert'])) {
    if ($_GET['alert'] == "gagal") {
      echo "<p>Maaf! Username & Password Salah.</p>";
    } else if ($_GET['alert'] == "belum_login") {
      echo "<p>Anda Harus Login Terlebih Dulu!</p>";
    } else if ($_GET['alert'] == "logout") {
      echo "<p>Anda Telah Logout!</p>";
    }
  }
  ?>

  <h1 align="center">Login Form</h1><br><br>
  <table align="center">
    <form action="aksi.php" method="post">
      <tr>
        <td>
          <label>Username</label>
        </td>
        <td>
          <input type="text" name="username" placeholder="Username .." required="required">
        </td>
      </tr>

      <tr>
        <td>
          <label>Password</label>
        </td>
        <td>
          <input type="password" name="password" placeholder="Password .." required="required">
        </td>
      </tr>

      <tr>
        <td><input type="submit" class="tombol_login" value="login"></td>
        <td></td>
      </tr>
      </div>
  </table>
</body>

</html>