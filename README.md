# Mini CMS Project

A mini Content Management System (CMS) built with **Laravel 12**, **PHP 8.2+**, **MySQL**, and **React 18+**.  
This project includes a public website, admin panel, and API-based authentication using Laravel Sanctum.

---

## 📝 Assignment Task

The task was to build a CMS with the following requirements:

### Public Website (Laravel + Blade)
- Home page
- Blog listing
- Blog detail page
- Static pages (About, Contact, etc.)

### Admin Section (React + Laravel API)
- Login & Logout (token-based using Sanctum)
- Dashboard showing stats
- CRUD operations for:
  - Posts
  - Pages
- Media library management (upload, delete, view)

---

## 🚀 Features

- **Token-based authentication** using Laravel Sanctum
- **RESTful API** for posts, pages, and media
- **Admin dashboard** for managing content
- **Responsive UI** built with React
- **Blade templates** for public-facing pages

---

## ⚡ Tech Stack

- Backend: Laravel 12, PHP 8.2+, MySQL
- Frontend: React 18+, Blade templates
- Authentication: Laravel Sanctum
- API: JSON-based RESTful endpoints

---

## 📂 Project Structure

DIRECTORY STRUCTURE FOR BOTH BACKEND AND ADMIN 


backend/
├─ app/
│  ├─ Console/
│  ├─ Exceptions/
│  ├─ Http/
│  │  ├─ Controllers/
│  │  │  ├─ API/
│  │  │  │  ├─ AuthController.php
│  │  │  │  ├─ PostController.php
│  │  │  │  ├─ PageController.php
│  │  │  │  └─ MediaController.php
│  │  │  ├─ AuthController.php
│  │  │  ├─ DashboardController.php
│  │  │  └─ BlogController.php
│  │  ├─ Middleware/
│  │  │  └─ VerifyCsrfToken.php
│  │  └─ Kernel.php
│  ├─ Models/
│  │  ├─ User.php
│  │  └─ Post.php
│  └─ Providers/
│     └─ RouteServiceProvider.php
├─ bootstrap/
├─ config/
├─ database/
│  ├─ migrations/
│  │  ├─ 0001_create_users_table.php
│  │  ├─ 0002_create_posts_table.php
│  │  └─ ...
│  └─ seeders/
├─ public/
│  └─ index.php
├─ resources/
│  ├─ views/
│  │  ├─ layouts/
│  │  │  └─ app.blade.php
│  │  ├─ blog.blade.php
│  │  ├─ blog-detail.blade.php
│  │  └─ pages/
│  │     ├─ about.blade.php
│  │     └─ contact.blade.php
│  └─ js/
├─ routes/
│  ├─ api.php
│  └─ web.php
├─ storage/
├─ tests/
├─ .env
├─ composer.json
└─ artisanfrontend-admin/
├─ public/
│  └─ index.html
├─ src/
│  ├─ assets/
│  │  ├─ images/
│  │  └─ backgrounds/
│  ├─ components/
│  │  ├─ Navbar.jsx
│  │  ├─ Sidebar.jsx
│  │  └─ ThemeToggle.jsx
│  ├─ pages/
│  │  ├─ Dashboard.jsx
│  │  ├─ Posts.jsx
│  │  ├─ Pages.jsx
│  │  └─ Media.jsx
│  ├─ App.jsx
│  ├─ main.jsx
│  └─ api/
│     └─ api.js
├─ package.json
├─ vite.config.js
└─ tailwind.config.js

THANKYOU 


   
