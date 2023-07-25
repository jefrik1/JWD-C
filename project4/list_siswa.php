<?php
include_once "koneksi.php";
$query = "SELECT * FROM siswa";
$result = mysqli_query($conn, $query);
$jumlah_siswa = mysqli_num_rows($result);
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
  <title>Document</title>
</head>

<body>
  <div class="container">
    <div>
      <div>
        <h3>Siswa Yang Sudah Mendaftar</h3>
      </div>
      <div>
        <a href="form_daftar.php">[+] Tambah Baru</a>
      </div>
      <br>
      <table border=2px>
        <tr>
          <td><b>No</b></td>
          <td><b>Nama</b></td>
          <td><b>Alamat</b></td>
          <td><b>Jenis Kelamin</b></td>
          <td><b>Agama</b></td>
          <td><b>Sekolah Asal</b></td>
        </tr>
        <?php foreach ($rows as $row): ?>
          <tr>
            <td>
              <?= htmlspecialchars($row['no']); ?>
            </td>
            <td>
              <?= htmlspecialchars($row['nama']); ?>
            </td>
            <td>
              <?= htmlspecialchars($row['alamat']); ?>
            </td>
            <td>
              <?= htmlspecialchars($row["kelamin"]); ?>
            </td>
            <td>
              <?= htmlspecialchars($row['agama']); ?>
            </td>
            <td>
              <?= htmlspecialchars($row['sekolah_asal']); ?>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
    <div>
      <p>Total:
        <?= $jumlah_siswa; ?>
      </p>
    </div>
  </div>
</body>

</html>