# Lembar Jawaban Modul 4B

### BAGIAN 1: Eksperimen

#### 1. Ubah padding form dari 24px menjadi 5px, lalu 40px. Apa yang berubah?
Hasil yang diharapkan secara teori: Lebar total form tetap bertahan pada batas max-width 600px karena penerapan box-sizing border-box. Saat padding bernilai 5px, ruang antara batas form dan kontrol input mengecil sehingga area content di dalam form melebar. Saat padding bernilai 40px, ruang dalam membesar sehingga area content di dalam form menyempit.  
Pengamatan saya: [ISI SETELAH MENCOBA]

Theoretically expected result: The total width of the form remains constrained by max-width 600px because box-sizing border-box is active. When padding is set to 5px, the clearance between the form border and inner controls decreases, expanding the content area. When padding is set to 40px, the inner clearance increases, narrowing the content area.  
My observation: [ISI SETELAH MENCOBA]

#### 2. Ubah margin-bottom input dari 16px menjadi 2px, lalu 30px. Mana yang paling mudah dibaca?
Hasil yang diharapkan secara teori: Perubahan nilai margin-bottom mengatur jarak vertikal antarfield input formulir. Nilai 2px merapatkan posisi antarelemen, sedangkan nilai 30px memperlebar pemisah vertikal antarfield.  
Pengamatan saya: [ISI SETELAH MENCOBA]

Theoretically expected result: Changing margin-bottom adjusts the vertical spacing between input fields. A value of 2px positions elements close together, whereas a value of 30px widens the vertical separation between form controls.  
My observation: [ISI SETELAH MENCOBA]

#### 3. Ubah border input dari 1px menjadi 4px. Bagaimana ukuran visual berubah?
Hasil yang diharapkan secara teori: Garis pembatas input menebal menjadi 4px. Karena border-box aktif, lebar total input tetap 100 persen lebar content form, dan area content di dalam input menyempit 6px (3px kiri dan 3px kanan). Tinggi input bertambah 6px, karena height bernilai auto dan border atas dan bawah ikut menambah tinggi.  
Pengamatan saya: [ISI SETELAH MENCOBA]

Theoretically expected result: The input border thickens to 4px. Because border-box is active, the total input width stays at 100 percent of the form content width, and the content area inside the input narrows by 6px (3px on each side). The input height grows by 6px, because height is auto and the top and bottom borders add to it.  
My observation: [ISI SETELAH MENCOBA]

#### 4. Set box-sizing: content-box pada .student-form input. Apakah input tampak melewati parent?
Hasil yang diharapkan secara teori: Input melebihi lebar content form. Aturan * dari Modul 4A masih aktif, jadi menghapus baris box-sizing dari .student-form input tidak berefek. Untuk melihat efeknya, set box-sizing: content-box pada .student-form input. Selisih lebarnya sama dengan total padding horizontal ditambah total border horizontal input. Pada aturan dasar (padding 10px 12px dan border 1px), selisihnya 24px padding (12px kiri dan 12px kanan) ditambah 2px border, yaitu 26px. Dengan form-compact selisihnya 18px, dan dengan form-comfortable 30px. Hitungan 26px berlaku saat form tidak memakai form-compact maupun form-comfortable.  
Pengamatan saya: [ISI SETELAH MENCOBA]

Theoretically expected result: The input becomes wider than the form content width. The universal * rule from Modul 4A stays active, so removing the box-sizing line from .student-form input has no effect. To see the effect, set box-sizing: content-box on .student-form input. The extra width equals the total horizontal padding plus the total horizontal border of the input. With the base rule (padding 10px 12px and border 1px), the extra width is 24px of padding (12px left and 12px right) plus 2px of border, which is 26px. With form-compact the extra width is 18px, and with form-comfortable it is 30px. The 26px figure applies only when the form uses neither form-compact nor form-comfortable.  
My observation: [ISI SETELAH MENCOBA]

#### 5. Perbandingan form-compact dan form-comfortable
Hasil yang diharapkan secara teori: Class form-compact menerapkan padding kontainer form sebesar 12px, serta padding elemen input dan select sebesar 6px 8px dengan margin-bottom 8px sehingga menghasilkan form yang padat. Class form-comfortable menerapkan padding kontainer form sebesar 32px, serta padding elemen input dan select sebesar 12px 14px dengan margin-bottom 24px sehingga menghasilkan form yang berjarak renggang.  
Pengamatan saya: [ISI SETELAH MENCOBA]

