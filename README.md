<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# 📰 News App – Laravel 12 & Filament

**Nama:** Naufal Maulana Saputra  
**NIM:** 4523210083  
**Pemrograman Berbasis Web (A)**

Aplikasi manajemen berita berbasis web menggunakan **Laravel** dan **Filament Admin Panel**.  
Dibuat untuk mempermudah pengelolaan data wartawan, berita, dan komentar melalui antarmuka admin yang modern dan responsif.

## ⚙️ Fitur Aplikasi
- 🧾 Menampilkan daftar berita dengan pagination  
- 📰 Menampilkan detail berita  
- 💬 Menampilkan komentar pada berita  
- 👨‍💼 Relasi antara Wartawan, berita, dan komentar  
- 🧱 Seeder otomatis untuk menghasilkan data dummy  
- 🎨 Tampilan clean & responsive menggunakan Tailwind CSS  

---

## 🧰 Teknologi yang Digunakan

| Teknologi | Fungsi |
|------------|---------|
| **Laravel 12** | Framework utama untuk backend |
| **PHP 8.4+** | Bahasa pemrograman backend |
| **MySQL** | Database untuk menyimpan data berita, wartawan, dan komentar |
| **Tailwind CSS** | Framework CSS untuk tampilan frontend |
| **Vite** | Build tool modern untuk frontend |
| **Node.js & NPM** | Menjalankan dependency frontend |
| **Composer** | Manajemen dependency PHP |
| **Filament 3.x** | Admin Panel |

---

## 🪜 Langkah Instalasi

### 1️⃣ Clone Repository
```bash
git clone https://github.com/farhanScripts/news-app
```

### 2️⃣ Install Depedency
```bash
composer install
npm install
```

### 3️⃣ Konfigurasi Environment & Generate Key Aplikasi
```bash
# Konfigurasi Environment
cp .env.example .env
# Generate Key Aplikasi
php artisan key:generate
```

### 4️⃣ Jalankan Migrasi 
```bash
# Migrasi
php artisan migrate
# seeder
php artisan db:seed
```

### 5️⃣ Build Aset Frontend & Jalankan Aplikasi
```bash
# Build Aset
npm run dev
# atau untuk versi production
npm run build

# Jalankan Aplikasi
php artisan serve
```
- URL: http://127.0.0.1:8000 atau http://localhost:8000

### 6️⃣ Akses Admin Panel
```bash
php artisan make:filament-user

# Name:
# input nama user filament
# Email address:
# input email user filament
# password:
# input password user filament
```

Lakukan login filament jika sudah menjalankan akses admin panel:
- URL: http://127.0.0.1:8000/admin atau http://localhost:8000/admin

# 📸 Hasil Dokumentasi Tugas
## Tampilan Daftar Berita
<img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/75d89aa9-bb65-4f5d-87d9-838dafbae041" />
<img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/1794fa47-4ed0-4f9c-81e3-2c338df80ba8" />

## Tampilan Detail Berita
<img width="1919" height="1078" alt="image" src="https://github.com/user-attachments/assets/27bc606c-aaa3-4caf-87e4-3076ff40926d" />
<img width="1919" height="1073" alt="image" src="https://github.com/user-attachments/assets/7b04ef5a-24e0-4f4c-9a90-8ac258e4f004" />

## Tampilan Admin Filament (Wartawan)
<img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/476a6113-8c77-46e8-835b-492260652d1e" />
<img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/a56cc7ab-8e02-49c6-9cda-de7e35e0212c" />
<img width="1919" height="1073" alt="image" src="https://github.com/user-attachments/assets/64d9a6e1-b7bc-4777-9e9e-58c962e0a8eb" />
<img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/b40686af-dec1-4880-bd13-88928c195423" />

## Tampilan Admin Filament (News)
<img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/f767763f-dbc3-425e-9d91-9c0320b085cf" />
<img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/15aaac98-2002-48b4-82b8-c7da3ea53f57" />
<img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/548c279c-84dc-4ef9-a853-2d3d0a843118" />
<img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/9cdacc8d-d96a-4e21-9b8d-a6fdf67962d9" />
<img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/652d0827-e72e-4874-8c7e-290c5a30b539" />

## Tampilan Admin Filament (Komentar)
<img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/dc80d547-c2ce-4a21-b0d0-ac6a9ed3183e" />
<img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/6d388d25-0987-4a41-8461-a8d74e762560" />
<img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/c9d1f269-3920-4a95-8da3-b02d36d9c1c5" />
<img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/f90704f1-df67-4070-88f6-e7b7c737b313" />
<img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/da0b0d2f-e954-43ec-9b2e-3ecd387a2972" />
<img width="1919" height="1079" alt="image" src="https://github.com/user-attachments/assets/e4364d59-eca7-413c-a694-dc1607af273d" />
<img width="1918" height="1079" alt="image" src="https://github.com/user-attachments/assets/aadef8ec-9ca2-4f9b-8b48-86dd85778388" />









