<?php
    //Pemanggilan fungsi
    require 'fungsi/data.php';
    $result = query("SELECT * FROM alternatif");
    $C1 = query("SELECT * FROM keteria1 ORDER BY C1_bobot");
    $C2 = query("SELECT * FROM keteria2 ORDER BY C2_bobot");
    $C3 = query("SELECT * FROM keteria3 ORDER BY C3_bobot");
    $i = 1;

    $ID = $_GET["ID"];
    $AIM = query("SELECT * FROM alternatif WHERE ID = $ID");

    if (isset($_POST['add'])) {
        if (editAlt($_POST, $ID)) {
            echo "<script>alert('Data berhasil diubah >.<')</script>";
        }
        else {
            echo "<script>alert('Data gagal diubah :(')</script>";
        }
        echo "<script>document.location.href='index.php?halaman=home';</script>";
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
                            <label for="data2">Prosessor</label>
                        </div>
                        <div class="row-sm-10">
                            <select class="form-control" name="data1" id="data1" required>
                                <option disabled selected>Pilih Prosessor</option>
                                <?php foreach ($C1 as $row) : ?>
                                    <option value="<?= $row["C1"] ?>"><?= $row["C1_nama"] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="row-sm-2">
                            <label for="data2">RAM</label>
                        </div>
                        <div class="row-sm-10">
                            <select class="form-control" name="data2" id="data2" required>
                                <option disabled selected>Pilih RAM</option>
                                <?php foreach ($C2 as $row) : ?>
                                    <option value="<?= $row["C2"] ?>"><?= $row["C2_nama"] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="row-sm-2">
                            <label for="data3">Storage</label>
                        </div>
                        <div class="row-sm-10">
                            <select class="form-control" name="data3" id="data3" required>
                                <option disabled selected>Pilih Storage</option>
                                <?php foreach ($C3 as $row) : ?>
                                    <option value="<?= $row["C3"] ?>"><?= $row["C3_nama"] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="row-sm-2">
                            <label for="data3">Harga (dalam juta)</label>
                        </div>
                        <div class="row-sm-10">
                            <input type="number" step="any" class="form-control" name="data4" id="data4" placeholder="Type here" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-right" name="add" id="add">submit</button>
                </form>
            </div>
        </div>
    </div>
</div>