# 💼 IT Project & Team Management System

Website ini merupakan aplikasi berbasis **Laravel** yang dirancang untuk membantu proses pengelolaan proyek, tim, dan tugas dalam sebuah organisasi IT.  
Aplikasi ini menyediakan fitur pencatatan proyek, pembagian tugas kepada anggota tim, serta laporan aktivitas yang terstruktur.

---

## 🎯 Tujuan Proyek
Sistem ini dikembangkan untuk mempermudah manajer atau koordinator tim dalam memantau progres proyek dan kinerja anggota.  
Dengan sistem berbasis web, semua data dapat diakses secara terpusat dan terorganisir.

---

## ✨ Fitur Utama
- **Manajemen Proyek** — menambah, mengubah, dan menghapus data proyek.  
- **Manajemen Tim** — mengatur anggota yang terlibat dalam setiap proyek.  
- **Manajemen Tugas (Task)** — mencatat dan memantau setiap tugas yang sedang berlangsung.  
- **Laporan Aktivitas** — menampilkan data proyek dan tugas dalam bentuk tabel dan ringkasan.  
- **Validasi Input & Relasi Database** — menjaga integritas data antar tabel.  

---

## 🧩 Teknologi yang Digunakan
- **Framework:** Laravel  
- **Bahasa Pemrograman:** PHP, JavaScript  
- **Basis Data:** MySQL  
- **Frontend:** Bootstrap, Blade Template  
- **Environment:** Laragon  
- **Version Control:** Git & GitHub  

---

## 🗃️ Skema Database
Struktur basis data sistem ini terdiri dari beberapa entitas utama, yaitu:
- **Proyek**
- **Tim**
- **Anggota**
- **Tugas**
- **detilTugas**

![Database Schema](screenshots/database_schema.png)

Diagram di atas menunjukkan relasi antara proyek, tim, dan tugas, di mana satu proyek dapat memiliki banyak tugas dan setiap tugas terhubung ke anggota tim tertentu.  

---

## 📚 Konsep dan Arsitektur
Aplikasi ini menerapkan pola **MVC (Model–View–Controller)** agar lebih mudah dalam pengelolaan logika bisnis dan tampilan.  
- **Model:** mengatur interaksi dengan database.  
- **Controller:** menangani logika proses dan routing.  
- **View:** menampilkan data dengan Blade Template.  

---

## 👨‍💻 Pengembang
**Frendi Widsna**  
📍 Bandung, Indonesia  
📧 [frendiwidsna16@gmail.com](mailto:frendiwidsna16@gmail.com)  
🔗 [LinkedIn](https://www.linkedin.com/in/frendi-widsna-36b000267) | [GitHub](https://github.com/FingrenF)
