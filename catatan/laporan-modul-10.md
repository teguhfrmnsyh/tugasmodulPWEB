# Laporan Implementasi Modul 10 (CRUD Media)
**Mata Kuliah:** Web Programming 1  
**Project Workspace:** `web-programming-session4`  
**Database:** `pemograman_web_sesi_4`  
**Stack:** PHP Native, MySQLi, JavaScript DOM, CSS  

---

## 1. Ringkasan Status File (12 File Baru + 7 File Diubah)

| No | File | Status | Ringkasan Perubahan / Tanggung Jawab |
| :--- | :--- | :--- | :--- |
| 1 | `uploads/images/.gitkeep` | **Dibuat** | Penanda direktori penyimpanan file fisik foto. |
| 2 | `uploads/audio/.gitkeep` | **Dibuat** | Penanda direktori penyimpanan file fisik audio. |
| 3 | `uploads/documents/.gitkeep` | **Dibuat** | Penanda direktori penyimpanan file fisik dokumen PDF. |
| 4 | `database/sesi10_alter_media.sql` | **Dibuat** | Script SQL migrasi `ALTER TABLE mahasiswa` untuk penambahan kolom `foto`, `audio`, `dokumen`. |
| 5 | `config/media_helper.php` | **Dibuat** | Helper reusable `uploadMedia()` dan `hapusMediaJikaAda()`; pure PHP tanpa closing tag `?>`. |
| 6 | `assets/js/media.js` | **Dibuat** | Client-side DOM preview (gambar/audio/nama PDF), validasi client, search filter tabel, konfirmasi hapus, dan alert status. |
| 7 | `crud-media/index.php` | **Dibuat** | Halaman READ CRUD Media dengan tabel multimedia responsif dan navbar lengkap 8 menu. |
| 8 | `crud-media/tambah.php` | **Dibuat** | Halaman form CREATE media dengan upload multipart, preview interaktif, dan penanganan alert duplikat NIM. |
| 9 | `crud-media/edit.php` | **Dibuat** | Halaman form UPDATE media dengan penampil media saat ini, preview file baru, dan penanganan alert duplikat NIM. |
| 10 | `proses/crud-media/tambah.php` | **Dibuat** | Backend INSERT data teks dan file media, penanganan error 1062, serta pembersihan file jika query gagal; pure PHP tanpa `?>`. |
| 11 | `proses/crud-media/update.php` | **Dibuat** | Backend UPDATE data dan penggantian media fisik, pembersihan file lama jika sukses, dan pembersihan file baru jika gagal; pure PHP tanpa `?>`. |
| 12 | `proses/crud-media/hapus.php` | **Dibuat** | Backend DELETE record database sekaligus menghapus seluruh file media fisik terkait dari storage; pure PHP tanpa `?>`. |
| 13 | `pages/dashboard.php` | **Diubah** | Disisipkan +1 baris link navbar CRUD Media setelah CRUD Mahasiswa; mempertahankan format line ending campuran bawaan. |
| 14 | `pages/index.php` | **Diubah** | Disisipkan +1 baris link navbar CRUD Media setelah CRUD Mahasiswa (+1 baris). |
| 15 | `pages/layout.php` | **Diubah** | Disisipkan +1 baris link navbar CRUD Media setelah CRUD Mahasiswa (+1 baris). |
| 16 | `pages/data_mahasiswa.php` | **Diubah** | Disisipkan +1 baris link navbar CRUD Media setelah CRUD Mahasiswa (+1 baris). |
| 17 | `pages/form_mahasiswa.php` | **Diubah** | Disisipkan +1 baris link navbar CRUD Media dengan indentasi 8 spasi (+1 baris). |
| 18 | `crud/index.php` | **Diubah** | Disisipkan +1 baris link navbar CRUD Media setelah CRUD Mahasiswa (+1 baris). |
| 19 | `assets/css/style.css` | **Diubah** | Ditambahkan blok CSS CRUD Media di akhir file beserta penanganan display hidden preview (+57 baris). |

---

## 2. Rincian Penerapan Override (O1 – O7)

- **O1 — Nama Database & File SQL:**  
  Diterapkan pada `database/sesi10_alter_media.sql`. Menggunakan database `pemograman_web_sesi_4`:
  ```sql
  USE pemograman_web_sesi_4;

  ALTER TABLE mahasiswa
  ADD foto VARCHAR(255) NULL,
  ADD audio VARCHAR(255) NULL,
  ADD dokumen VARCHAR(255) NULL;
  ```
- **O2 — Guard Login Relatif untuk `proses/crud-media/*.php`:**  
  Diterapkan pada `proses/crud-media/tambah.php`, `proses/crud-media/update.php`, dan `proses/crud-media/hapus.php`. Menyesuaikan redirect 2 tingkat ke `../../pages/login.php` dan require ke `../../config/` untuk mencegah error HTTP 404.
- **O3 — Penanganan Error NIM Duplikat (1062):**  
  Diterapkan pada `proses/crud-media/tambah.php` dan `proses/crud-media/update.php`. Menyimpan kode error `$stmt->errno` saat eksekusi gagal, melakukan pembersihan file fisik baru yang sempat terunggah, lalu melakukan redirect ramah dengan parameter `?status=duplikat`.
- **O4 — Pemindahan Blok Status Alert ke dalam DOMContentLoaded:**  
  Diterapkan pada `assets/js/media.js`. Seluruh kode (termasuk pembacaan `URLSearchParams` dan pemanggilan `alert()`) berada di dalam satu callback `DOMContentLoaded` tanpa ada variabel yang bocor ke global scope.
