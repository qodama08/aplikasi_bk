# 📂 Aplikasi PPDB with Docker – UKK 2526

> **Progress Terakhir:** Membuat fitur **SSO Login** untuk autentikasi pengguna.

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<img src="https://img.shields.io/badge/Laravel-12.x-red" alt="Laravel Version">
<img src="https://img.shields.io/badge/Status-Development-orange" alt="Status">
</p>

---

# 📌 Tentang Proyek

Aplikasi **PPDB** (Penerimaan Peserta Didik Baru) adalah platform berbasis web yang membantu sekolah mengelola pendaftaran siswa baru secara **online**.

## 🎯 Tujuan Utama

-   **Efisiensi:** Mengurangi antrian dan pekerjaan manual saat proses pendaftaran.
-   **Transparansi:** Mempermudah verifikasi dan pelaporan data pendaftar.
-   **Kemudahan Akses:** Calon siswa dapat mendaftar dari mana saja.
-   **Mengurangi Human Error:** Mengurangi kesalahan input data.

## 👥 Pengguna Utama

-   **Calon Peserta Didik & Orang Tua/Wali:** Mengisi formulir, mengunggah dokumen, memantau hasil seleksi.
-   **Panitia PPDB (Admin Operator):** Memverifikasi data, mengelola jadwal, dan mengatur hasil seleksi.

## 🔑 Fitur Utama

-   Registrasi akun & login.
-   Formulir pendaftaran online.
-   Upload dokumen persyaratan.
-   Verifikasi berkas oleh admin.
-   Seleksi & penilaian otomatis/manual.
-   Pengumuman hasil & daftar ulang.
-   **SSO Login** (fitur terbaru).

---

# ⚙️ Prasyarat (Prerequisites)

Pastikan di mesin development / deployment tersedia:

-   Docker Engine (disarankan versi terbaru)
-   `docker compose` (bawaan Docker CLI) atau Docker Compose V2
-   (opsional untuk development) Git, VSCode, dsb

> Jika menggunakan WSL (Windows), pastikan integrasi WSL dengan Docker sudah aktif.

---

# 🚀 Cara Menjalankan (2 opsi)

> Pilih opsi sesuai kebutuhan: **developer** (clone dan build) atau **deployment** (pull image dari registry).

## 🅰️ Opsi A — Clone dari GitHub (developer workflow)

Cocok untuk pengembang yang ingin melihat/ubah kode.

1. Clone repository:

```bash
git clone --branch aplikasi_ppdb_docker --single-branch https://github.com/riskiputraalamzah/ukk_2526.git aplikasi_ppdb
cd aplikasi_ppdb
```

2. Jalankan (auto build & setup) — jika Dockerfile sudah dikonfigurasi untuk otomatis install dependencies:

```bash
docker compose up -d --build
```

Perilaku otomatis yang biasa dijalankan di Dockerfile (opsional):

-   `cp .env.example .env` (jika `.env` belum ada)
-   `composer install`
-   `php artisan key:generate`
-   `php artisan migrate --seed` (opsional dan aman, biasanya disertai `|| true`)

**Alternatif (manual)** — bila tidak ingin semuanya otomatis di Dockerfile:

```bash
# Setelah clone dan sebelum docker up (di mesin lokal atau di dalam container php)
cp .env.example .env
# jika ingin generate key secara lokal
php artisan key:generate

# lalu build & run via docker
docker compose up -d --build
# masuk ke container php bila perlu menjalankan migrasi
docker exec -it <php_container_name> bash
php artisan migrate --seed
```

**Akses aplikasi:** `http://localhost:8080` (sesuaikan port pada `docker-compose.yml`)

---

## 🅱️ Opsi B — Pull prebuilt image dari Registry (deployment workflow)

Cocok untuk deployment cepat atau pengguna yang tidak ingin/build ulang image di mesin target.

1. Pull image:

```bash
docker pull <registry-username>/<repo-name>:<tag>
# contoh:
docker pull riskiputraalamzah/aplikasi-ppdb:latest
```

2. Jalankan container (contoh sederhana):

