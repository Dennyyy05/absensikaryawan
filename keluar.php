<?php

include('koneksi.php');


    $nik = $_GET["nik"];
    $query = "UPDATE db_absen SET jam_keluar = now() WHERE nik = '$nik' ";
    $result = mysqli_query($connection, $query);

    header('Location: index.php');
?>