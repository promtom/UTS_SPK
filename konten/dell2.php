<?php
    //Pemanggilan fungsi
    require 'fungsi/data.php';
    $i = 1;

    $IDB = $_GET["w"];
    $ID = $_GET["ID"];
    
    switch ($IDB) {
        case 'C1':
            if (delC1($ID)) {
                echo "<script>alert('Data Berhasil dihabus :(')</script>";
            }
            else {
                echo "<script>alert('Data gagal dihabus T^T')</script>";
            }
        break;
        case 'C2':
            if (delC2($ID)) {
                echo "<script>alert('Data Berhasil dihabus :(')</script>";
            }
            else {
                echo "<script>alert('Data gagal dihabus T^T')</script>";
            }
        break;
        case 'C3':
            if (delC3($ID)) {
                echo "<script>alert('Data Berhasil diinputkan :(')</script>";
            }
            else {
                echo "<script>alert('Data gagal dihabus T^T')</script>";
            }
        break;
        default:  echo "<script>alert('Data gagal dihabus  karena link eror Y^Y')</script>"; break;
    }
    echo "<script>document.location.href='index.php?halaman=list';</script>";
?>