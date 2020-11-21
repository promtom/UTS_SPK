<?php
    //Pemanggilan fungsi
    require 'fungsi/data.php';
    $C1 = query("SELECT * FROM keteria1 ORDER BY C1_bobot");
    $C2 = query("SELECT * FROM keteria2 ORDER BY C2_bobot");
    $C3 = query("SELECT * FROM keteria3 ORDER BY C3_bobot");

    $i = 1;
?>

<div class="container justify-content-center mt-2 mb-2">
    <div class="row-md mb-3">
        <div class="card">
            <div class="card-header">
                List Prosessor
                <a class="btn-primary btn-sm float-right" title="Tambah Data" href="index.php?halaman=add2&w=C1">
                    <img alt="add" src="asset/IMG/bootstrap-icons-1.0.0/plus.svg"> Tambah data
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-light table-sm table-striped">
                        <thead class="thead-light">
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Bobot</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($C1 as $row) : ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $row["C1_nama"]; ?></td>
                                    <td><?= $row["C1_bobot"]; ?></td>
                                    <td>
                                        <div class="">
                                            <a class="btn btn-outline-primary btn-sm" title="Ubah Data" href="index.php?halaman=edit2&w=C1&ID=<?= $row["C1"]; ?>">
                                                <img alt="edit" src="asset/IMG/bootstrap-icons-1.0.0/sliders.svg">
                                            </a>
                                            <a class="btn btn-outline-danger btn-sm" title="Hapus Data" href="index.php?halaman=dell2&w=C1&ID=<?= $row["C1"]; ?>" onclick="return confirm('Are you sure?');">
                                                <img alt="delete" src="asset/IMG/bootstrap-icons-1.0.0/trash.svg">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row-md mb-3"> <?php $i=1 ?>
        <div class="card">
            <div class="card-header">
                List RAM
                <a class="btn-primary btn-sm float-right" title="Tambah Data" href="index.php?halaman=add2&w=C2">
                    <img alt="add" src="asset/IMG/bootstrap-icons-1.0.0/plus.svg"> Tambah data
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-light table-sm table-striped">
                        <thead class="thead-light">
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Bobot</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($C2 as $row) : ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $row["C2_nama"]; ?></td>
                                    <td><?= $row["C2_bobot"]; ?></td>
                                    <td>
                                        <div class="">
                                            <a class="btn btn-outline-primary btn-sm" title="Ubah Data" href="index.php?halaman=edit2&w=C2&ID=<?= $row["C2"]; ?>">
                                                <img alt="edit" src="asset/IMG/bootstrap-icons-1.0.0/sliders.svg">
                                            </a>
                                            <a class="btn btn-outline-danger btn-sm" title="Hapus Data" href="index.php?halaman=dell2&w=C2&ID=<?= $row["C2"]; ?>" onclick="return confirm('Are you sure?');">
                                                <img alt="delete" src="asset/IMG/bootstrap-icons-1.0.0/trash.svg">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row-md mb-3"> <?php $i=1 ?>
        <div class="card">
            <div class="card-header">
                List Storage
                <a class="btn-primary btn-sm float-right" title="Tambah Data" href="index.php?halaman=add2&w=3">
                    <img alt="add" src="asset/IMG/bootstrap-icons-1.0.0/plus.svg"> Tambah data
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-light table-sm table-striped">
                        <thead class="thead-light">
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Bobot</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($C3 as $row) : ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $row["C3_nama"]; ?></td>
                                    <td><?= $row["C3_bobot"]; ?></td>
                                    <td>
                                        <div class="">
                                            <a class="btn btn-outline-primary btn-sm" title="Ubah Data" href="index.php?halaman=edit2&w=C3&ID=<?= $row["C3"]; ?>">
                                                <img alt="edit" src="asset/IMG/bootstrap-icons-1.0.0/sliders.svg">
                                            </a>
                                            <a class="btn btn-outline-danger btn-sm" title="Hapus Data" href="index.php?halaman=dell2&w=C3&ID=<?= $row["C3"]; ?>" onclick="return confirm('Are you sure?');">
                                                <img alt="delete" src="asset/IMG/bootstrap-icons-1.0.0/trash.svg">
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>