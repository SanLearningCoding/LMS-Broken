# Nama Project : LMS Team 9 #

## Daftar Anggota ##
* Yiesan Daffa Azrikfi : 10241073
* Zaskiya Salwa Nafitri : 10241077
* Vera Friska : 10241073
* Toro Ababil Tamami Darojat : 10241071

Cara Instalasi Repository Github

-VSCode login pake akun github
- Membuat Folder Kosong, lalu buka terminal
```
git clone https://github.com/ToroAbabil/kampuslms-kelompok-09
```
Cek Update dari Repository (Sebelum mengupload jalankan ini terlebih dahulu)
```
git pull origin main
```
Upload file ke repository
```
git add .
git commit -m "komentar"
git push origin main
```
## Cara Instalasi Laravel ##

### Prasyarat (Prerequisites) ###

- Agar mempermudah set up environment, kita menggunakan Laravel Herd (tersedia untuk manual)
- Node.js & NPM (Bisa diaktifkan via menu *Node.js* di pengaturan Laravel Herd atau unduh versi LTS)
- Git
- Database: SQLite (default Laravel 12, langsung siap untuk digunakan tanpa perlu instalasi database terpisah) atau MySQL (opsional via XAMPP/Laragon)

***

Cara Instalasi dan Menjalankan Project Laravel
Setelah melakukan clone repositoru, ikuti langkah-langkah berikut untuk menginstall dan menjalankan proyek lms-team-09:

### 1. Masuk ke Direktori Project ###
Buka terminal dan masuk ke folder project Laravel:
```
cd lms-team-09
```
### 2. Install Dependensi PHP (Composer) ###
Jalankan perintah berikut untuk mengunduh semua package beckend:
```
composer install
```
### 3. Install Dependensi Frontend (NPM) ###
Jalankan perintah berikut untuk mengunduh package frontend (Tailwind CSS, Vite, dll):
```
npm install
```
### 4. Buat File Environment (.env) ###
Menyalin file template .env.example menjadi .env:
- Windows (CMD):
```
copy .env.example .env
```
- Windows (Powershell) / Git Bash / Linux / Mac:
```
cp .env.example .env
```
### 5. Generate Application Key ### 
Jalankan perintah berikut untuk membuat security key aplikasi:
```
php artisan key:generate
```
### 6. Konfigurasi Database dan Migrasi  ###
Pilihan A: Menggunakan SQLite (default dan Paling Praktis)
1. Buka file .env dan pastikan konfigurasi database:
```
DB_CONNECTION=sqlite
```
2. Jalankan migrasi database (Laravel akan otomatis menawarkan membuat file database.sqlite jika belum ada):
```
php artisan migrate
```
Pilihan B: Menggunakan MySQL (XAMPP/LARAGON)
1. Nyalakan service Apache dan MySQL di XAMPP/Laragon.
2. Buat database baru di phpMyAdmin (misalnya bernama laravel)
3. Sesuaikan konfigurasi di file .env:
```
DB_CONNECTION=sqlite
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```
4. Jalankan migrasi:
```
php artisan migrate
```
Jika ada dummy data atau seeder yang perlu dimasukkan:
```
php artisan migrate --seed
```
### 7. Menjalankan Server Development ###
Opsi 1: Menggunakan Laravel Herd (Rekomendasi)

 Jika folder project sudah berada di folder yang di-*Park* atau di-*Link* oleh Laravel Herd

- Cukup jalankan asset compiler di terminal:
```
npm run dev
```
- Aplikasi otomatis dapat langsung diakses di browser melalui URL: http://lms-team-9.test/

Opsi 2: Menggunakan Composer Run Dev (All-in-One CLI)
```
composer run dev
```
*(Perintah ini akan menjalankan server backend, Vite frontend, queue, dan logger secara bersamaan).

Opsi 3: Jalankan Terpisah di 2 Terminal 
- Terminal 1 (Backend Laravel):
```
php artisan serve
```
- Terminal 2 (Frontend Vite):
```
npm run dev
```
Akses aplikasi di browser pada: http://localhost:8000 atau http://127.0.0.1:8000

***

## Pembagian Peran ##
* Yiesan Daffa Azrikfi : 
* Zaskiya Salwa Nafitri : 
* Vera Friska : 
* Toro Ababil Tamami Darojat : 
