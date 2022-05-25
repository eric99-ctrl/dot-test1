## Cara Menggunakan
- pastikan composer sudah diinstall - composer install.
- Pastikan file .env sudah disetting untuk databasenya pake MySQL.
- Lakukan proses migrasi database - php artisan migrate.
- Lakukan start server - php artisan serve.

## Jawaban
- pastikan koneksi internet stabil
- untuk melakukan import data provinsi -> php artisan import:province
- untuk melakukan import data kabupaten/kota -> php artisan import:city
- REST API untuk pencarian provinsi -> GET /api/search/provinces?id={province_id}
- REST API untuk pencarian kabupaten/kota -> GET /api/search/cities?id={city_id}