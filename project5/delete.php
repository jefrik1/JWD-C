<?php
include("koneksi.php");
if (isset($_GET['no'])) {
  $no = $_GET['no'];
  $query = "DELETE FROM siswa WHERE no='$no'";
  mysqli_query($conn, $query);
  if ($hasil) {
    $_SESSION['status'] = 'berhasil dihapus';
    header("location:list_siswa.php?status=sukses");
  } else {
    $_SESSION['status'] = 'gagal dihapus';
    header("location:list_siswa.php?status=gagal");
  }
}
?>