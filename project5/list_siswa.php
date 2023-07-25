<?php
include_once 'koneksi.php';
$query = "SELECT * FROM siswa";
$result = mysqli_query($conn, $query);
$jumlah_siswa = mysqli_num_rows($result);
if ($result) {
  $rows = mysqli_fetch_all($result, MYSQLI_ASSOC); 
} else {
  echo "Error executing the query: " . mysqli_error($conn);
}
?>

<!DOCTYPE html>
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
      <table border="2px">
        <tr>
          <td><b>No</b></td>
          <td><b>Nama</b></td>
          <td><b>Alamat</b></td>
          <td><b>Jenis Kelamin</b></td>
          <td><b>Agama</b></td>
          <td><b>Sekolah Asal</b></td>
          <td><b>Tindakan</b></td>
        </tr>
        <?php 
        $no = 1;
        foreach ($rows as $row) {
          $gender = $row['kelamin'] == 'Perempuan' ? 'Perempuan' : 'Laki laki';
          echo "<tr>
                  <td>$no</td>
                  <td>" . $row['nama'] . "</td>
                  <td>" . $row['alamat'] . "</td>
                  <td>" . $gender . "</td>
                  <td>" . $row['agama'] . "</td>
                  <td>" . $row['sekolah_asal'] . "</td>
                  <td>
                    <a href='form_update.php?no=" . $row['no'] . "'>Ubah</a>
                    <a href='delete.php?no=" . $row['no'] . "'>Hapus</a>
                  </td>
                </tr>";
          $no++;
        }
        ?>
      </table>
    </div>
    <div>
      <p>Total: <?= $jumlah_siswa; ?></p>
    </div>
  </div>
</body>

</html>
