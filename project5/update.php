<?php
include_once 'koneksi.php';


$no = $_POST['no'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$gender = $_POST['kelamin'];
$agama = $_POST['agama'];
$asal = $_POST['sekolah_asal'];

$query = "UPDATE siswa SET nama='$nama', alamat='$alamat', kelamin='$gender', agama='$agama', sekolah_asal='$asal' WHERE no='$no'";
mysqli_query($conn,$query);
header("location:index.php");
?>