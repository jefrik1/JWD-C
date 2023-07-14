<?php
include_once "koneksi.php";

$query = "SELECT * FROM printer";
$result = mysqli_query($conn, $query);
if ($result) {
  $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
  echo "Error executing the query: " . mysqli_error($connection);
}
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JWD - C</title>
</head>

<body>
  <div class="container">
    <div>
      <table border=3>
        <tr>
          <td><b>NO</b></td>
          <td><b>NAMA MEREK</b></td>
          <td><b>WARNA</b></td>
          <td><b>JUMLAH</b></td>
        </tr>
        <?php foreach ($rows as $row): ?>
          <tr>
            <td>
              <?= $row['no']; ?>
            </td>
            <td>
              <?= $row['nama_merek']; ?>
            </td>
            <td>
              <?= $row['warna']; ?>
            </td>
            <td>
              <?= $row['jumlah']; ?>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
    <br>
    <div>
      <a href="tambah.html">Tambah data</a>
    </div>
  </div>
</body>

</html>