```bash
docker run -d -p 8080:80 --name aplikasi-ppdb riskiputraalamzah/aplikasi-ppdb:latest
```

3. Atau gunakan `docker-compose.yml` yang menunjuk image:

```yaml
services:
    app:
        image: riskiputraalamzah/aplikasi-ppdb:latest
        ports:
            - "8080:80"
        environment:
            - APP_ENV=production
```

Lalu:

```bash
docker compose up -d
```

---

# 📤 Cara Push Image ke Registry (Docker Hub singkat)

1. Build image (jika belum ada):

```bash
docker compose build php
# atau build manual
docker build -t aplikasi-ppdb-php -f docker/php/Dockerfile .
```

2. Tag image agar sesuai dengan repository Docker Hub:

```bash
docker tag aplikasi-ppdb-php:latest <dockerhub-username>/aplikasi-ppdb:latest
```

3. Login ke Docker Hub:

```bash
docker login
```

4. Push:

```bash
docker push <dockerhub-username>/aplikasi-ppdb:latest
```

---

# 🔧 Troubleshooting & Tips

### Permission error (`storage` / `bootstrap/cache`)

Jika muncul error `Failed to open stream: Permission denied`, jalankan di host:

```bash
# cara cepat (development):
sudo chmod -R 777 storage bootstrap/cache

# cara lebih aman (jika user www-data tersedia di container):
sudo chown -R 33:33 storage bootstrap/cache  # 33:33 biasanya uid:gud www-data
```

atau dari container PHP:

```bash
docker exec -it <php_container_name> bash
chown -R www-data:www-data storage bootstrap/cache
exit
```

### Error `Base table or view not found` (migrasi belum dijalankan)

Jalankan migrasi:

```bash
docker exec -it <php_container_name> bash
php artisan migrate --seed
```

### Error `fork/exec ... docker-buildx: no such file or directory` saat build

Jika menemui error terkait `docker-buildx`, pastikan plugin `buildx` terpasang di WSL/Linux:

```bash
sudo mkdir -p /usr/local/lib/docker/cli-plugins
sudo curl -L https://github.com/docker/buildx/releases/download/v0.17.1/buildx-v0.17.1.linux-amd64 -o /usr/local/lib/docker/cli-plugins/docker-buildx
sudo chmod +x /usr/local/lib/docker/cli-plugins/docker-buildx
```

(Adaptasikan versi URL sesuai rilis terbaru bila perlu.)

---

# ⚠️ Catatan Penting

-   Hapus field `version:` dari `docker-compose.yml` untuk menghindari peringatan pada Compose V2.
-   Pastikan `.env` memiliki pengaturan database yang benar (contoh untuk docker-compose di repo ini):

```env
DB_CONNECTION=mysql
DB_HOST=mysql   # nama service pada docker-compose
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=laravel
DB_PASSWORD=laravel
```

-   Jika ingin Dockerfile melakukan setup otomatis (copy `.env`, `composer install`, `php artisan key:generate`, `migrate`), tambahkan langkah-langkah tersebut di Dockerfile build sehingga pengguna cukup `docker compose up -d --build`.

---

# 📝 Contoh `docker-compose` (singkat)

```yaml
services:
    php:
        build:
            context: .
            dockerfile: docker/php/Dockerfile
        volumes:
            - .:/var/www

    nginx:
        image: nginx:1.25
        ports:
            - "8080:80"
        volumes:
            - .:/var/www
            - ./docker/nginx/default.conf:/etc/nginx/conf.d/default.conf

    mysql:
        image: mysql:8.0
        environment:
            MYSQL_ROOT_PASSWORD: root
            MYSQL_DATABASE: laravel
            MYSQL_USER: laravel
            MYSQL_PASSWORD: laravel
        volumes:
            - db_data:/var/lib/mysql

volumes:
    db_data:
```

---

# 💬 Penutup

Semangat untuk teman-teman kelas 12 RPL yang sedang mengerjakan **UKK 2526**! 💪
Jika mau, saya bisa bantu juga membuatkan `Makefile` atau `scripts/deploy.sh` untuk otomatisasi build/push/pull agar temen-temen tinggal jalankan satu perintah saja.