- **O5 — Penyesuaian CSS Display Hidden:**  
  Diterapkan pada bagian akhir `assets/css/style.css` dengan menambahkan rule:
  ```css
  .media-preview-image[hidden],
  .media-preview-audio[hidden] {
      display: none;
  }
  ```
  Ini mencegah properti `display: block` menimpa atribut HTML `hidden`.
- **O6 — Penyeragaman Navbar:**  
  - **O6-a:** Menambahkan link `<a href="../crud-media/index.php">CRUD Media</a>` pada 6 file navbar lama tanpa mengubah baris lainnya.
  - **O6-b:** Menggunakan navbar seragam 8 link navigasi lengkap pada `crud-media/index.php`, `crud-media/tambah.php`, dan `crud-media/edit.php`.
- **O7 — Alert Error Duplikat di Form:**  
  Diterapkan pada `crud-media/tambah.php` dan `crud-media/edit.php` sebelum elemen `<form>`:
  ```php
  <?php if (($_GET["status"] ?? "") === "duplikat"): ?>
      <p class="alert-error">NIM sudah terdaftar.</p>
  <?php endif; ?>
  ```

---

## 3. Hasil Verifikasi Statis (H1 – H9)

| Kode | Uji Verifikasi | Hasil | Keterangan |
| :--- | :--- | :--- | :--- |
| **H1** | Sintaks PHP (`php -l`) | **LULUS** | 13 file (7 baru + 6 modifikasi) dipindai dengan binary PHP 8.3 Laragon; seluruhnya `No syntax errors detected`. |
| **H2** | Sintaks JS (`node --check`) | **LULUS** | `assets/js/media.js` divalidasi dan lolos tanpa kesalahan sintaks. |
| **H3** | Header Byte & Pure-PHP | **LULUS** | Semua file PHP baru dimulai dengan byte `<?php` tanpa BOM. File pure PHP tidak menggunakan tag penutup `?>`. |
| **H4** | Integritas File Lama | **LULUS** | 6 file navbar lama masing-masing bertambah tepat 1 baris; `style.css` bertambah 57 baris di akhir; file lain tidak tersentuh. |
| **H5** | Pemisahan Script JS | **LULUS** | Area `crud-media/` hanya memuat `media.js` dan tidak memuat `crud.js` untuk menghindari duplikasi event listener. |
| **H6** | Integritas ID/Class/DOM | **LULUS** | Seluruh field teks, input file, ID preview, dan selector CSS terhubung dan sinkron antara HTML dan JS. |
| **H7** | Atribut Multipart Form | **LULUS** | `crud-media/tambah.php` dan `crud-media/edit.php` menggunakan `enctype="multipart/form-data"` dan method `POST`. |
| **H8** | Kebersihan Output Debug | **LULUS** | Tidak ada `echo`, `print_r`, atau `var_dump` di dalam file `proses/crud-media/*.php`. |
| **H9** | Pengujian Runtime | **BELUM DIUJI** | Belum dilakukan pengujian di browser atau eksekusi query aktif ke database sesuai batasan instruksi. |

---

## 4. Temuan Baseline yang Dipertahankan (B6)

1. **Skrip Hapus Lama (`proses/proses_hapus.php`):**  
   Skrip CRUD teks lama tidak membersihkan file fisik media di folder `uploads/` saat record dihapus. Sesuai batasan aturan modul, file lama dipertahankan apa adanya.
2. **Line Ending File `pages/dashboard.php`:**  
   Format line ending campuran (CRLF dan LF) bawaan file tetap dipertahankan tanpa dinormalisasi paksa.
3. **Menu Project Hub:**  
   Daftar tautan `<ul>` pada `pages/dashboard.php` tetap dipertahankan tanpa perubahan; hanya navbar yang diperbarui.

---

## 5. Panduan Pengujian Manual Runtime (End-to-End)

Urutan langkah yang perlu dijalankan pada browser dan phpMyAdmin:

1. **Backup Database:**  
   Lakukan export database `pemograman_web_sesi_4` via phpMyAdmin sebagai cadangan data.
2. **Eksekusi Script SQL:**  
   Jalankan script `database/sesi10_alter_media.sql` melalui tab SQL phpMyAdmin di database `pemograman_web_sesi_4`.
3. **Verifikasi Web Server:**  
   Pastikan modul Apache, MySQL, serta ekstensi `fileinfo` pada `php.ini` Laragon aktif.
4. **Jalankan 7 Skenario Uji:**
   - **Skenario 1 (CREATE Minimal):** Isi teks + foto saja. Pastikan berhasil tersimpan dan file masuk ke `uploads/images/`.
   - **Skenario 2 (CREATE Lengkap):** Isi teks + foto + audio + PDF. Pastikan preview bekerja sebelum submit, dan setelah disimpan media dapat diputar/dibuka dari tabel.
   - **Skenario 3 (Client-side Validation):** Uji validasi JavaScript dengan mengosongkan field wajib atau memilih file di luar format/batas 2 MB.
   - **Skenario 4 (Server-side Validation):** Matikan JavaScript browser sementara, pastikan PHP tetap menolak input yang tidak valid.
   - **Skenario 5 (UPDATE Tanpa Ganti File):** Ubah nama/email saja tanpa memilih file baru; pastikan file lama tidak hilang.
   - **Skenario 6 (UPDATE Ganti File):** Upload foto baru; pastikan foto baru tampil dan foto lama di storage terhapus.
   - **Skenario 7 (DELETE):** Klik tombol Hapus; uji pembatalan (Cancel) dan persetujuan (OK), pastikan data DB dan file fisik terhapus bersih.
