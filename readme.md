## How to

1) Install dan aktifkan [redis server](http://redis.io/).

2) Install package yang dibutuhkan oleh [NodeJS](https://nodejs.org/)

```bash
npm install --production
```

Alternatif `npm`, anda juga bisa menggunakan [yarn](https://yarnpkg.com/)

```bash
yarn install --production
```

3) Jalankan socket.io server

```bash
node server.js
```

4) Aktifkan Laravel

```bash
./artisan serve
```

5) Buka browser [http://localhost:8000](http://localhost:8000)

Buka halaman admin [http://localhost:8000/admin](http://localhost:8000/admin)

Coba lakukan pendaftaran, lalu lihat yang terjadi pada halaman admin.

> _Note_: Demo ini tidak menyentuh database sama sekali. Di `App\User::register` hanya mengembalikan User object sebagai simulasi.
