<?php
    //Pemanggilan fungsi
    require 'fungsi/data.php';
    $result = query("SELECT * FROM bobot");
    // $totalB = query("SELECT SUM(bobot) AS total FROM bobot");   
    $i=0; $total = 0; $totalS = 0;
    $varW = []; $varS = []; $varV = [];
    //Cari total bobot keteria
    foreach($result as $row){
        $total = $total + $row["bobot"];
    }
    //cari rata-rata nilai bobot setiap keteria 
    foreach($result as $row){
        if ($row["sifat"] == "BENEFIT"){$varW[$i] = $row["bobot"]/$total;}
        else {$varW[$i] = -$row["bobot"]/$total;}
        $i++;
    }
    $i=0; //balikin nilai i
    $data = query("SELECT * FROM alternatif 
        INNER JOIN keteria1 ON keteria1.C1=alternatif.keteria1 
        INNER JOIN keteria2 ON keteria2.C2=alternatif.keteria2 
        INNER JOIN keteria3 ON keteria3.C3=alternatif.keteria3" 
    );
    /*
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["C1_bobot"]; ?></td>
        <td><?= $row["C2_bobot"]; ?></td>
        <td><?= $row["C3_bobot"]; ?></td>
        <td><?= $row["keteria4"]; ?></td>
    */
    //perhitungan normalisasi
    foreach($data as $row){
        $varS[$i] = (
            pow($row["C1_bobot"],$varW[0])*
            pow($row["C2_bobot"],$varW[1])*
            pow($row["C3_bobot"],$varW[2])*
            pow($row["keteria4"],$varW[3])
        );
        $totalS = $totalS + $varS[$i];
        $i++; 
    }
    $i=0; //balikin nilai i
    //perhitungan vaktorisasi
    foreach($varS as $row){
        $varV[$i] = $row/$totalS;
        $i++; 
    }
    $i=0; //balikin nilai i
    //upload skor ke database
    foreach($data as $row){
        upload($varV[$i],"V".($i+1),$row["ID"]);
        $i++;
    }
    $rank=query("SELECT * FROM alternatif ORDER BY skor DESC LIMIT 0,10");
    $i=1;
?>

<div class="col">
    <div class="row-md mb-3">
        <div class="card shadow-sm">
            <div class="card-header">
                List ranking TOP 10
            </div>
            <div class="card-body">
                <div class="table-responsive-md">
                    <table class="table table-hover table-light table-sm table-striped">
                        <thead class="thead-light">
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Skor (sudah dibulaltkan)</th>
                                <th>Variabel di detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($rank as $row) : ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $row["nama"]; ?></td>
                                    <td><?= round($row["skor"],5); ?></td>
                                    <td><?= $row["varskor"]; ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row-md mb-3">
        <div class="card shadow-sm">
            <div class="card-header">
                Detail perhitungan :3
            </div>
            <div class="card-body">
                <div>
                    <?php echo "total bobot = ".$total ?>
                    <?php $i=1 ?> <br> Hasil Pembobotan <br>
                    <?php foreach ($varW as $row) : ?>
                        <?="W".$i." = ".$row?>
                        <?php $i++ ?> <br>
                    <?php endforeach ?>
                </div>
                <div>
                    <?php $i=1 ?> <br> Hasil Normalisasi <br>
                    <?php foreach ($varS as $row) : ?>
                        <?="S".$i." = ".$row?>
                        <?php $i++ ?> <br>
                    <?php endforeach ?>
                    <?php echo "total normalisasi = ".$totalS ?>
                </div>
                <div>
                    <?php $i=1 ?> <br> Hasil Vaktorisasi <br>
                    <?php foreach ($varV as $row) : ?>
                        <?="V".$i." = ".$row?>
                        <?php $i++ ?> <br>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</div>