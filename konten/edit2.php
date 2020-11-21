<?php
    //Pemanggilan fungsi
    require 'fungsi/data.php';
    $i = 1; 
    $IDB = $_GET["w"];
    $ID = $_GET["ID"];
    switch ($IDB) {
        case 'C1': $AIM = query("SELECT C1_nama AS nama, C1_bobot AS bobot FROM keteria1 WHERE C1 = $ID"); break;
        case 'C2': $AIM = query("SELECT C2_nama AS nama, C2_bobot AS bobot FROM keteria2 WHERE C2 = $ID"); break;
        case 'C3': $AIM = query("SELECT C3_nama AS nama, C3_bobot AS bobot FROM keteria3 WHERE C3 = $ID"); break;
        default:  $AIM =  [ 
            [
                "nama" => "???",
                "bobot" => 0
            ]
        ]; break;
    }
    if (isset($_POST['add'])) {
        switch ($IDB) {
            case 'C1':
                if (editC1($_POST, $ID)) {
                    echo "<script>alert('Data Berhasil diedit >.<')</script>";
                }
                else {
                    echo "<script>alert('Data gagal diedit :(')</script>";
                }
            break;
            case 'C2':
                if (editC2($_POST, $ID)) {
                    echo "<script>alert('Data Berhasil diedit >.<')</script>";
                }
                else {
                    echo "<script>alert('Data gagal diedit :(')</script>";
                }
            break;
            case 'C3':
                if (editC3($_POST, $ID)) {
                    echo "<script>alert('Data Berhasil diedit >.<')</script>";
                }
                else {
                    echo "<script>alert('Data gagal diinput :(')</script>";
                }
            break;
            default:  echo "<script>alert('Data gagal diedit karena link eror T^T ')</script>"; break;
        }
        echo "<script>document.location.href='index.php?halaman=list';</script>";
    }
?>

<div class="row justify-content-center mt-2 mb-2">
    <div class="col-md">
        <div class="card shadow-sm">
            <div class="card-header">
                Edit data dari 
                <?php foreach ($AIM as $row) : ?>
                    <?= $row["nama"]; ?> 
                <?php endforeach ?>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="col mb-3">
                        <div class="row-sm-3">
                            <label for="nama">Nama</label>
                        </div>
                        <div class="row-sm-9">
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Type here" required>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="row-sm-2">
                            <label for="data3">bobot</label>
                        </div>
                        <div class="row-sm-10">
                            <input type="number" step="any" class="form-control" name="data" id="data" placeholder="Type here" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-right" name="add" id="add">submit</button>
                </form>
            </div>
        </div>
    </div>
</div>