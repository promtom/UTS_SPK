<?php
    if (isset($_GET['halaman'])) {
        $halaman = $_GET['halaman'];

        switch ($halaman) {
            case 'home':
                include "konten/home.php";
                break;
            case 'add':
                include "konten/add.php";
                break;
            case 'dell':
                include "konten/dell.php";
                break;
            case 'edit':
                include "konten/edit.php";
                break;
            case 'hitung':
                include "konten/hitung.php";
                break;
            case 'hitung2':
                include "konten/hitung2.php";
                break;
            case 'list':
                include "konten/list.php";
                break;
            case 'add2':
                include "konten/add2.php";
                break;
            case 'dell2':
                include "konten/dell2.php";
                break;
            case 'edit2':
                include "konten/edit2.php";
                break;
            default:
                include "konten/error.html";
                break;
        }
    }
    
    else {
        include "konten/home.php";
    }
