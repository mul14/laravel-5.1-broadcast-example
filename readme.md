## How to

Install dan aktifkan redis server.

Install package yang dibutuhkan NodeJS

```bash
npm install
```

Jalankan socket.io server

```bash
node server.js
```

Aktifkan Laravel

```bash
./artisan serve
```

Buka browser [http://localhost:8000](http://localhost:8000)

Buka halaman admin [http://localhost:8000/admin](http://localhost:8000/admin)

Coba lakukan pendaftaran, lalu lihat di admin.

Demo ini tidak menyentuh database sama sekali. Di `App\User::register` hanya mengembalikan User object.
