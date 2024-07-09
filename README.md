# About
Digunakan Untuk Kamu Yang Malas Melakukan Slicing Admin Panel

# Benefit
- Tidak Menggunakan Package Authetifikasi Seperti Breeze Dan Jetstrem - Menggunakan Bawaan Laravel
- Terdapat Fitur Login Dan Register
- Menggunakan Yajra Datatable
- Tinggal Memakai - Semua Component Yang Di Perlukan Sudah Di Sediakan

# Work In Progress
- Sweet Alert
- Authorisasi Laravel Spatie

# Instalasi
Kita Asumsikan Bahwa Kamu Sudah Menginstall Kebutuhan Kebutuhan Dasar Untuk Menjalankan Framework Laravel
- Composer
- Node JS

### Toolsnya
- Laravel Herd
- Laragon
- XAMPP
- Database - Mysql, Postgresql Atau Yang Lainya
- Atau Bahkan LAMPP

## Langkah Pertama
- Jika Kamu Pengguna Windows Pastikan Sudah Menginstall Tools Git Bash Di Perangkat Kamu
- Atau Jika Kamu Pengguna Mac Atau Linux Pastikan Sudah Terinstall Git
  
Unduh Repository Ini Dengan Cara CMD/Powershell/GitBash/Terminal Kamu
```
git clone https://github.com/dev-nichola/laravel-11-mazer-template
```
## Langkah Kedua
Kita Asumsikan Kamu Menggukana Visual Studio Code

Masuk Folder 
```
cd laravel-11-mazer-template
```

## Langkah Ketiga
Update Composernya
```
composer update
```

## Langkah Ketiga
Copy Isi .env-example dan buat FILE baru dengan nama .env

Pastikan Kamu Benar Benar Memperhatikan Bagian Databasenya
```
DB_CONNECTION=sqlite // sesuaikan dengan database kamu
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```
pastikan sesuaikan dengan konfigurasi yang kamu miliki

## Langkah Ke Empat
Jalankan Migrasi Supaya Blueprint Migrationnya terdapata pada database kamu.
```
php artisan migrate
```

Jalankan Seeder
```
php artisan db:seed
```

## Langkah Kelima
Jika kamu sudah berhasil menjalankan migration maka kamu bisa menjalankan aplikasinya
```
php artisan serve
```
namun jika kamu menggunakan valet kamu bisa menjalankan aplikasinya tanpa harus menjalankan perintah artisan
