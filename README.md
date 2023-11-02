# posUjian
## Bahas Soal Ujian Akhir Mata Diklat Web Development

Buat CRUD untuk Aplikasi POS (Point Of Sales) dengan aturan sebagai berikut:
1. Buat Database dengan nama: posujian
terdiri dari 2 tabel, yaitu tabel supplier dan tabel penjualan dengan rincian field/kolom sebagai berikut:

supplier
- id INT Unsigned PK AI
- nama VARCHAR(50) NULL,
- alamat VARCHAR(255) NULL,
- kontak VARCHAR(50),

penjualan
- id INT Unsigned PK AI
- supplier_id INT Unsigned FK
- total INT Unsigned Null

Buat Relasi antara supplier_id pada tabel penjualan dan id pada tabel supplier dengan action cascade

2. Buat folder aplikasi dengan nama posUjian siapkan folder images didalamnya dan masukan gambar untuk logo dan favicon
buat file index utama dengan pilihan akan mengarahkan ke isian supplier dan penjualan, sesuaikan folder yang dibutuhkan 

3. Buat CRUD untuk supplier pastikan jalan semua mulai dari
   read - index.php 
   crud - add.php dan save.php
   update - edit.php dan update.php
   delete - delete.php

4. Buat CRUD untuk penjualan pastikan jalan semua mulai dari
   read - index.php 
   crud - add.php dan save.php
   update - edit.php dan update.php
   delete - delete.php
