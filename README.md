# PPAPekanbaru

Aplikasi konsultasi dan layanan informasi untuk Unit Perlindungan Perempuan dan Anak (PPA).

## Tech Stack

- PHP (native)
- MySQL/MariaDB
- Bootstrap + jQuery
- Highcharts (grafik admin)

## Struktur Folder

- `admin/` - panel admin (data, laporan, grafik)
- `pages/` - halaman front-end (home, daftar, login, konsultasi, profil)
- `assets/` - CSS/JS/image pendukung
- `images/` - gambar konten (slider, informasi)
- `config/` - konfigurasi database
- `db/` - file SQL database contoh

## Instalasi (Ringkas)

1. Pastikan Apache dan MySQL aktif (XAMPP/LAMPP).
2. Import database dari `db/db_ppapekanbaru.sql`.
3. Atur koneksi database di `config/database.php`.
4. Akses aplikasi:
   - Front-end: `http://localhost/ppapekanbaru/`
   - Admin: `http://localhost/ppapekanbaru/admin/`

## Konfigurasi Database

- Database default: `db_ppapekanbaru` (sesuai file SQL).
- Pastikan tabel `tbl_klien` memiliki kolom `username` untuk login klien.
  Contoh SQL:
  ```sql
  ALTER TABLE tbl_klien
    ADD COLUMN username VARCHAR(50) NOT NULL AFTER pekerjaan;

  UPDATE tbl_klien
    SET username = email
    WHERE username IS NULL OR username = '';

  ALTER TABLE tbl_klien
    ADD UNIQUE KEY username_unique (username);
  ```

## Login

### Klien (Front-end)

- Login menggunakan `username` dan `password`.
- Data tersimpan di tabel `tbl_klien` dengan password MD5.

### Admin

- Login admin menggunakan data pada tabel `tbl_user` (admin panel).

## Catatan

- Jika ada error 500 saat daftar, cek log PHP dan pastikan kolom `username` sudah ada di `tbl_klien`.
- Alamat klien di `tbl_klien` default panjang `varchar(50)`.
