<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Halaman User</h1>
  <p>Halo <b><?php echo $_SESSION['user']; ?><br></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
  <a href="logout.php">logout</a>
</body>

</html>