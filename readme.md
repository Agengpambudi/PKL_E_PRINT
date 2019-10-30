
## About Biz

Adalah web jasa printer online yang bisa memudahkan orang untuk printer secara online tanpa datang langsung ke tempatnya dan jika sudah selesai bisa di ambil ke tempat print sehingga tidak perlu mengantri 
- pengunjung bisa membuka halaman get started atau halaman awal dengan mengakses (http://http://localhost:8000/)
-pengunjung juga bisa langsung login jika sudah memiliki akun dengan cara mengakses (http://localhost:8000/login)

- Pengunjung bisa membuat akun dengan cara klik tombol [daftar](http://localhost:8000/register) pada halaman awal dan memasukkan nama, email, dan password.
- Pengunjung yang sudah memiliki akun bisa langsung login dengan cara klik tombol [masuk](http://localhost:8000/login) pada halaman awal dan memasukkan email dan password yang sudah didaftarkan
- Pengunjung bisa melihat destinasi yang tersedia pada halaman awal
- Admin bisa login menggunakan akun yang sudah terdaftar pada [halaman ini](http://localhost:8000/login/admin).
- Admin bisa menambah, mengubah, menghapus, dan melihat daftar destinasi pada menu [destinasi](http://localhost:8000/admin/destination).

## Cara Install

- Clone repositori di PC anda.
- Buka terminal dan masuk kedalam folder, dan jalankan "composer install"
- Buat file ".env" dengan isi yang menyalin dari file ".env.example"
- Jalankan "php artisan migrate" pada terminal--class=DestinationSeederTable" pada terminal
- Jalakan "php artisan serve" pada terminal, dan buka [http://localhost:8000](http://localhost:8000) pada browser anda
