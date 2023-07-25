<?php
include("koneksi.php");
if (isset($_GET['no'])) {
  $no = $_GET['no'];
  $query = "DELETE FROM siswa WHERE no='$no'";
  mysqli_query($conn, $query);
  header("location:list_siswa.php?status=sukses");
}
?>