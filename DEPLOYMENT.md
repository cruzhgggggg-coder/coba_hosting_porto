# Panduan Hosting Laravel Portfolio

Website kamu sudah siap untuk di-hosting! Ikuti langkah-langkah di bawah ini untuk menghubungkan **Supabase** (Database) dan **Railway** (Web Hosting).

## 1. Persiapan Database (Supabase)
1. Pergi ke [Supabase](https://supabase.com/) dan buat project baru.
2. Tunggu sampai database siap, lalu buka **Project Settings** > **Database**.
3. Di bagian **Connection String**, pilih tab **URI** atau cari detail berikut:
   - `Host`: ID-project.supabase.co
   - `Port`: 5432
   - `User`: postgres
   - `Password`: (Password yang kamu buat saat setup)
   - `Database`: postgres

## 2. Persiapan Web Hosting (Railway)
1. Pergi ke [Railway](https://railway.app/) dan Login menggunakan akun GitHub kamu.
2. Klik **New Project** > **Deploy from GitHub repo**.
3. Pilih repository `coba_hosting_porto`.
4. Klik **Add Variables** dan masukkan variabel dari `.env` lokal kamu, TERUTAMA variabel database Supabase:
   - `APP_KEY`: (Copy dari file .env)
   - `APP_ENV`: `production`
   - `DB_CONNECTION`: `pgsql`
   - `DB_HOST`: (Host dari Supabase)
   - `DB_PORT`: `5432`
   - `DB_DATABASE`: `postgres`
   - `DB_USERNAME`: `postgres`
   - `DB_PASSWORD`: (Password Supabase kamu)
   - `FILESYSTEM_DISK`: `public` (Atau gunakan Cloudinary jika sudah ada datanya)

## 3. Menjalankan Perintah Deployment
Railway akan mendeteksi file `Procfile` yang sudah saya tambahkan. Website kamu akan otomatis ter-build.
Untuk menjalankan migrasi database di server Railway:
1. Buka dashboard project di Railway.
2. Masuk ke tab **Settings** atau **Variables**.
3. Tambahkan variable: `NIXPACKS_PHP_APP_NAME=laravel`
4. Di bagian **Post-Install Script** atau **Start Command** (jika menggunakan custom command), pastikan `php artisan migrate --force` dijalankan.

## 4. Update Jika Ada Perubahan
Setiap kali kamu melakukan `git push` ke repository GitHub, Railway akan otomatis mengupdate website kamu secara live.

---
**Catatan:** Saya sudah melakukan `git push` ke repository [https://github.com/cruzhgggggg-coder/coba_hosting_porto.git](https://github.com/cruzhgggggg-coder/coba_hosting_porto.git).
