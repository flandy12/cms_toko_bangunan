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
-   Docker (Opsional)

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
php artisan serve
```

Akses:

    http://127.0.0.1:8000

------------------------------------------------------------------------

## 🐳 Docker (Opsional)

``` bash
docker compose up -d --build
docker compose exec app bash
php artisan migrate
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

------------------------------------------------------------------------

## 🧪 Testing

``` bash
php artisan test
```

------------------------------------------------------------------------

## 🚀 Production

``` bash
composer install --no-dev
php artisan migrate --force
php artisan optimize
php artisan storage:link
```

------------------------------------------------------------------------

## 🛠 Artisan Command

``` bash
php artisan optimize
php artisan route:list
php artisan cache:clear
php artisan config:clear
php artisan view:clear
```

------------------------------------------------------------------------

## 📝 Catatan

``` bash
chmod -R 775 storage bootstrap/cache
```

-   Jangan commit file `.env`
-   Gunakan `.env.production` untuk server

------------------------------------------------------------------------

## 👨‍💻 Developer

-   Dev Flandy

------------------------------------------------------------------------

## 📄 Lisensi

MIT License
