**IDE BAGUS!** Lebih praktis digabung saja. Mari kita buat **README.md tunggal** yang mencakup kedua project.

## 🗂️ **STRUKTUR FINAL YANG DISARANKAN:**

```
PROJECT_PERUSAHAAN/
├── 📁 backend/          # Project 2 - CRUD API
├── 📁 frontend/         # Project 1 - Website  
├── 📁 screenshots/      # Screenshot kedua project
│   ├── frontend/        # Screenshot website
│   └── postman/         # Screenshot API testing
└── README.md            # README TUNGGAL untuk kedua project
```

## 📝 **README.md GABUNGAN YANG DISARANKAN:**

```markdown
# 🏢 TechSolution - Project 1 & 2

## 📋 Daftar Isi
- [Project 1: Company Website](#project-1-company-website)
- [Project 2: CRUD API](#project-2-crud-api) 
- [Struktur Project](#struktur-project)
- [Cara Menjalankan](#cara-menjalankan)
- [Testing](#testing)
- [Developer](#developer)

---

## 🎨 Project 1: Company Website

### Deskripsi
Website perusahaan TechSolution yang dibuat menggunakan HTML, CSS, JavaScript, dan Bootstrap Framework.

### Fitur
- ✅ Halaman Utama (Homepage)
- ✅ Halaman Informasi Perusahaan
- ✅ Halaman Detail Informasi
- ✅ Halaman Login dengan Validasi JavaScript
- ✅ Halaman Registrasi
- ✅ Halaman Dashboard (Setelah Login)
- ✅ Design Responsive dengan Bootstrap
- ✅ Footer dengan Copyright

### Screenshot Frontend
| Halaman Utama | Halaman Login | Dashboard |
|---------------|---------------|-----------|
| ![Homepage](./screenshots/frontend/homepage.png) | ![Login](./screenshots/frontend/login.png) | ![Dashboard](./screenshots/frontend/dashboard.png) |

| Halaman Informasi | Detail Informasi | Registrasi |
|-------------------|------------------|------------|
| ![Informasi](./screenshots/frontend/informasi.png) | ![Detail](./screenshots/frontend/detail-informasi.png) | ![Register](./screenshots/frontend/register.png) |

---

## 🚀 Project 2: CRUD API

### Deskripsi
RESTful API untuk mengelola data informasi perusahaan dengan operasi CRUD lengkap.

### API Endpoints
| Method | Endpoint | Description | Status |
|--------|----------|-------------|--------|
| GET | `/backend/informasi/read.php` | Get all informasi | ✅ |
| GET | `/backend/informasi/read_one.php?id=1` | Get single informasi | ✅ |
| POST | `/backend/informasi/create.php` | Create new informasi | ✅ |
| PUT | `/backend/informasi/update.php` | Update informasi | ✅ |
| DELETE | `/backend/informasi/delete.php` | Delete informasi | ✅ |

### Screenshot API Testing
| CREATE | READ ALL | UPDATE |
|--------|----------|--------|
| ![CREATE](./screenshots/postman/create.png) | ![READ](./screenshots/postman/read-all.png) | ![UPDATE](./screenshots/postman/update.png) |

| READ ONE | DELETE |
|----------|--------|
| ![READ ONE](./screenshots/postman/read-one.png) | ![DELETE](./screenshots/postman/delete.png) |

### Contoh Response API
```json
{
    "data": [
        {
            "id": 1,
            "judul": "TechSolution Raih Penghargaan...",
            "gambar": "https://via.placeholder.com/800x400",
            "konten": "TechSolution dengan bangga...",
            "tanggal_publikasi": "2025-11-24 23:41:43",
            "penulis": "Havid Restu Afyantara",
            "status": "active"
        }
    ],
    "success": true,
    "total": 3
}
```

---

## 🗂️ Struktur Project

```
PROJECT_PERUSAHAAN/
├── 📁 backend/                 # Project 2 - CRUD API
│   ├── 📁 config/
│   │   └── database.php
│   ├── 📁 informasi/
│   │   ├── create.php
│   │   ├── read.php
│   │   ├── read_one.php
│   │   ├── update.php
│   │   └── delete.php
│   ├── 📁 models/
│   │   └── Informasi.php
│   └── 📁 sql/
│       └── database.sql
├── 📁 frontend/                # Project 1 - Website
│   ├── 📁 css/
│   │   └── style.css
│   ├── 📁 images/
│   │   └── placeholder/
│   ├── 📁 js/
│   │   ├── auth.js
│   │   ├── main.js
│   │   └── navigation.js
│   ├── dashboard.html
│   ├── detail-informasi.html
│   ├── index.html
│   ├── informasi.html
│   ├── login.html
│   └── register.html
├── 📁 screenshots/             # Dokumentasi
│   ├── 📁 frontend/
│   └── 📁 postman/
└── README.md                   # File ini
```

---

## ⚡ Cara Menjalankan

### 1. Setup Environment
- Install XAMPP
- Start Apache dan MySQL

### 2. Setup Database
- Buka phpMyAdmin (`http://localhost/phpmyadmin`)
- Import file `backend/sql/database.sql`

### 3. Jalankan Project
- Letakkan folder `PROJECT_PERUSAHAAN` di `xampp/htdocs/`
- Akses frontend: `http://localhost/PROJECT_PERUSAHAAN/frontend/`
- Test API: Gunakan Postman dengan endpoints di atas

### 4. Login Testing
```
Email: admin@techsolution.com
Password: password123
```

---

## 🧪 Testing

### Frontend Testing
- [x] Navigation semua halaman
- [x] Form validation login/register
- [x] Responsive design
- [x] Redirect setelah login

### API Testing  
- [x] CREATE - Tambah data baru
- [x] READ ALL - Ambil semua data
- [x] READ ONE - Ambil data by ID
- [x] UPDATE - Edit data existing
- [x] DELETE - Hapus data

---

## 👨💻 Developer

**Nama:** Havid Restu Afyantara  
**NPM:** 23552011051  
**Kelas:** 23 CNS A  

**Copyright © 2024** - TechSolution Company Website & API
```