Theoretically expected result: The form-compact class applies 12px padding to the form container, alongside 6px 8px padding and an 8px margin-bottom on input and select elements, producing a dense form layout. The form-comfortable class applies 32px padding to the form container, alongside 12px 14px padding and a 24px margin-bottom on input and select elements, producing a spacious layout.  
My observation: [ISI SETELAH MENCOBA]

#### 6. NIM duplikat
Hasil yang diharapkan secara teori: Sebelum penanganan, PHP 8.1 ke atas membuat mysqli melempar exception, dan halaman menampilkan fatal error Uncaught mysqli_sql_exception dengan pesan Duplicate entry (jika display_errors aktif). Pada PHP yang lebih lama, execute() mengembalikan false dengan errno 1062, tetapi kode tetap berjalan ke redirect, sehingga halaman menampilkan pesan sukses padahal data tidak tersimpan. Setelah penanganan pada B5b, kedua kasus berakhir dengan redirect ke form_mahasiswa.php?status=duplikat dan pesan alert-error.  
Sebelum penanganan (setelah UNIQUE, sebelum B5b): [ISI SETELAH MENCOBA]  
Sesudah penanganan: [ISI SETELAH MENCOBA]

Theoretically expected result: Before error handling, PHP 8.1 and newer makes mysqli throw an exception, and the page shows a fatal error Uncaught mysqli_sql_exception with a Duplicate entry message (when display_errors is on). On older PHP versions, execute() returns false with errno 1062, but the code still reaches the redirect, so the page shows a success message even though the row was not saved. After the B5b handling, both cases end with a redirect to form_mahasiswa.php?status=duplikat and an alert-error message.  
Before error handling (after UNIQUE, before B5b): [ISI SETELAH MENCOBA]  
After error handling: [ISI SETELAH MENCOBA]

---

### BAGIAN 2: Reflection Questions

#### 1. Apa perbedaan fungsi id dan name pada elemen input?
Atribut id menjawab elemen mana di halaman dan digunakan oleh label for, selector CSS, serta pemanggilan JavaScript. Atribut name menjadi key data yang dikirim ke backend dan dibaca lewat $_POST["..."].

The id attribute identifies which element exists on the page and connects with label for elements, CSS selectors, and JavaScript. The name attribute serves as the data key sent to the backend and read through $_POST["..."].

#### 2. Mengapa form tambah data menggunakan POST?
Form tambah data mengirim data ke server untuk diproses dan disimpan, dan POST dibuat untuk tujuan itu. GET dipakai untuk membuka atau membaca resource, dan parameternya tampil di URL. POST tidak menampilkan nilai di URL, tetapi tidak otomatis aman atau terenkripsi, sehingga aplikasi nyata tetap memerlukan HTTPS.

An add-data form sends data to the server for processing and storage, and POST exists for that purpose. GET opens or reads a resource, and its parameters appear in the URL. POST does not show values in the URL, but it is not automatically secure or encrypted, so real applications still need HTTPS.

#### 3. Apa fungsi koneksi.php dan mengapa dipisahkan?
koneksi.php membuat koneksi mysqli ke database pemograman_web_sesi_4, menyimpannya di variabel $conn, dan memeriksa connect_error. Berkas ini dipisahkan supaya pengaturan database cukup ditulis satu kali dan setiap halaman PHP memanggilnya dengan require.

koneksi.php creates a mysqli connection to the pemograman_web_sesi_4 database, stores it in the $conn variable, and checks connect_error. The file stays separate so the database settings exist in one place and every PHP page loads them with require.

#### 4. Jelaskan hubungan antara padding pada form dengan konsep CSS Box Model.
Padding adalah lapisan Box Model antara content dan border. Nilai padding pada .student-form memberi ruang antara isi form dan border form. Karena aturan border-box aktif, nilai padding dan border termasuk dalam width.

Padding represents the Box Model layer between content and border. The padding on .student-form creates room between the form content and the form border. Because border-box is active, padding and border are included inside width.

