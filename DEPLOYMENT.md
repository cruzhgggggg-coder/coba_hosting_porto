# Panduan Hosting Laravel Portfolio

Website kamu sudah siap untuk di-hosting! Ikuti langkah-langkah di bawah ini untuk menghubungkan **Supabase** (Database) dan **Web Hosting** pilihanmu.

## 1. Persiapan Database (Supabase)
1. Pergi ke [Supabase](https://supabase.com/) dan buat project baru.
2. Tunggu sampai database siap, lalu buka **Project Settings** > **Database**.
3. Di bagian **Connection String**, pilih tab **URI** atau cari detail berikut:
   - `Host`: ID-project.supabase.co
   - `Port`: 5432
   - `User`: postgres
   - `Password`: (Password yang kamu buat saat setup)
   - `Database`: postgres

---

## OPSI A: Hosting di Railway (Mudah & Mendukung Antrian/Queue)
1. Pergi ke [Railway](https://railway.app/) dan Login menggunakan akun GitHub kamu.
2. Klik **New Project** > **Deploy from GitHub repo**.
3. Pilih repository `coba_hosting_porto`.
4. Klik **Add Variables** dan masukkan variabel dari `.env` lokal kamu:
   - `APP_KEY`: (Copy dari file .env)
   - `APP_ENV`: `production`
   - `DB_CONNECTION`: `pgsql`
   - `DB_HOST`: (Host dari Supabase)
   - `DB_PASSWORD`: (Password Supabase kamu)

---

## OPSI B: Hosting di Vercel (Gratis & Sangat Cepat)
1. Pergi ke [Vercel](https://vercel.com/) dan Login dengan GitHub.
2. Klik **Add New** > **Project** > Pilih repository `coba_hosting_porto`.
3. Di bagian **Environment Variables**, masukkan semua isi file `.env` kamu.
4. Klik **Deploy**. Vercel akan membaca file `vercel.json` yang sudah saya siapkan.

---

## 3. Menjalankan Perintah Deployment
- **Database Migration:** 
  - Di **Railway**: Bisa otomatis (tambahkan `php artisan migrate --force` di start command).
  - Di **Vercel**: Harus dijalankan manual dari komputer kamu setelah `.env` diarahkan ke Supabase:
  ```bash
  php artisan migrate --force
  ```

## 4. Update Jika Ada Perubahan
Setiap kali kamu melakukan `git push` ke repository GitHub, Vercel/Railway akan otomatis mengupdate website kamu secara live.

---
**Catatan:** Kode terbaru sudah saya push ke: [https://github.com/cruzhgggggg-coder/coba_hosting_porto.git](https://github.com/cruzhgggggg-coder/coba_hosting_porto.git).
