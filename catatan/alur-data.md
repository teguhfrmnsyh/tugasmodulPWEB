# Alur Data

Diagram singkat pergerakan data: Browser → PHP → MySQL → PHP → Browser

## Diagram Teks

```text
[ Browser ]
    │
    │  1. Input data pada field:
    │     - nim
    │     - nama
    │     - program_studi
    │     - email
    │     - nomor_telepon
    ▼
[ form_mahasiswa.php ]
    │
    │  2. Submit form via HTTP POST ke proses_tambah.php
    ▼
[ proses_tambah.php ]
    │
    │  3. proses_tambah.php memuat koneksi.php (require di baris awal), memeriksa
    │     method POST, membaca dan trim input, memeriksa field kosong, lalu
    │     memvalidasi format email dengan filter_var. Jika email tidak valid,
    │     redirect ke form_mahasiswa.php?status=email_tidak_valid sebelum INSERT.
    ▼
[ koneksi.php ]
    │
    │  4. Menghubungkan ke database pemograman_web_sesi_4
    ▼
[ MySQL ]
    │  Database: pemograman_web_sesi_4
    │  Tabel: mahasiswa
    │  5. Eksekusi query prepared statement:
    │     INSERT INTO mahasiswa (nim, nama, program_studi, email, nomor_telepon)
    │     VALUES (?, ?, ?, ?, ?)
    ▼
[ proses_tambah.php ]
    │
    │  6. Menerima hasil eksekusi INSERT:
    │     - Sukses: redirect ke data_mahasiswa.php?status=sukses
    │     - Error duplicate 1062: redirect ke form_mahasiswa.php?status=duplikat
    ▼
[ Browser ]
    │
    │  7. Browser mengikuti redirect dengan request GET ke data_mahasiswa.php
    ▼
[ data_mahasiswa.php ]
    │
    │  8. Memuat koneksi.php, mengambil data dari tabel mahasiswa:
    │     SELECT id, nim, nama, program_studi, email, nomor_telepon FROM mahasiswa
    │     Merender pesan alert-success dan tabel data dengan htmlspecialchars()
    ▼
[ Browser ]
    9. Menampilkan daftar mahasiswa terbaru beserta status sukses kepada pengguna.
```

## Komponen yang Digunakan

1. **Field Form**: `nim`, `nama`, `program_studi`, `email`, `nomor_telepon`
2. **`form_mahasiswa.php`**: Halaman input form dan penampil status error validasi.
3. **`proses_tambah.php`**: Pemroses data POST, validasi, dan penanganan try/catch.
4. **`koneksi.php`**: File koneksi database MySQL.
5. **Database**: `pemograman_web_sesi_4`
6. **Tabel**: `mahasiswa`
7. **`data_mahasiswa.php`**: Halaman penampil data tabel mahasiswa dan notifikasi sukses.
