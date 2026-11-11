# Lembar Jawaban Modul 4A

### BAGIAN 1: Catatan Eksperimen

#### 1. Step 3: Ubah margin body dari 0 menjadi 30px
Hasil yang diharapkan secara teori: Muncul jarak 30px di keempat tepi halaman peramban. Elemen header, nav, dan main bergeser menjauh dari tepi jendela. Warna latar belakang body tetap memenuhi seluruh jendela peramban karena latar belakang elemen body meluas ke seluruh kanvas.  
Pengamatan saya: [ISI SETELAH MENCOBA]

Theoretically expected result: A 30px clearance appears around all four outer edges of the browser window. The header, nav, and main containers shift inward away from viewport edges. The body background color still covers the entire browser window because the root body background expands across the canvas.  
My observation: [ISI SETELAH MENCOBA]

#### 2. Step 4a: Bandingkan width: 100% dengan width: 90% pada main
Hasil yang diharapkan secara teori: Pada layar yang lebih sempit dari batas max-width, nilai 100 persen membuat elemen main menempel ke kedua tepi jendela peramban, sedangkan nilai 90 persen menyisakan ruang 5 persen di tiap sisi kiri dan kanan. Pada layar lebar, batas max-width 1000px yang menentukan ukuran elemen, sehingga perbedaan kedua nilai baru terlihat saat lebar jendela peramban berada di bawah sekitar 1111px.  
Pengamatan saya: [ISI SETELAH MENCOBA]

Theoretically expected result: On viewports narrower than the max-width boundary, a width of 100 percent pushes the main element flush against both edges, whereas 90 percent leaves 5 percent of space on each side. On wider viewports, the max-width limit of 1000px governs dimensions, so the visual difference only appears when viewport width falls below roughly 1111px.  
My observation: [ISI SETELAH MENCOBA]

#### 3. Step 4b: Bandingkan max-width: 700px dengan 1200px
Hasil yang diharapkan secara teori: Pengaturan 700px membuat kontainer main lebih sempit dan terpusat dengan ruang kosong lebih besar di sisi kiri dan kanan. Pengaturan 1200px membuat elemen main lebih lebar tetapi tetap dibatasi oleh 90 persen lebar jendela peramban, sehingga kontainer baru mencapai lebar 1200px jika jendela peramban cukup lebar.  
Pengamatan saya: [ISI SETELAH MENCOBA]

Theoretically expected result: Setting 700px keeps the main container narrower and centered with larger empty margins on each side. Setting 1200px allows the main element to grow wider while still remaining constrained by 90 percent of the viewport width, reaching 1200px only when the browser window is wide enough.  
My observation: [ISI SETELAH MENCOBA]

#### 4. Step 6a: Ubah padding link nav dari 8px 12px menjadi 2px 4px
Hasil yang diharapkan secara teori: Kotak tautan navigasi mengecil karena ruang dalam berkurang. Luas area klik setiap tautan berkurang dan deretan tautan tampak lebih rapat satu sama lain.  
Pengamatan saya: [ISI SETELAH MENCOBA]

Theoretically expected result: The navigation link boxes shrink because internal clearance is reduced. The clickable surface area of each link decreases, making the links appear close together.  
My observation: [ISI SETELAH MENCOBA]

#### 5. Step 6b: Ubah margin-right link menjadi 20px
Hasil yang diharapkan secara teori: Jarak pemisah antarlink bertambah lebar, sedangkan ukuran kotak tautan tetap sama karena margin berada di luar border. Karakter spasi bawaan di antara elemen inline-block pada kode HTML juga menambah jarak horizontal kecil antarlink.  
Pengamatan saya: [ISI SETELAH MENCOBA]

Theoretically expected result: The gap between neighboring links expands, while individual link box sizes remain unchanged because margin sits outside the border. Natural whitespace between inline-block elements in the HTML source also adds a small horizontal gap between links.  
My observation: [ISI SETELAH MENCOBA]

#### 6. Step 7: Bandingkan card-compact (padding 12px) dengan card-comfortable (padding 30px) di layout.html. Untuk nilai 5px dari modul, set padding: 5px pada Section A lewat DevTools
Hasil yang diharapkan secara teori: Pengaturan padding 12px pada card-compact, 30px pada card-comfortable, serta 5px pada Section A mengatur besar ruang kosong di dalam batas border elemen. Teks konten berada lebih dekat ke border saat padding kecil dan menjauh saat padding besar, sedangkan jarak margin antarsection tidak mengalami perubahan.  
Pengamatan saya: [ISI SETELAH MENCOBA]

Theoretically expected result: Setting padding to 12px on card-compact, 30px on card-comfortable, and 5px on Section A controls interior clearance within element borders. Content text sits closer to borders with small padding and farther away with larger padding, while outer margin spacing between sections remains unaffected.  
My observation: [ISI SETELAH MENCOBA]

