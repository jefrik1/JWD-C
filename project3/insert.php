<?php
include('koneksi.php');
if (isset($_POST)) {
  $no = $_POST['nomor'];
  $nama_merek = $_POST['nama_merek'];
  $warna = $_POST['warna'];
  $jumlah = $_POST['jumlah'];
}
$query = "INSERT INTO printer (no,nama_merek,warna,jumlah) 
	VALUES('$no' , '$nama_merek' , '$warna','$jumlah')";

if (mysqli_query($conn, $query)) {
  header("location:index.php");
} else {
  echo "ERROR, tidak berhasil" . mysqli_error($conn);
}
mysqli_close($conn);
?>