<?php
require_once "../config/auth.php";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout Lab</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <!-- Bagian header -->
    <header>
        <h1>Layout Lab</h1>
    </header>

    <!-- Navigasi utama -->
<nav>
    <a href="dashboard.php">Dashboard</a>
    <a href="index.php">Home / Biodata</a>
    <a href="layout.php">Layout Lab</a>
    <a href="data_mahasiswa.php">Data Mahasiswa</a>
    <a href="form_mahasiswa.php">Tambah Mahasiswa</a>
    <a href="../crud/index.php">CRUD Mahasiswa</a>
    <a href="../crud-media/index.php">CRUD Media</a>
    <a href="../proses/logout.php">Logout</a>
</nav>

    <!-- Konten utama -->
    <main>
        <section class="card-compact">
            <h2>Section A</h2>
            <p>Halaman ini dipakai untuk percobaan CSS Box Model.</p>
        </section>

        <section class="card-comfortable">
            <h2>Section B</h2>
            <p>Halaman ini dipakai untuk percobaan CSS Box Model.</p>
        </section>

        <section class="section-narrow">
            <h2>Display Experiment</h2>

            <a class="demo-link" href="#">HTML</a>
            <a class="demo-link" href="#">CSS</a>
            <a class="demo-link" href="#">JavaScript</a>
        </section>
    </main>

    <!-- Footer halaman -->
    <footer>
        <p>Web Programming 1</p>
    </footer>
</body>
</html>