#### 7. Step 9a: Ubah padding sel tabel dari 12px menjadi 2px, lalu 20px
Hasil yang diharapkan secara teori: Nilai padding 2px membuat teks data menempel ke garis pembatas sel, sedangkan nilai 20px menciptakan ruang dalam yang lega sehingga tinggi keseluruhan tabel bertambah.  
Pengamatan saya: [ISI SETELAH MENCOBA]

Theoretically expected result: A padding value of 2px pushes cell text tightly against cell borders, whereas a value of 20px produces spacious interior clearance that increases the overall table height.  
My observation: [ISI SETELAH MENCOBA]

#### 8. Step 9b: Ubah width tabel dari 100% menjadi 70%
Hasil yang diharapkan secara teori: Lebar tabel menyempit menjadi 70 persen lebar kontainer section. Sisa ruang sebesar 30 persen tampak kosong di sisi kanan karena elemen tabel tidak dipusatkan dengan margin auto.  
Pengamatan saya: [ISI SETELAH MENCOBA]

Theoretically expected result: Table width contracts to 70 percent of the parent section container. The remaining 30 percent of space sits empty on the right side because the table element is not centered with auto margins.  
My observation: [ISI SETELAH MENCOBA]

#### 9. Step 10: Hapus display: inline-block dari .demo-link
Hasil yang diharapkan secara teori: Elemen tautan kembali berperilaku sebagai elemen inline murni. Padding dan margin horizontal tetap berlaku pada aliran teks, padding vertikal tetap tampak tetapi tidak mendorong elemen atau baris lain di atas dan bawahnya, sedangkan margin vertikal diabaikan oleh peramban.  
Pengamatan saya: [ISI SETELAH MENCOBA]

Theoretically expected result: The anchor tags revert to pure inline behavior. Horizontal padding and margins still take effect within the text flow, vertical padding renders visually without displacing neighboring lines above or below, and vertical margins are ignored by the browser.  
My observation: [ISI SETELAH MENCOBA]

---

### BAGIAN 2: Observation Questions (Part C)

#### 1. Berapa padding section Anda?
Berdasarkan style.css, padding pada section biasa bernilai 24px, pada class card-compact bernilai 12px, dan pada class card-comfortable bernilai 30px.

According to style.css, padding on standard section elements is 24px, on class card-compact it is 12px, and on class card-comfortable it is 30px.

#### 2. Apakah margin berada di luar border?
Ya. Margin merupakan lapisan terluar pada CSS Box Model yang terletak di luar garis border dan berfungsi sebagai jarak pemisah ke elemen lain di sekitarnya.

Yes. Margin is the outermost layer of the CSS Box Model situated outside the border, functioning as separation distance to other surrounding elements.

#### 3. Jika width diubah di DevTools, bagian mana yang berubah?
Karena aturan box-sizing border-box aktif, nilai width mencakup content, padding, dan border. Mengubah nilai width akan mengubah ukuran total kotak dan area content menyesuaikan, sedangkan nilai padding, border, dan margin tidak berubah.

Because box-sizing border-box is active, width encompasses content, padding, and border. Modifying width alters total box dimensions and the content area adjusts, while padding, border, and margin values do not change.

#### 4. Apa keuntungan DevTools dibanding menebak-nebak CSS?
Nilai properti dapat diubah dan hasilnya langsung terlihat tanpa mengedit file secara permanen. Diagram Box Model menunjukkan ukuran content, padding, border, dan margin yang tepat. Panel Styles menunjukkan aturan mana yang berlaku beserta file dan barisnya.

Property values can be changed with immediate visual results without editing files permanently. The Box Model diagram shows precise measurements for content, padding, border, and margin. The Styles panel shows which rules apply along with their source files and lines.

---

### BAGIAN 3: Reflection Questions

#### 1. Jelaskan perbedaan content, padding, border, dan margin dengan bahasa Anda sendiri.
Content adalah area inti tempat teks, gambar, atau elemen anak berada. Padding adalah ruang bantalan di dalam elemen yang memisahkan content dari garis tepi. Border adalah garis batas pembungkus yang mengelilingi content dan padding. Margin adalah ruang kosong di luar border yang memisahkan elemen dari elemen tetangga di sekitarnya.

Content is the central area where text, images, or child elements reside. Padding is the interior clearance inside the element separating content from outer edges. Border is the perimeter line wrapping content and padding. Margin is the empty space outside the border separating the element from neighboring elements.

#### 2. Apa perbedaan margin dan padding ketika background-color diberikan pada suatu elemen?
Warna latar background-color mencakup content dan padding tetapi tidak mencakup margin. Secara teknis latar juga memanjang sampai di bawah border, yang terlihat pada border transparan seperti nav a.

The background-color property covers content and padding while leaving margin untouched. Technically the background also extends beneath the border, which is visible on transparent borders such as nav a.

#### 3. Mengapa box-sizing: border-box membantu saat menentukan width?
Model border-box menyertakan padding dan border ke dalam nilai width yang ditentukan. Sebagai contoh, elemen dengan width 300px, padding kiri dan kanan 20px, serta border kiri dan kanan 5px menghasilkan 350px pada content-box, sedangkan border-box tetap 300px.

