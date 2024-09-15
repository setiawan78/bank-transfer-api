
# Sistem Rest API Sederhana Bank Transfer

Sebuah Sistem Rest API Sederhana yang akan digunakan untuk pengiriman uang gratis antar bank, dimana bank pengirim dan bank yang menjadi tujuan transfer masing-masing telah terdaftar dalam sistem.

# Tools yang dibutuhkan :
1. Xampp, menggunakan PHP 8.1
2. Composer, menggunakan 2.2.0 atau yang lebih tinggi. untuk file & tutorial instalasi dapat diakses pada https://getcomposer.org/download/
3. Laravel, Saya menggunakan laravel 10.0. Tutorial instalasi dapat diakses pada https://laravel.com/docs/10.x/installation
4. Visual Studio Code
5. Postman

#instalasi
1. Clone repository ini Clone repository ini dengan memilih tipe protokol HTTPS atau SSH. Jika belum memiliki setup SSH, bisa menggunakan HTTPS.
    
    git clone https://github.com/setiawan78/bank-transfer-api.git
    
    cd bank-transfer-api

2. Install dependencies
    
    composer install

    composer require tymon/jwt-auth


3. Set up Konfigurasi Laravel

    copy .env.example .env

4. Membuat Database baru
Untuk membuat database baru, aktifkan xampp terlebih dahulu. Kemudian buat database dengan nama bank-transfer-api.

5. Setting Database di .env
Buka folder project yang dibuat di text editor yang digunakan, lalu pilih file bernama .env Ubah nilai database menjadi seperti :

    DB_DATABASE=bank-transfer-api

6. Publikasikan konfigurasi JWT:

    php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
    
    php artisan jwt:secret

7. database dan lakukan seeding

    php artisan migrate --seed


# User Credential
1. User
    
    Name : PT Bos COD Indonesia
    
    Email : user@boscod.com
    
    Password : rahasia

2. User
    
    Name : Indra Setiawan
    
    Email : stiwanindra536@gmail.com
    
    Password : 12345678

