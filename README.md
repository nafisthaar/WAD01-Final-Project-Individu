# Final Project Individu UAS WAD01: CMS Blog untuk Adviz.id

Final project individu dari mata kuliah Web Application Development (WAD01).

* **Nama:** Nafistha Awalya Rahma
* **NIM:** 24110300046
* **Mitra:** No. 21 - Bisnis Adviz Solusi (Adviz.id)

---

## 1. Analisis Masalah (Solusi)
Website adviz.id adalah company profile yang sangat modern, namun tidak memiliki fitur dinamis untuk content marketing. Fitur yang hilang adalah **Blog / Artikel**.

Solusi yang saya buat adalah **"Mini Content Management System (CMS)"** yang memungkinkan admin (Adviz) untuk:
* **Create:** Menambah artikel baru
* **Read:** Menampilkan artikel ke publik
* **Update:** Mengedit artikel yang sudah ada
* **Delete:** Menghapus artikel

## 2. Fitur & Teknologi
* **Frontend:** HTML, CSS, Bootstrap
* **Backend:** PHP
* **Database:** MySQL

## 3. Petunjuk Instalasi & Menjalani Project

**A. Konfigurasi Database:**
Berikut adalah petunjuk untuk menjalankan project ini di XAMPP.
* Project ini membutuhkan *database* MySQL (via XAMPP) untuk dapat berjalan.
* Nama *database* yang dibutuhkan: **`adviz_blog`**.
* Untuk kemudahan *setup* tabel (dan *dummy content*), *file* **`adviz_blog.sql`** sudah saya sertakan di dalam *repository* ini.
* Silakan *import* file `.sql` tersebut ke dalam *database* `adviz_blog` yang telah dibuat (via `phpMyAdmin` atau *tools* sejenis).

**B. Link Halaman Project:**
1.  **Public Page:**
    `http://localhost/projek_adviz/blog.php`
2.  **Admin Page (Untuk Coba CRUD):**
    `http://localhost/projek_adviz/admin.php`