The border-box model includes padding and border within the specified width. For example, an element with width 300px, 20px left and right padding, and 5px left and right border produces 350px on content-box, whereas border-box remains 300px.

#### 4. Apa yang dimaksud normal document flow?
Normal document flow adalah alur penataan elemen bawaan tanpa Flexbox, Grid, atau positioning. Elemen block mengikuti urutan HTML dari atas ke bawah dan tiap block mulai di baris baru. Elemen inline mengalir mengikuti teks.

Normal document flow is the default arrangement of elements without Flexbox, Grid, or positioning. Block elements follow HTML source order from top to bottom and each block starts on a new line. Inline elements flow along with the text.

---

### BAGIAN 4: Exit Ticket

#### 1. Sebutkan empat lapisan utama CSS Box Model.
Empat lapisan utama CSS Box Model adalah content, padding, border, dan margin.

The four primary layers of the CSS Box Model are content, padding, border, and margin.

#### 2. Apa fungsi padding?
Padding berfungsi menciptakan ruang dalam antara content dan garis border.

Padding creates interior space between content and the boundary border.

#### 3. Apa fungsi margin?
Margin berfungsi menciptakan jarak pemisah di luar border untuk menjauhkan elemen dari elemen lain.

Margin creates exterior separation space outside the border to push away neighboring elements.

#### 4. Apa perbedaan width: 90% dengan max-width: 1000px?
Nilai width 90 persen mengikuti lebar parent secara relatif, sedangkan max-width 1000px adalah batas maksimum agar konten tidak terlalu lebar di layar besar.

A width of 90 percent follows the parent width relatively, while max-width 1000px sets an upper limit so content does not stretch too wide on large screens.

#### 5. Apa fungsi box-sizing: border-box?
Properti box-sizing border-box memasukkan padding dan border ke dalam perhitungan total width dan height elemen.

The box-sizing border-box property includes padding and border into the total calculation of element width and height.

#### 6. Apa perbedaan block, inline, dan inline-block?
Elemen block mulai di baris baru dan memenuhi lebar kontainer, sedangkan elemen inline mengalir bersama teks di mana padding vertikal tampil tetapi tidak mendorong elemen lain dan margin vertikal diabaikan. Elemen inline-block mengalir berdampingan seperti inline tetapi dapat menerima pengaturan dimensi dan spasi secara utuh seperti block.

Block elements begin on a new line and fill container width, while inline elements flow with text where vertical padding renders but does not push other elements and vertical margin is ignored. Inline-block elements sit side by side like inline but accept full dimensions and spacing controls like block.

#### 7. Mengapa kita belum memakai Flexbox/Grid sebagai layout utama di modul ini?
Tujuannya agar perilaku box default, ukuran, dan spacing dipahami lebih dulu. Flexbox dipakai di Sesi 5 dan Grid di Sesi 6.

The goal is to understand default box behavior, sizing, and spacing first. Flexbox is used in Session 5 and Grid in Session 6.

---

### BAGIAN 5: Penjelasan Tiga Perubahan CSS pada Advanced Challenge

#### Perubahan 1: Item Keahlian Menggunakan Selektor .skill-list dan .skill-list li
Daftar keahlian diubah menjadi label ringkas horizontal menggunakan display: inline-block pada elemen li. Penghapusan tanda daftar melalui list-style: none serta penambahan padding 4px 10px dan latar belakang abu terang #eef3f8 menjadikan setiap keahlian tampak seperti lencana kecil yang rapi tanpa memerlukan flexbox.

The skills list transforms into compact horizontal badges by applying display: inline-block to li items. Removing list markers with list-style: none and applying 4px 10px padding alongside light blue background #eef3f8 turns each skill into a clean tag without flexbox.

#### Perubahan 2: Pembatasan Lebar Paragraf Profil Menggunakan Selektor .profile-text
Selektor .profile-text menerapkan batas lebar max-width: 700px dan margin: 0 auto 16px pada paragraf data diri. Pengaturan ini membatasi panjang baris teks agar nyaman dibaca oleh mata manusia pada layar monitor lebar sekaligus menjaga posisi teks tetap terpusat di dalam section profil.

The .profile-text selector assigns max-width: 700px and margin: 0 auto 16px to profile data paragraphs. This rule limits line length for comfortable reading on wide displays while maintaining centered alignment inside the profile section.

#### Perubahan 3: Penataan Konsisten Daftar Kontak Menggunakan Selektor .contact-list dan .contact-list li
Bagian kontak distrukturkan sebagai elemen ul dengan class contact-list tanpa penomoran bawaan. Properti margin-bottom: 8px pada setiap li memastikan jarak vertikal yang seragam antar item kontak, menghasilkan hierarki visual yang teratur dan rapi.

The contact section is structured as a ul element with class contact-list without bullet markers. Applying margin-bottom: 8px to each li ensures uniform vertical spacing between contact entries, creating an organized visual hierarchy.
