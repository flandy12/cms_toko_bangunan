# 🚀 Laravel Project

## 📌 Deskripsi

Project ini dibuat menggunakan **Laravel Framework** untuk pengembangan
aplikasi web modern berbasis MVC, aman, scalable, dan mudah
dikembangkan.

------------------------------------------------------------------------

## 🧰 Teknologi

-   PHP \>= 8.1
-   Laravel \>= 10.x
-   Composer
-   MySQL / PostgreSQL
-   Node.js & NPM
-   Tailwind CSS
-   Alpine.js

------------------------------------------------------------------------

## ⚙️ Kebutuhan Sistem

### PHP

``` bash
php -v
```

Minimal PHP **8.1**

Ekstensi wajib: - OpenSSL - PDO - Mbstring - Tokenizer - XML - Ctype -
JSON - BCMath - Fileinfo

### Composer

``` bash
composer -V
```

### Node.js & NPM

``` bash
node -v
npm -v
```

Disarankan Node.js **\>= 18**

### Database

-   MySQL / MariaDB / PostgreSQL / SQLite

------------------------------------------------------------------------

## 📥 Instalasi

### 1. Clone Repository

``` bash
git clone https://github.com/username/nama-project.git
cd nama-project
```

### 2. Install Dependency Backend

``` bash
composer install
```

### 3. Setup Environment

``` bash
cp .env.example .env
php artisan key:generate
```

### 4. Konfigurasi Database (`.env`)

``` env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Migration & Seeder

``` bash
php artisan migrate
php artisan db:seed
```

### 6. Install Dependency Frontend

``` bash
npm install
```

### 7. Build Asset

``` bash
npm run dev
```

------------------------------------------------------------------------

## ▶️ Menjalankan Aplikasi

``` bash
php artisan storage:link
php artisan serve
```

Akses:

    http://127.0.0.1:8000


------------------------------------------------------------------------


## ▶️ Akun Login

``` bash
#Admin
Email : admin@gmail.com
Password : password123

#Staff
Email : staff@gmail.com
Password : password123

#Owner
Email : owner@gmail.com
Password : password123
```

------------------------------------------------------------------------

## Hak Akses Setiap Jenis Akun

``` bash
### Admin

Akun Admin memiliki akses penuh untuk mengelola sistem. Admin dapat melihat, menambah, mengubah, dan menghapus data produk, pengguna, peran (role), serta izin (permission).

Ruang lingkup akses Admin:

* Mengelola data produk (lihat)
* Mengelola data pengguna (lihat, tambah, ubah, hapus)
* Mengelola role (lihat, tambah, ubah, hapus)
* Mengelola permission (lihat, tambah, ubah, hapus)

### Staff

Akun Staff memiliki akses terbatas untuk operasional harian. Staff dapat melihat data produk dan pengguna, melakukan perubahan pada produk tertentu, serta mengakses laporan tanpa dapat mengelola pengguna atau sistem secara penuh.

Ruang lingkup akses Staff:

* Melihat dan memperbarui data produk
* Menghapus data produk tertentu
* Melihat data pengguna
* Melihat data role dan permission
* Melihat laporan
* Mengunduh laporan

### Owner

Akun Owner difokuskan pada pengawasan dan pengambilan keputusan. Owner dapat mengelola produk dan mengakses laporan, namun tidak dapat mengelola pengguna, role, maupun permission.

Ruang lingkup akses Owner:

* Mengelola data produk (lihat, tambah, ubah, hapus)
* Melihat laporan
* Mengunduh laporan

```

------------------------------------------------------------------------

## 📂 Struktur Folder

    app/
     ├── Http/
     ├── Models/
     ├── Services/
     ├── Repositories/

    routes/
     ├── web.php
     ├── api.php

    resources/
     ├── views/
     ├── js/
     ├── css/
