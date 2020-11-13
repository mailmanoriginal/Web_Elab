# Website E-laboratory
- WHAT: penjelasan mengenai aplikasi apa yang Anda buat.
- WHO, WHERE, WHEN: siapa target penggunanya (juga jelaskan di mana atau kapan aplikasi Anda dibutuhkan, bila relevan).
- WHY: mengapa aplikasi ini penting.
- HOW: jelaskan filosofi HCI yang Anda terapkan pada pembuatan aplikasi ini, lalu dilanjutkan dengan screenshot semua tampilan yang menurut Anda penting.

Website E-Laboratory adalah praktikum online yang sudah diintegrasikan pada satu website.

Website ini dapat memudahkan mahasiswa dalam melakukan praktikum online.

# Menjalankan Website
## Online
Website ini belum memiliki domain, sehingga hanya dapat dijalankan dengan menggunakan local server.

## Offline
Untuk menjalankan website, dibutuhkan software seperti XAMPP yang dapat menjalankan file php pada local server.

### A. Menjalankan Website
1. Download dan Install XAMPP pada https://www.apachefriends.org/index.html.
2. Masukkan folder yang memiliki seluruh file website, yaitu "WEBLABPHP", kedalam folder "htdocs" yang berada pada path C:\xampp\htdocs.
//image
3. Menjalan software XAMPP Control Panel dan memulia Apache
image
4. Membuka http://localhost/weblabphp/ pada browser.

### B. Database
Untuk menjalaskan website, harus digunakan database untuk dapat melakukan login dan register. Terdapat dua database yang dapat digunakan, yaitu Database yang disediakan oleh dev website dan database local server.
#### Online Database
Command pemanggil server pada file dbh.inc.php pada path C:\xampp\htdocs\weblabphp\include secara default memanggil server database online.
```php
$severName = "weblabphp.cvi3aj31gxm7.us-east-1.rds.amazonaws.com";
$dBUserName = "eelab";
$dBPassword = "beatsme85";
$dBName = "web";
```
Hubungi pengembang website untuk menghidupkan database.

#### Local Server Database
Untuk menjalankan database pada local server, ikuti langkah berikut:
1. Menyalakan MySQL pada XAMPP
//image
2. Membuka http://localhost/phpmyadmin/ pada bowser
//image
3. Mengganti command pemanggil server pada file dbh.inc.php pada path C:\xampp\htdocs\weblabphp\include untuk memanggil database local server menjadi:
```php
$severName = "localhost";     
$dBUserName = "root";        
$dBPassword = "";         
$dBName = "weblabphp"; 
```

### C. Login dan Register
#### Register
Isi semua hal yang perlu diisi untuk melakukan register.
//image
Proses akan gagal jika terdapat kesalahan saat melakukan register.
//image

#### Login 
Login dengan username dan password yang telah dibuat saat melakukan register.
//image
Proses akan gagal jika terdapat kesalahan saat melakukan login.
//image

### D. Menggunakan Website
#### Home Page 
