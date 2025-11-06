readme:

# 📦 Stock Management System

Aplikasi manajemen stok sederhana menggunakan Laravel, MySQL, dan Bootstrap.

## 🚀 Features

-   Manajemen data produk (tambah, edit, hapus, lihat detail)
-   Pencatatan stok masuk dan stok keluar
-   Riwayat perubahan stok
-   API sederhana untuk kebutuhan integrasi
-   Tampilan web yang responsive

## 📋 Requirements

-   PHP >= 8.1
-   Composer
-   MySQL
-   Laravel 10

## 🛠️ Installation

1. Clone repository:

```bash
git clone https://https://github.com/megaz61/stock-management.git
cd stock-management-app
```

2. Install dependencies:

```bash
composer install
```

3. Salin file .env dan generate key:

```bash
cp .env.example .env
php artisan key:generate
```

4. Konfigurasi database di `.env` (sesuaikan dengan database):

```
DB_DATABASE=stock_management
DB_USERNAME=root
DB_PASSWORD= (password anda)
```

5. Run migration:

```bash
php artisan migrate
```

6. Jika ingin mengisi contoh data (opsional):

```bash
php artisan db:seed
```

7. Start server:

```bash
php artisan serve
```

8. Akses aplikasi:

-   Web: http://localhost:8000
-   API: http://localhost:8000/api/products

## 📚 API Endpoints

### Products

-   `GET /api/products` - Get all products
-   `POST /api/products` - Create product
-   `GET /api/products/{id}` - Get product detail
-   `PUT /api/products/{id}` - Update product
-   `DELETE /api/products/{id}` - Delete product

### Contoh Request

```json
POST /api/products
{
  "name": "Laptop",
  "description": "Gaming Laptop",
  "price": 15000000,
  "stock": 10
}
```