#### 5. Jelaskan alur data sejak tombol Simpan ditekan sampai record muncul pada tabel.
Saat pengguna mengklik Simpan Data, browser mengirim POST ke proses_tambah.php, lalu PHP membaca $_POST dan melakukan trim, validasi, prepare, bind_param, dan execute INSERT ke MySQL, kemudian redirect ke data_mahasiswa.php?status=sukses. Browser membuat request GET ke data_mahasiswa.php, PHP menjalankan SELECT, dan loop while dengan fetch_assoc menghasilkan baris tabel HTML.

When a user clicks Simpan Data, the browser sends a POST request to proses_tambah.php, then PHP reads $_POST and performs trim operations, validation, prepare, bind_param, and execute INSERT to MySQL, followed by a redirect to data_mahasiswa.php?status=sukses. The browser makes a GET request to data_mahasiswa.php, PHP runs SELECT, and a while loop with fetch_assoc generates HTML table rows.

---

### BAGIAN 3: Exit Ticket

#### 1. Apa fungsi atribut action pada `<form>`?
Atribut action menentukan alamat URL berkas tujuan yang menerima dan memproses data kiriman form.

The action attribute specifies the destination URL that receives and processes submitted form data.

#### 2. Apa fungsi atribut method?
Atribut method menentukan metode HTTP yang dipakai untuk mengirimkan data formulir, seperti GET atau POST.

The method attribute defines the HTTP method used to send form data, such as GET or POST.

#### 3. Mengapa input membutuhkan name untuk dikirim ke PHP?
Input membutuhkan atribut name karena PHP memakai nama tersebut sebagai kunci indeks pada array $_POST atau $_GET. Tanpa name, browser tidak menyertakan data input ke dalam payload kiriman.

Inputs require a name attribute because PHP uses that identifier as the key inside the $_POST or $_GET array. Without a name attribute, the browser excludes the input value from the submitted payload.

#### 4. Apa arti `$_POST["nama"]`?
Sintaks $_POST["nama"] membaca data input dari formulir yang memiliki atribut name="nama" melalui metode request POST.

The $_POST["nama"] syntax accesses form data sent through the POST method carrying the attribute name="nama".

#### 5. Apa fungsi prepared statement?
Prepared statement memisahkan struktur SQL dari nilai input, sehingga query lebih aman dan lebih mudah dikelola. Polanya prepare, bind, lalu execute.

A prepared statement separates the SQL structure from the input values, so the query is safer and easier to maintain. The pattern is prepare, bind, then execute.

#### 6. Apa fungsi INSERT?
Perintah INSERT menambahkan baris data baru ke dalam tabel basis data.

The INSERT statement adds new records into a database table.

#### 7. Apa fungsi SELECT?
Perintah SELECT mengambil dan menampilkan data baris serta kolom dari tabel basis data.

The SELECT statement retrieves data rows and columns from database tables.

#### 8. Mengapa htmlspecialchars() digunakan ketika data ditampilkan ke HTML?
Fungsi htmlspecialchars() mengubah karakter khusus HTML menjadi entitas teks yang aman untuk mencegah serangan Cross Site Scripting. Karakter berbahaya tidak akan dieksekusi oleh peramban sebagai tag HTML atau skrip.

The htmlspecialchars() function encodes special HTML characters into safe text entities to prevent Cross Site Scripting attacks. Potentially harmful input will not execute inside the browser as markup or script.

#### 9. Mengapa file PHP dijalankan melalui localhost/server?
File PHP berisi kode server yang harus dijalankan interpreter PHP di web server sebelum menghasilkan HTML. Jika file dibuka sebagai file lokal atau lewat server yang tidak memproses PHP, kode PHP tidak berjalan sebagaimana mestinya.

PHP files contain server code that a PHP interpreter on a web server must run before it produces HTML. If the file opens as a local file or through a server that does not process PHP, the PHP code does not run as intended.

#### 10. Di bagian mana Box Model dipakai pada halaman form?
Box Model dipakai di beberapa selector. .student-form memakai width: 100%, max-width: 600px, margin: 24px auto, padding: 24px, dan border: 1px solid #cccccc. .student-form label memakai margin-bottom: 6px. .student-form input dan .student-form select memakai display: block, width: 100%, padding: 10px 12px, margin-bottom: 16px, border: 1px solid #aaaaaa, dan box-sizing: border-box. .student-form button memakai padding: 10px 16px dan border: 1px solid #333333. .alert-error memakai padding: 10px 12px, margin: 16px 0, dan border: 1px solid #d9b3b3. .form-compact dan .form-comfortable mengubah padding form serta padding dan margin-bottom pada input dan select.

