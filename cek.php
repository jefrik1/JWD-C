<?php
    session_start();
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tempat = $_POST['tempat'];
    $gender = $_POST['gender'];
    $usia = $_POST['usia'];

    if($nama == ""){
        header("location:kominfo.php?nama=kosong");   
    } else if($alamat == ""){ 
        $_SESSION['nama'] = $nama;
        header("location:kominfo.php?alamat=kosong");
    } else if($tempat == ""){ 
        $_SESSION['alamat'] = $alamat;
        header("location:kominfo.php?tempat=kosong");
    } else if($gender == ""){ 
        $_SESSION['tempat'] = $tempat;
        header("location:kominfo.php?gender=kosong");
    } else if($usia == ""){ 
        $_SESSION['gender'] = $gender;
        header("location:kominfo.php?usia=kosong");
    } else {
        $_SESSION['usia'] = $usia;
        echo "<h2>Nama anda adalah ".$nama."</h2>";
        echo "<h2>Alamat anda adalah ".$alamat."</h2>";
        echo "<h2>Tempat lahir anda adalah ".$tempat."</h2>";
        echo "<h2>Jenis Kelamin anda adalah ".$gender."</h2>";
        echo "<h2>Usia anda adalah ".$usia."</h2>";
    }

?>