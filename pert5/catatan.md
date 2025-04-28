# Maen API

## Langkah-langkah

1. `composer create-project --prefer-dist raugadh/fila-starter .`
2. Otak-atik `.env`
3. Membuat Model + Migration + Seeder:
   - `php artisan make:model Client -ms`
   - `php artisan make:model Product -ms`
4. Migrasi database:
   - `php artisan migrate:fresh`
5. Set permission:
   - `chown -R www-data:www-data storage/*`
   - `chown -R www-data:www-data bootstrap/*`
   - `chmod -R 777 storage/*`
   - `chmod -R 777 bootstrap/*`
6. Buat Controller API:
   - `php artisan make:controller Api/ProductApiController`
7. Buat Middleware:
   - `php artisan make:middleware ClientAuth`
8. Ngoding:
   - Edit migration
   - Edit model
   - Isi `ProductApiController`
   - Buat `ClientResource` dan `ProductResource`
   - Edit `EditClient`
   - Edit `bootstrap/app.php`
   - Buat dan edit `routes/api.php`
9. Membuat Filament Resource:
   - `php artisan make:filament-resource Client --generate`
   - `php artisan make:filament-resource Product --generate`
10. Generate Shield:
    - `php artisan shield:generate`
11. Seed Database:
    - `php artisan db:seed`

---

## Testing API

1. Buka localhost, isi `Client` dan `Product`.
2. Copy API token dari data `Client`.
3. Buka Postman:
   - Buat **New Collection**
   - Buat **New Request**
   - Pilih method `GET`
   - Masukkan URL: `http://localhost/api/products`
   - Masuk ke tab **Authorization**:
     - Auth type: `Bearer Token`
     - Paste API token ke kolom token
   - Klik **Send**

---

# 🎓 Selesai, Wisuda 🎓
