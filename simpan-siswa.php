<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nik           = $_POST['nik'];
$nama_lengkap = $_POST['nama_lengkap'];
$jabatan      = $_POST['jabatan'];

$masuk = date("H:I:S");
$keluar = NULL;

//query insert data ke dalam database
$query = "INSERT INTO db_absen VALUES ('$nik', '$nama_lengkap', '$jabatan', '$masuk', '$keluar', now())";

$result = mysqli_query($connection, $query);
header('location: index.php');
?>