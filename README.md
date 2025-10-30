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
* **Frontend:** HTML, CSS, Bootstrap (untuk tampilan profesional)
* **Backend:** PHP
* **Database:** MySQL

## 3. Cara Menjalankan Project

**A. Setup Database (Otomatis):**
1.  Nyalakan **Apache** dan **MySQL** di XAMPP.
2.  Buka `http://localhost/phpmyadmin/`
3.  Buat database baru dengan nama: **`adviz_blog`**
4.  Klik database `adviz_blog` yang baru dibuat.
5.  Klik *tab* **"Import"** di bagian atas.
6.  Klik "Choose File" dan pilih file **`adviz_blog.sql`** (yang ada di dalam folder proyek ini).
7.  Klik "Go" atau "Import" di bagian bawah. Database akan otomatis terisi.

**B. Buka Website:**
1.  **Public Page:**
    `http://localhost/projek_adviz/blog.php`
2.  **Admin Page (Untuk Coba CRUD):**
    `http://localhost/projek_adviz/admin.php`