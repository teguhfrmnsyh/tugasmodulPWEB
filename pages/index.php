<?php
require_once "../config/auth.php";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <!-- Bagian header -->
    <header>
        <h1>Biodata</h1>
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
        <section>
            <h2>Profil</h2>
            <img src="../assets/images/foto.jpeg" alt="Foto Profil" class="profile-photo">
            <p class="profile-text">Nama: Teguh Firmansyah Suryono Putra</p>
            <p class="profile-text">NIM: 4112755201250068</p>
            <p class="profile-text">Program Studi: Teknik Informatika</p>
            <p class="profile-text">Universitas: Horizon University Indonesia</p>
        </section>

        <section>
            <h2>Pendidikan</h2>
            <p>S1 Informatika Horizon University Indonesia</p>
        </section>

        <section>
            <h2>Keahlian</h2>
            <ul class="skill-list">
                <li>Game Development</li>
                <li>UI/UX Design</li>
                <li>Web Design</li>
            </ul>
        </section>

        <section>
            <h2>Kontak</h2>
            <ul class="contact-list">
                <li>Email: teguh.putra.fict@krw.horizon.ac.id</li>
            </ul>
        </section>
    </main>

    <!-- Footer halaman -->
    <footer>
        <p>Web Programming 1</p>
    </footer>
</body>
</html>
