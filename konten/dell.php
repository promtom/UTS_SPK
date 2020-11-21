<?php

    require 'fungsi/data.php';
    
    if (delAlt($_GET["ID"])) {
        echo "<script>alert('Data Berhasil dihabus :(')</script>";
    }
    else {
        echo "<script>alert('Data gagal dihabus T^T')</script>";
    }
    echo "<script>document.location.href='index.php?halaman=home';</script>";
?>