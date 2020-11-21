<?php
    //Koneksi Database
    $databaseHost = 'localhost';
    $databaseUsername = 'root';
    $databasePassword = '';
    $databaseName = 'SPK';
    $koneksi = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

    function query($func) {
        global $koneksi;
        $result = mysqli_query($koneksi, $func);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function addAlt($data) {
        global $koneksi;
        $x = $_POST['data1'];
        $y = $_POST['data2'];
        $z = $_POST['data3'];
        $w = $_POST['data4'];
        $nama = $_POST['nama'];
        
        $query = "INSERT INTO alternatif(nama,keteria1,keteria2,keteria3,keteria4,skor,varskor) VALUES ('$nama','$x','$y','$z','$w',0,'no')";

        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
    }

    function delAlt($ID) {
        global $koneksi;
        mysqli_query($koneksi, "DELETE FROM alternatif WHERE ID='$ID'");
    
        return mysqli_affected_rows($koneksi);
    }

    function editAlt($data, $ID) {
        global $koneksi;
        $x = $_POST['data1'];
        $y = $_POST['data2'];
        $z = $_POST['data3'];
        $w = $_POST['data4'];
        $nama = $_POST['nama'];

        $query = "UPDATE alternatif SET nama='$nama', keteria1='$x', keteria2='$y', keteria3='$z', keteria4='$w' WHERE ID='$ID'";
        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
    }
    
    function editBot($data) {
        global $koneksi;
        $x = $_POST['bobot1'];
        $y = $_POST['bobot2'];
        $z = $_POST['bobot3'];
        $w = $_POST['bobot4'];

        $query1 = "UPDATE bobot SET bobot='$x' WHERE IDB=1";
        $query2 = "UPDATE bobot SET bobot='$y' WHERE IDB=2";
        $query3 = "UPDATE bobot SET bobot='$z' WHERE IDB=3";
        $query4 = "UPDATE bobot SET bobot='$w' WHERE IDB=4";
        
        mysqli_query($koneksi, $query1);
        mysqli_query($koneksi, $query2);
        mysqli_query($koneksi, $query3);
        mysqli_query($koneksi, $query4);

        return mysqli_affected_rows($koneksi);
    }

    function upload($data, $var ,$ID) {
        global $koneksi;

        $query = "UPDATE alternatif SET skor='$data', varskor='$var' WHERE ID='$ID'";
        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
    }

    function addC1($data) {
        global $koneksi;
        $x = $_POST['data'];
        $nama = $_POST['nama'];
        
        $query = "INSERT INTO keteria1(C1_nama,C1_bobot) VALUES ('$nama','$x')";

        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
    }
    function addC2($data) {
        global $koneksi;
        $x = $_POST['data'];
        $nama = $_POST['nama'];
        
        $query = "INSERT INTO keteria2(C2_nama,C2_bobot) VALUES ('$nama','$x')";

        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
    }
    function addC3($data) {
        global $koneksi;
        $x = $_POST['data'];
        $nama = $_POST['nama'];
        
        $query = "INSERT INTO keteria3(C3_nama,C3_bobot) VALUES ('$nama','$x')";

        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
    }

    function delC1($ID) {
        global $koneksi;
        mysqli_query($koneksi, "DELETE FROM keteria1 WHERE C1='$ID'");
    
        return mysqli_affected_rows($koneksi);
    }
    function delC2($ID) {
        global $koneksi;
        mysqli_query($koneksi, "DELETE FROM keteria2 WHERE C2='$ID'");
    
        return mysqli_affected_rows($koneksi);
    }
    function delC3($ID) {
        global $koneksi;
        mysqli_query($koneksi, "DELETE FROM keteria3 WHERE C3='$ID'");
    
        return mysqli_affected_rows($koneksi);
    }

    function editC1($data, $ID) {
        global $koneksi;
        $x = $_POST['data'];
        $nama = $_POST['nama'];

        $query = "UPDATE keteria1 SET C1_nama='$nama', C1_bobot='$x' WHERE C1='$ID'";
        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
    }
    function editC2($data, $ID) {
        global $koneksi;
        $x = $_POST['data'];
        $nama = $_POST['nama'];

        $query = "UPDATE keteria2 SET C2_nama='$nama', C2_bobot='$x' WHERE C2='$ID'";
        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
    }
    function editC3($data, $ID) {
        global $koneksi;
        $x = $_POST['data'];
        $nama = $_POST['nama'];

        $query = "UPDATE keteria3 SET C3_nama='$nama', C3_bobot='$x' WHERE C3='$ID'";
        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
    }

    /*
    function adddb($data) {
        global $koneksi;
        $x = $_POST[' '];
        $y = $_POST[' '];
        
        $query = "INSERT INTO namedb(vardb1,vardb2) VALUES ('$x','$y')";

        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
    }

    function deldb($ID) {
        global $koneksi;
        mysqli_query($koneksi, "DELETE FROM namedb WHERE ID='$ID'");
    
        return mysqli_affected_rows($koneksi);
    }

    function editdb($data, $ID) {
        global $koneksi;
        $x = $_POST[' '];
        $y = $_POST[' '];

        $query = "UPDATE namedb SET vardb1='$x',vardb2='$y' WHERE ID='$ID'";
        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi);
    }
    */
?>