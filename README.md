# Laravel 10 + TailwindCSS
# Website Distrik Fypmedia

## Artikel
Artikel dapat ditambahkan oleh admin dan user. Data artikel memiliki relasi dengan table kategori dan user.

## Note Dev
Login admin 2 role
- Admin dapat mengakses data admin dan artikel (dapat melakukan create, read, update, dan delete)
- User hanya dapat mengakses bagian artikel (hanya dapat melakukan create dan delete)

## Database admin
ID, name (nama lengkap), email, password(hash)

## Database Kategori
ID, name, slug, status, tanggal

## Database Artikel
ID, gambar, sumber_gambar, judul, deskripsi, nama_penulis, tanggal_posting, jam, kategori


## Tutorial Git 
- Ganti branch atau pindah branch = git checkout nama-branch
- Jika ingin membuat branch baru = git checkout -b nama-branch
- Mengcopy code terbaru = git pull origin branch-asli-yang-didevelop
- Menambah file kita ke folder git = git add .
- Menambah deskripsi yang dikerjakan = git commit -m 'tulis apa yang sudah dikerjakan'
- Melakukan push = git push origin nama-branch-yang-dibuat

## Merge Tutorial
- Setelah melakukan git push origin branch-kita , akan muncul link di terminal.
- Paste link ke browser yang digunakan. isi deskripsi sesuai dengan apa yang dikerjakan
- Akan ada button Merge Request, klik saja button Merge Request



## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.
