-- Modul 10: tambah kolom media. Jalankan SEKALI via phpMyAdmin
-- (tab SQL). Jika muncul "Duplicate column name", berarti sudah
-- pernah dijalankan.
USE pemograman_web_sesi_4;

ALTER TABLE mahasiswa
ADD foto VARCHAR(255) NULL,
ADD audio VARCHAR(255) NULL,
ADD dokumen VARCHAR(255) NULL;

