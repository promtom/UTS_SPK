<?php
    //Pemanggilan fungsi
    require 'fungsi/data.php';
    $i = 1;

    $IDB = $_GET["w"];
    if (isset($_POST['add'])) {
        switch ($IDB) {
            case 'C1':
                if (addC1($_POST)) {
                    echo "<script>alert('Data Berhasil diinputkan >.<')</script>";
                }
                else {
                    echo "<script>alert('Data gagal diinput :(')</script>";
                }
            break;
            case 'C2':
                if (addC2($_POST)) {
                    echo "<script>alert('Data Berhasil diinputkan >.<')</script>";
                }
                else {
                    echo "<script>alert('Data gagal diinput :(')</script>";
                }
            break;
            case 'C3':
                if (addC3($_POST)) {
                    echo "<script>alert('Data Berhasil diinputkan >.<')</script>";
                }
                else {
                    echo "<script>alert('Data gagal diinput :(')</script>";
                }
            break;
            default:  echo "<script>alert('Data gagal diinput karena link eror T^T ')</script>"; break;
        }
        echo "<script>document.location.href='index.php?halaman=list';</script>";
    }
?>

<div class="row justify-content-center mt-2 mb-2">
    <div class="col-md">
        <div class="card shadow-sm">
            <div class="card-header">
                Tambah data
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