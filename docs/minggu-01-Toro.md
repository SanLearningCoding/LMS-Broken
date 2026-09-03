## Soal 

1. Buka public/index.php. Baca dari atas ke bawah. Tulis dalam 3 kalimat apa yang dilakukan berkas ini.
2. Buka bootstrap/app.php. Identifikasi bagian mana yang mengurus route, mana yang mengurus middleware, mana yang mengurus exception.
3. Buka routes/web.php. Temukan route yang menghasilkan halaman selamat datang. Ubah teksnya, muat ulang browser, pastikan berubah.
4. Jalankan php artisan route:list. Cocokkan keluarannya dengan isi routes/web.php.

## Jawaban

1. public/index.php adalah pintu masuk utama yang mencatat waktu awal request dan memeriksa apakah aplikasi sedang dalam mode perbaikan (maintenance). Berkas ini memuat *autoloader* Composer serta memanggil konfigurasi sistem dari bootstrap/app.php untuk menyiapkan routing dan middleware. Terakhir, berkas ini menangkap data request dari browser, meneruskannya ke dalam sistem Laravel untuk diproses, dan mengembalikan hasil akhir berupa tampilan HTML ke pengguna.

2. Berikut adalah identifikasi bagian-bagian dalam berkas bootstrap/app.php sesuai dengan fungsinya masing-masing:
- Bagian yang mengurus route:
terletak pada metode ->withRouting(...)
```
->withRouting(
    web: __DIR__.'/../routes/web.php',
    commands: __DIR__.'/../routes/console.php',
    health: '/up',
)
```
berfungsi untuk menentukan jalur berkas rute aplikasi (seperti web.php untuk halaman browser dan /up untuk cek kesehatan aplikasi).

- Bagian yang mengurus Middleware:
Terletak pada metode ->withMiddleware(...)

```
->withMiddleware(function (Middleware $middleware): void {
        //
    })
```
berfungsi tempat mendaftarkan penyaring/keamanan request (seperti autentikasi, penanganan sesi, atau proteksi CSRF).

- Bagian yang mengurus exception:
terletak pada metode ->withExceptions()
```
->withExceptions(function (Exceptions $exceptions): void {
        //
    })
```
befungsi tempat mengatur bagaimana aplikasi menangkap dan mengolah error jika terjadi masalah saat aplikasi berjalan.

3. Di dalam berkas routes/web.php rute yang menghasilknan halaman welcome adalah:

```
Route::get('/', function () {
    return view('welcome');
});
```
rute ini menangani alamat utama (/) dan mengembalikan tampilan (view) dari berkas resources/views/welcome.blade.php

hasil sebelum diubah
![alt text]()

apabila diubah bagian 'welcome' menjadi 'selamat tinggal'
```
Route::get('/', function () {
    return view('selamat datang');
});
```
hasil setelah diubah
![alt text]()

4. Hasil perintah php artisan route:list
Saat perintah herd php artisan route:list dijalankan pada terminal, sistem menampilkan daftar rute sebagai berikut:

```
GET|HEAD   / ........................................................... routes/web.php:5
GET|HEAD   storage/{path} ............................................. storage.local
PUT        storage/{path} ............................................. storage.local.upload
GET|HEAD   up ......................................................... ApplicationBuilder.php
```

Hasil pencocokan dengan routes/web.php
Setelah dicocokkan dengan kode pada berkas routes/web.php
```
Route::get('/', function () {
    return view('welcome');
});
```
artinya, rute halaman utama tersebut terdaftar secara manual di dalam berkas routes/web.php