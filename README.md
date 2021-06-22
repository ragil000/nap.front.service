<img alt="PHP" src="https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white"/> Codeigniter v3.1.11 <img alt="Bootstrap" src="https://img.shields.io/badge/bootstrap-%23563D7C.svg?style=for-the-badge&logo=bootstrap&logoColor=white"/> Cretive Team Template
### TENTANG
Ini adalah salah satu service dari aplikasi penjadwalan pesan dan pengingat (notification app). Silahkan download semua servicenya untuk menjalankan aplikasi ini.

![user dashboard](https://github.com/ragil000/nap.front.service/blob/master/readme/user-dashboard.png?raw=true)
*Tampilan halaman awal user*

------------


![admin dashboard](https://github.com/ragil000/nap.front.service/blob/master/readme/admin-dashboard.png?raw=true)
*Tampilan halaman awal admin*

------------

### INSTALASI
1. Install service utama [[Download disini]](https://github.com/ragil000/nap.base.service "[Download disini]")
2. Atur konfigurasi base url di *application->config->config.php*
![konfigurasi base url](https://github.com/ragil000/nap.front.service/blob/master/readme/config-base-url.png?raw=true)
*Sesuaikan alamat url-nya dengan alamat service ini diinstall. Jika menggunakan XAMPP biasanya akan disimpan di folder **htdocs**, sehingga akan menjadi http://localhost/[nama-foldermu] (misal: http://localhost/nap.front.service)*

### MENJALANKAN
1. Jalankan service utama [[Download disini]](https://github.com/ragil000/nap.base.service "[Download disini]").
Lalu buat akun super admin secara manual menggunakan POSTMAN atau API tester lainnya [[Lihat daftar enpoint disini]](https://github.com/ragil000/nap.base.service "[Lihat daftar enpoint disini]").
![contoh request menggunakan endpoint signup](https://github.com/ragil000/nap.front.service/blob/master/readme/request-create-super-admin.png?raw=true)
Jangan lupa memberikan header:
`Content-Type: application/json`
`X-API-KEY: [API KEY yang anda set saat install service utama]`
![contoh response menggunakan endpoint signup](https://github.com/ragil000/nap.front.service/blob/master/readme/response-create-super-admin.png?raw=true)
Jika berhasil, contoh responnya akan seperti ini.
2. Jalankan service email [Download disini](https://github.com/ragil000/nap.email.service "Download disini").
3. Jalankan service whatsapp [Download disini](https://github.com/ragil000/nap.wa.service "Download disini").
Kemudian scan QR Code yang muncul di terminal. Jika QR Code tidak muncul atau error, coba jalankan ulang.
![QR Code](https://github.com/ragil000/nap.front.service/blob/master/readme/QR-Code.png?raw=true)
4. Jika menggunakan XAMPP, jalankan XAMPP anda kemudian buka browser lalu ketik alamat base url anda tadi lalu tambahkan slash "/admin" (misal: http://localhost/nap.front.service/admin). Lalu silahkan login, dan anda sudah bisa menggunakan aplikasi ini.

### ASSETS
Thanks to [Creative Team](https://www.creative-tim.com/ "Creative Team") for awesome template.
Thanks to [Undraw](https://undraw.co/ "Undraw") for awesome illustration.

### LISENSI
Anda diperbolehkan menggunakan proyek ini secara bebas, termasuk juga yang bersifat komersil (tidak termasuk template yang saya gunakan).