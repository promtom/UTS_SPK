<?php
    //Pemanggilan fungsi
    require 'fungsi/data.php';
    $result = query("SELECT * FROM alternatif 
        INNER JOIN keteria1 ON keteria1.C1=alternatif.keteria1 
        INNER JOIN keteria2 ON keteria2.C2=alternatif.keteria2 
        INNER JOIN keteria3 ON keteria3.C3=alternatif.keteria3
        ORDER BY ID"
    );
    $i = 1;
?>

<div class="container justify-content-center mt-2 mb-2">
    <div class="row-md mb-3">
        <div class="card">
            <div class="card-header">
                List Lemtop
                <a class="btn-primary btn-sm float-right" title="Tambah Data" href="index.php?halaman=add">
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
                                <th>Prosessor</th>
                                <th>RAM</th>
                                <th>Storage</th>
                                <th>Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($result as $row) : ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $row["nama"]; ?></td>
                                    <td><?= $row["C1_nama"]; ?></td>
                                    <td><?= $row["C2_nama"]; ?></td>
                                    <td><?= $row["C3_nama"]; ?></td>
                                    <td><?= $row["keteria4"]; ?> Juta</td>
                                    <td>
                                        <div class="text-center">
                                            <a class="btn btn-outline-primary btn-sm" title="Ubah Data" href="index.php?halaman=edit&ID=<?= $row["ID"]; ?>">
                                                <img alt="edit" src="asset/IMG/bootstrap-icons-1.0.0/sliders.svg">
                                            </a>
                                            <a class="btn btn-outline-danger btn-sm" title="Hapus Data" href="index.php?halaman=dell&ID=<?= $row["ID"]; ?>" onclick="return confirm('Are you sure?');">
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
                List Bobot Lemtop
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-light table-sm table-striped">
                        <thead class="thead-light">
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>C1</th>
                                <th>C2</th>
                                <th>C3</th>
                                <th>C4</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($result as $row) : ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $row["nama"]; ?></td>
                                    <td><?= $row["C1_bobot"]; ?></td>
                                    <td><?= $row["C2_bobot"]; ?></td>
                                    <td><?= $row["C3_bobot"]; ?></td>
                                    <td><?= $row["keteria4"]; ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>