# 👕 Toko Baju Management System (Laravel 12)

[![Laravel Version](https://img.shields.io/badge/Laravel-12.x-red.svg)](https://laravel.com)
[![PHP Version](https://img.shields.io/badge/PHP-8.2-blue.svg)](https://php.net)
[![License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)

Aplikasi **Toko Baju** adalah sistem manajemen inventaris modern yang dirancang untuk memudahkan pengelolaan stok barang secara digital. Dibangun dengan fokus pada kecepatan dan kemudahan penggunaan.

---

## 💻 Stack Teknologi
* **Backend**: Laravel 12 (Framework PHP terbaru)
* **Language**: PHP 8.2
* **Database**: MySQL / MariaDB
* **Version Control**: Git

---

## ✨ Fitur Unggulan
* 📦 **Manajemen Stok**: Pantau jumlah stok baju secara akurat.
* 🏷️ **Kategorisasi**: Pengelompokan baju berdasarkan jenis (Kaos, Kemeja, Jaket, dll).
* 💰 **Pricing System**: Pengaturan harga satuan produk yang dinamis.
* 🛠️ **Full CRUD**: Tambah, Lihat, Edit, dan Hapus data dalam satu antarmuka.

---

## 🛠️ Panduan Instalasi Cepat

Ikuti langkah-langkah di bawah ini untuk menjalankan proyek di perangkat lokal Anda:

### 1. Persiapan Folder
Buka terminal (PowerShell/Command Prompt) dan masuk ke direktori proyek:
```bash
cd C:\xampp\htdocs\toko_baju

2. Instalasi LibraryGunakan Composer untuk menginstal semua dependensi Laravel:Bashcomposer install
3. Konfigurasi DatabaseSesuaikan file .env Anda agar terhubung dengan database MySQL:Cuplikan kodeDB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=toko_baju
DB_USERNAME=root
DB_PASSWORD=
4. Migrasi Tabel (Crucial)Jalankan perintah ini untuk membangun tabel produks dengan kolom nama, kategori, stok, dan harga:Bashphp artisan migrate:fresh
5. Jalankan AplikasiNyalakan server lokal:Bashphp artisan serve
Buka browser dan akses: http://127.0.0.1:8000/produk📂 Struktur Data (Database Schema)Nama KolomTipe DataDeskripsiidBigIntID Unik ProduknamaStringNama/Model BajukategoriStringJenis Kategori BajustokIntegerJumlah Stok TersediahargaIntegerHarga per Satuan📜 Riwayat Pengembangan (Git)Proyek ini dikelola menggunakan Git dengan identitas pengembang sebagai berikut:Username: salsaratu123Email: salsaratusantika@example.comCommit Terakhir: first commit (Status: Working Tree Clean)📄 LisensiDistributed under the MIT License. See LICENSE for more information.Dibuat dengan ❤️ oleh salsaratu123
### Tips Penggunaan:
1.  **Visual**: README ini sudah menggunakan "Badge" (ikon Laravel & PHP) di bagian atas agar terlihat seperti proyek profesional di GitHub.
2.  **Skema**: Saya menyertakan tabel database agar kamu tidak lupa kolom apa saja yang sudah kamu buat (nama, kategori, stok, harga).
3.  **Path**: Instruksi `cd C:\xampp\htdocs\toko_baju` sangat penting agar kamu tidak 