The Box Model appears in several selectors. .student-form uses width: 100%, max-width: 600px, margin: 24px auto, padding: 24px, and border: 1px solid #cccccc. .student-form label uses margin-bottom: 6px. .student-form input and .student-form select use display: block, width: 100%, padding: 10px 12px, margin-bottom: 16px, border: 1px solid #aaaaaa, and box-sizing: border-box. .student-form button uses padding: 10px 16px and border: 1px solid #333333. .alert-error uses padding: 10px 12px, margin: 16px 0, and border: 1px solid #d9b3b3. .form-compact and .form-comfortable change the form padding and the padding and margin-bottom of input and select.

---

### BAGIAN 4: Alur Data nomor_telepon (Core Challenge)

#### Alur Data nomor_telepon Berdasarkan Kode Proyek
1. Pengguna memasukkan nomor kontak ke dalam input type="tel" name="nomor_telepon" pada form_mahasiswa.php.
2. Pengguna mengirimkan form via metode POST menuju proses_tambah.php.
3. Berkas proses_tambah.php memuat konfigurasi koneksi pada baris awal melalui require "koneksi.php".
4. Berkas proses_tambah.php memeriksa metode request untuk memastikan nilainya adalah POST.
5. Berkas proses_tambah.php membaca input nomor telepon lalu menjalankan fungsi trim.
6. proses_tambah.php memeriksa field kosong, termasuk nomor telepon, dan menghentikan proses dengan die dan pesan "Semua field wajib diisi." jika ada yang kosong.
7. Berkas proses_tambah.php menjalankan validasi format email melalui filter_var.
8. Berkas proses_tambah.php menyiapkan query prepare INSERT dengan 5 kolom (nim, nama, program_studi, email, nomor_telepon) dan 5 placeholder pada tabel mahasiswa di database pemograman_web_sesi_4.
9. Berkas proses_tambah.php mengikat kelima parameter string menggunakan bind_param dengan format "sssss".
10. Berkas proses_tambah.php menjalankan query melalui perintah execute di dalam blok try catch.
11. Setelah penyimpanan berhasil, proses_tambah.php mengalihkan peramban dengan mengirimkan header redirect ke data_mahasiswa.php?status=sukses.
12. Browser merespons dengan mengirimkan request GET ke data_mahasiswa.php.
13. Berkas data_mahasiswa.php memuat koneksi.php dan mengeksekusi query SELECT yang menyertakan kolom nomor_telepon dari tabel mahasiswa.
14. Berkas data_mahasiswa.php menjalankan loop while dengan fetch_assoc untuk membaca baris data hasil query.
15. Berkas data_mahasiswa.php mencetak nilai kolom nomor_telepon ke dalam elemen td menggunakan fungsi htmlspecialchars().

#### Data Flow of nomor_telepon Based on Project Code
1. The user enters contact digits into input type="tel" name="nomor_telepon" inside form_mahasiswa.php.
2. The user submits the form via the POST method to proses_tambah.php.
3. The proses_tambah.php file includes the connection script on its opening lines through require "koneksi.php".
4. The proses_tambah.php script verifies the request method to confirm that it is POST.
5. The proses_tambah.php script retrieves the phone number input and applies the trim function.
6. proses_tambah.php checks for empty fields, including the phone number, and stops with die and the message "Semua field wajib diisi." when any field is empty.
7. The proses_tambah.php script validates the email format using filter_var.
8. The proses_tambah.php script calls prepare for an INSERT query with 5 columns (nim, nama, program_studi, email, nomor_telepon) and 5 placeholders targeting the mahasiswa table in the pemograman_web_sesi_4 database.
9. The proses_tambah.php script binds all five string parameters using bind_param with the "sssss" format string.
10. The proses_tambah.php script runs the query using execute inside a try catch block.
11. Upon successful execution, proses_tambah.php redirects the browser by issuing a redirect header to data_mahasiswa.php?status=sukses.
12. The browser responds by making a GET request to data_mahasiswa.php.
13. The data_mahasiswa.php script includes koneksi.php and executes a SELECT query that includes the nomor_telepon column from the mahasiswa table.
14. The data_mahasiswa.php script runs a while loop with fetch_assoc to read query result rows.
15. The data_mahasiswa.php script renders the nomor_telepon column value inside a td element using the htmlspecialchars() function.
