<?php
    //Pemanggilan fungsi
    require 'fungsi/data.php';
    $result = query("SELECT * FROM bobot");
    $i = 1;
    
    if (isset($_POST['add'])) {
        if (editBot($_POST)) {
            echo "<script>alert('bobot berhasil diset >.<');</script>";
            echo "<script>document.location.href='index.php?halaman=hitung2';</script>";
            // header("location: index.php?halaman=hitung2");
        }
        else {
            echo "<script>alert('bobot gagal diset :(')</script>";
            echo "<script>document.location.href='index.php?halaman=hitung';</script>";
            // header("location: index.php?halaman=hitung");
        }
    }
?>

<div class="col-md">
    <div class="card shadow-sm">
        <div class="card-header">
            Pembobotan keteria (0-10)
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <div class="row mb-3">
                    <div class="col-sm-10">
                        <label class="text-info" for="bobot1">Prosessor</label>
                    </div>
                    <div class="col-sm-2">
                        <input type="number" class="form-control"  min="0" max="10" name="bobot1" id="bobot1" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-10">
                        <label class="text-info" for="bobot2">RAM</label>
                    </div>
                    <div class="col-sm-2">
                        <input type="number" class="form-control" min="0" max="10" name="bobot2" id="bobot2" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-10">
                        <label class="text-info" for="bobot3">Storage</label>
                    </div>
                    <div class="col-sm-2">
                        <input type="number" class="form-control" min="0" max="10" name="bobot3" id="bobot3" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-10">
                        <label class="text-danger" for="bobot4">Harga</label>
                    </div>
                    <div class="col-sm-2">
                        <input type="number" class="form-control" min="0" max="10" name="bobot4" id="bobot4" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary float-right" name="add" id="add">submit</button>
            </form>
        </div>
    </div>
</div>