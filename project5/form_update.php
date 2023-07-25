<?php
include_once 'koneksi.php';

$no = null;
if (isset($_GET['no'])) {
  $no = $_GET['no'];
}

if (isset($_POST['no'])) {
  $no = $_POST['no'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $kelamin = $_POST['kelamin'];
  $agama = $_POST['agama'];
  $asal = $_POST['sekolah_asal'];

  $query = "UPDATE siswa SET 
              nama='$nama', 
              alamat='$alamat', 
              kelamin='$kelamin', 
              agama='$agama', 
              sekolah_asal='$asal' 
            WHERE no='$no'";
  mysqli_query($conn, $query);

  header("Location: list_siswa.php");
  exit();
}

$siswa = null;
if ($no !== null) {
  $siswa = mysqli_query($conn, "SELECT * FROM siswa WHERE no='$no'");
}
$agama = array('Islam', 'Kristen', 'Hindu', 'Budha', 'Protestan');
$row = ($siswa !== null) ? mysqli_fetch_array($siswa) : null;

function is_checked($value, $input)
{
  return ($value === $input) ? 'checked' : '';
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Siswa</title>
</head>

<body>
  <div>
    <form action="form_update.php" method="post">
      <?php if ($no !== null) : ?>
        <input type="hidden" name="no" value="<?php echo $no; ?>"><br>
      <?php endif; ?>

      <label for="nama">Nama </label>
      <input type="text" placeholder="nama lengkap" name="nama" value="<?php echo ($row !== null) ? $row['nama'] : ''; ?>"><br>

      <label for="alamat">Alamat</label>
      <textarea name="alamat" rows="4" cols="50"><?php echo ($row !== null) ? $row['alamat'] : ''; ?></textarea><br>

      <label for="kelamin">Jenis Kelamin</label>
      <input type="radio" name="kelamin" value="Laki-Laki" <?php echo ($row !== null && $row['kelamin'] === "Laki-Laki") ? 'checked' : ''; ?>> Laki-Laki
      <input type="radio" name="kelamin" value="Perempuan" <?php echo ($row !== null && $row['kelamin'] === "Perempuan") ? 'checked' : ''; ?>> Perempuan<br>


      <label for="agama">Agama</label>
      <select name="agama">
        <?php
        foreach ($agama as $a) {
          echo "<option value='$a'";
          echo ($row !== null && $row['agama'] == $a) ? 'selected="selected"' : '';
          echo ">$a</option>";
        }
        ?>
      </select>

      <label for="asal">Asal Sekolah</label>
      <input type="text" name="sekolah_asal" placeholder="nama sekolah" value="<?php echo ($row !== null) ? $row['sekolah_asal'] : ''; ?>"> <br>

      <button type="submit" value="simpan">SIMPAN</button>
    </form>
  </div>
</body>

</html>
