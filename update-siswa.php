<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$nik         = $_POST['nik'];
$nama_lengkap = $_POST['nama_lengkap'];
$jabatan = $_POST['jabatan'];
//query update data ke dalam database berdasarkan ID
$query = "UPDATE db_absen SET nik = '$nik', nama_lengkap = '$nama_lengkap', jabatan = '$jabatan' WHERE nik=$nik";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>