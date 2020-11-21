<?php require 'source/about.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPK</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="asset/CSS/bootstrap.css">

    <!-- CSS sendiri -->
    <link rel="stylesheet" href="asset/CSS/paimon.css">
</head>
<body>
    <div>
        <nav class = "navbar navbar-expand-md bg-light navbar-light">
            <div class="container">
                <a class="navbar-brand" href="index.php">SPK</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" 
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar">
                    <ul class="navbar-nav">
                        <!-- <li class="nav-item active mr-3">
                            <a class="nav-link text1" href="index.php?halaman=eror">
                                EROR<span class="sr-only">(current)</span>
                            </a>
                        </li> -->
                        <li class="nav-item active mr-3">
                            <a class="nav-link text1" href="index.php?halaman=home">
                                Home<span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item active mr-3">
                            <a class="nav-link text1" href="index.php?halaman=list">
                                List Kriteria<span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item active mr-3">
                            <a class="nav-link text1" href="index.php?halaman=hitung">
                                Hitung<span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item text1">
                            <a class="nav-link" href="#about" data-toggle="modal" data-target="#about">
                                Tentang
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="py-3">
            <div class="container">
                <?php require 'source/menu.php' ?>
            </div>
        </div>
    </div>

    <!-- Jquery -->
    <script src="asset/JS/jquery.js"></script>
    <!-- Bootstrap Min -->
    <script src="asset/JS/bootstrap.min.js"></script>
</body>
</html>