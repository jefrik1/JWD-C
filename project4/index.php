<?php
session_start();
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div>
    <div>
      <h2>Pendaftaran Siswa Baru</h2>
      <h1>Digital talent</h1>
      <h3>Menu</h3>
    </div>
    <div>
      <ul>
        <li><a href="form_daftar.php">Daftar Baru</a></li>
        <li><a href="list_siswa.php">Pendaftar</a></li>
      </ul>
    </div>
    <div>
      <?php
      if (isset($_GET['status'])) {
        if ($_GET['status'] == "sukses") {
          echo "Pendaftaran siswa baru berhasil!";
        } elseif ($_GET['status'] == "gagal") {
          echo "Pendaftaran siswa baru gagal!";
        }
      }
      ?>
    </div>
  </div>
</body>

</html>

