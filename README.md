<p align="center">
  <a href="">
    <img src="https://github.com/ervanoyy/PSBOPerpustakaan/blob/master/public/images/logo1.png" alt="Sistem Perpustakaan" width=72 height=80>
  </a>

  <h3 align="center">Sistem Informasi Akademik Asrama</h3>

  <p align="center">
    SMP Cendekia BAZNAS (SCB) merupakan sekolah tingkat SMP </br>
    yang dikelola oleh Badan Amil Zakat Nasional (BAZNAS).
    <br>
  </p>
</p>

## Deskripsi Singkat
SIMAK SCB dirancang untuk bisa mengolah semua informasi seputar akademik asrama siswa yang ada secara terintegrasi sehingga data yang tersedia selalu terbarukan secara *realtime*. Dengan adanya SIMAK SCB ini harapannya bisa mempermudah pihak sekolah maupun administrator dalam mengolah data dan menyimpan semua data yang ada.

## Fitur Secara Umum
### Biodata
- Biodata berisi identitas dari siswa, identitas berisi nama, tempat, tanggal lahir, NIS, serta nama orang tua.
- Pembina/guru bisa mengedit biodata dari siswa
- Pada role pembina, pembina juga bisa melihat identitas pembina dan bisa mengedit identitasnya. 

### Catatan Amalan Yaumiyah
- **Deskripsi:** Melakukan pendidikan karakter melalui pendataan Ibadah Amaliyah
kepada setiap siswa, sehingga para guru bisa memantau perminggu
perkembangan karakter dari siswa, dan mengajarkan kejujuran siswa dalam
mengisi pendataan tersebut.
- **Stakeholder:** Bagian akademik SCB (untuk data siswa SCB), Pihak SR (untuk
data teknologi-teknologi yang tersedia disana)
- Sebagai tempat pencatatan amalan yang telah dilakukan siswa setiap harinya, seperti telah melakukan Sholat Tahajud.
- Siswa dan pembina dapat melihat riwayat amalan yang telah sang siswa lakukan
- Pembina dapat melihat riwayat amalan siswa dalam bentuk pdf


### Catatan Kebaikan dan Keburukan
- **Deskripsi:** Hampir sama dengan sistem Ibadah amaliyah, tetapi siswa mengisi
dalam bentuk isi curahan hati masing-masing siswa terkait kebaikan dan
keburukan yang telah mereka lakukan setiap harinya
- **Stakeholder:** Pihak SR (untuk data teknologi-teknologi yang tersedia disana)
- Sebagai tempat pencatatan hal-hal baik dan buruk yang telah dilakukan siswa setiap harinya, seperti telah menyapu kamar asrama.
- Siswa dan pembina dapat melihat riwayat hal baik dan buruk yang telah sang siswa lakukan
- Pembina dapat melihat riwayat hal baik dan buruk tersebut dalam bentuk pdf untuk penilaian setiap minggunya


### Poin Pelanggaran dan Kebaikan
- **Deskripsi:** Dibutuhkan sistem yang bisa mendata pelanggaran yang telah
dilakukan oleh setiap siswa, sehingga para guru bisa memantau poin
pelanggaran yang telah dilakukan oleh setiap siswa, begitupun sebaliknya,
siswa dapat memantau poin pelanggaran yang telah siswa lakukan.
- **Stakeholder:** Bagian akademik SCB (untuk data siswa SCB), Pihak SR (untuk
data teknologi-teknologi yang tersedia disana), Pihak “Komdis” SCB (untuk
data poin pelanggaran).
- Setiap siswa yang melanggar tata tertib akan dikenakan sanksi dan akan diberikan poin. Apabila sudah melebihi batas poin yang ditentukan maka akan diberikan Surat Peringatan.
- Jenis pelanggaran dan sanksi diklasifikasikan menjadi 3 ( tiga) tingkatan yaitu tingkat 1(ringan). tingkat 2 (sedang), dan tingkat 3 (berat)
Setiap siswa yang melakukan kebaikan baik juga akan diberikan poin. Poin kebaikan berfungsi sebagai peringan dari pelanggaran tata tertib ketika akan dikeluarkannya Surat Peringatan.
- Jenis kebaikan diklasifikasikan menjadi 3 bagian yaitu perunggu (kebaikan berdampak pada diri dan orang lain individu), perak (kebaikan itu berdampak pada diri sendiri khalayak dan lingkungan), dan emas (kebaikan berdampak pada diri sendiri,khalayak, lingkungan dan lembaga)


### Catatan Sholat
- **Deskripsi:** Pihak “SR” SCB menginginkan adanya absen yang teknisnya
kurang lebih seperti absen online IPB agar bisa memantau anak-anak SCB
apakah sudah melakukan sholat atau tidak dan juga memantau mana yang rajin
sholat tepat waktu dan mana yang tidak. Untuk bentuk dari absennya sendiri,
kelompok kami belum memiliki jawaban pasti dikarenakan penerapan aturan
SCB sendiri yang kami rasa membuat teknologi disana menjadi
SANGAT-SANGAT terbatas untuk ide ini dapat direalisasikan.
- **Stakeholder:** Bagian akademik SCB (untuk data siswa SCB), Pihak SR (untuk
data teknologi-teknologi yang tersedia disana)
- **Fitur:** Berupa scan barcode kartu tanda siswa atau menggunakan fingerprint
(optional)

### Catatan Harian Siswa
- Sebagai tempat untuk mencatat kegiatan siswa yang berupa Prestasi maupun Indisipliner. Hal tersebut memudahkan pembina maupun guru untuk dapat mengetahui kemampuan dan karakter dari siswa binaan.
- Pembina dapat menambahkan catatan pada siswa yang bersangkutan, Ada dua kategori pencatatan, yaitu prestasi atau indisipliner. Serta pembina/guru dapat menambahkan keterangan, tanggal kejadian, maupun tindakan yang telah dilakukan pembina terhadap siswa binaan.

### Hafalan Al-Qur'an dan Hadits
- Sebagai media untuk guru mencatat hafalan siswa seperti hafalan Al-Quran, Hadits dan Doa. 
- Siswa dapat melihat record hafalan mereka sendiri. 
- Siswa dapat melihat record hafalan dalam bentuk pdf.

## Konsep *Object Oriented Programming* yang Digunakan
### Abstract Class
- Kelas merupakan deskripsi abstrak informasi dan tingkah laku dari sekumpulan data.
- Kelas dapat diilustrasikan sebagai suatu cetak biru(blueprint) atau prototipe yang digunakan untuk menciptakan objek.
- Kelas merupakan tipe data bagi objek yang mengenkapsulasi data dan operasi pada data dalam suatu unit tunggal.
- Kelas mendefinisikan suatu struktur yang terdiri atas data kelas (data field), prosedur atau fungsi (method), dan sifat kelas (property).

### Encapsulation
- Istilah enkapsulasi sebenarnya adalah kombinasi data dan fungsionalitas dalam sebuah unit tunggal sebagai bentuk untuk menyembunyikan detail informasi.
- Proses enkapsulasi memudahkan kita untuk menggunakan sebuah objek dari suatu kelas karena kita tidak perlu mengetahui segala hal secara rinci.
- Enkapsulasi menekankan pada antarmuka suatu kelas, atau dengan kata lain bagaimana menggunakan objek kelas tertentu.
Contoh: kelas mobil menyediakan antarmuka fungsi untuk menjalankan mobil tersebut, tanpa kita perlu tahu komposisi bahan bakar, udara dan kalor yang diperlukan untuk proses tersebut.

### Inheritance
- Kita dapat mendefinisikan suatu kelas baru dengan mewarisi sifat dari kelas lain yang sudah ada.
- Penurunan sifat ini bisa dilakukan secara bertingkat tingkat, sehingga semakin ke bawah kelas tersebut menjadi semakin spesifik.
- Sub kelas memungkinkan kita untuk melakukan spesifikasi detail dan perilaku khusus dari kelas supernya.
- Dengan konsep pewarisan, seorang programmer dapat menggunakan kode yang telah ditulisnya pada kelas super berulang kali pada kelas-kelas turunannya tanpa harus menulis ulang semua kode-kode itu.

### Polymorphism
- Polimorfisme merupakan kemampuan objek-objek yang berbeda kelas namun terkait dalam pewarisan untuk merespon secara berbeda terhadap suatu pesan yang sama.
- Polimorfisme juga dapat dikatakan kemampuan sebuah objek untuk memutuskan method mana yang akan diterapkan padanya, tergantung letak objek tersebut pada jenjang pewarisan.
- Method overriding.
- Method name overloading.

## Tipe Design Pengembangan
Dalam mengembangkan sistem informasi asrama, kelompok kami menggunakan design pattern **MVC (*Model View Controller*)** yang dimana sistem pengembangan aplikasi tersebut akan dipecah menjadi tiga bagian, yaitu ***model*** (database), ***view*** (tampilan/ui) dan yang terakhir ***controller*** (interaksi *model* dan *view*). Sarana yang digunakan dalam *design pattern* tersebut adalah *framework* **Laravel**.

#### Model :
- User
- Catatan Baik/Buruk
- Absensi Sholat
- Catatan Amalan Yaumiyah
- Hafalan Quran/Hadist
- Poin Pelanggaran

#### View :
<a>
 
 **1. Landing Page** <br> 
 View landing page merupakan tampilan awal dari web asrama SCB, view ini menampilkan kata selamat datang, logo SCB, serta contact person dan pilihan untuk login. 

**2. Login Page** <br>
View login page menampilkan format yang harus diisi oleh pengguna (siswa dan guru pembina) yaitu ID Pengguna dan kata sandi.

**3. View untuk Setiap Model (siswa)** 
+ **Catatan baik dan buruk** <br>
View catatan baik dan buruk akan menampilkan identitas dari siswa, serta riwayat atau catatan baik dan buruk siswa tempo hari. Selain itu, view akan menampilkan halaman untuk menambahkan catatan yang berisi form yang harus diisi oleh siswa apabila ingin menambahkan catatannya yaitu hari/tanggal, jam, jenis amalan, jenis kegiatan serta deskripsinya. 

+ **Absensi sholat** <br>
View absensi sholat menampilkan identitas dari siswa dan riwayat absensi sholat dari waktu yang sebelumnya berupa tabel yang berisi tanggal, waktu, dan waktu sholat (subuh, dzuhur, dll).  

+ **Catatan Amalan Yaumiyah** <br>
View catatan amalan yaumiyah di sisi pengguna siswa akan menampilkan identitas dari siswa dan tabel riwayat catatan amalannya, view saat menambah catatan amalan menampilkan tabel yang berisi jenis amalan, kondisi yang dapat dipilih siswa berupa radio button ya atau tidak, jumlah, serta keterangan. 

+ **Hafalan Qur’an dan Hadist** <br>
View hafalan Al-Qur’an dan hadits di sisi pengguna siswa akan menampilkan identitas dari siswa dan tabel riwayat hafalannya, serta menampilkan pilihan untuk mencetak riwayat hafalan siswa tersebut. 

+ **Poin pelanggaran dan kebaikan** <br>
View poin pelanggaran dan kebaikan di sisi pengguna siswa akan menampilkan identitas dari siswa serta 2 tabel yang berisi riwayat poin pelanggaran dan riwayat poin kebaikan dari siswa tersebut.

**4. View untuk setiap model (guru)**
* **Catatan baik dan buruk**  <br>
View catatan baik dan buruk akan menampilkan form berisi nama dan kelas siswa, sehingga guru dapat melihat riwayat catatan kebaikan dan keburukan dari siswa tersebut berupa 2 tabel yang dibedakan menjadi catatan kebaikan dan catatan keburukan yang berisi tanggal, jenis kebaikan/keburukan, keterangan, serta aksi yang memungkinkan guru untuk menyunting atau menghapus catatan siswa.  

* **Absensi sholat** <br>
View absensi sholat dari sisi pengguna guru menampilkan form yang berisi jenis sholat berupa dropdown dan pilihan pencatatan absensi sholat dengan manual atau dengan QR scan. Pada view pencatatan absensi secara manual akan menampilkan form yang berisi jenis sholat, kelas, dan nama serta menampilkan tabel yang berisi absensi sholat 10 siswa terbaru pada saat itu. 

* **Catatan Amalan Yaumiyah** <br>
View amalan yaumiah di sisi pengguna guru menampilkan form berisi nama dan kelas siswa, sehingga guru dapat melihat riwayat catatan amalannya berupa tabel yang disertai aksi dimana guru bisa menyunting atau menghapus amalan siswa. 

* **Hafalan Qur’an dan Hadist** <br>
View amalan yaumiah di sisi pengguna guru menampilkan form berisi nama dan kelas siswa, sehingga guru dapat melihat riwayat hafalan Al-Qur’an dan hadist berupa tabel serta  pilihan untuk menambahkan hafalan. Pada view menambahkan hafalan siswa, berupa form yang berisi Al-Qur’an/Hadist, surat, ayat, jenis hafalan serta nilainya. 

* **Poin pelanggaran dan kebaikan** <br>
View poin pelanggaran dan kebaikan di sisi pengguna guru akan menampilkan form berupa nama siswa, selanjutnya guru dapat memilih nama siswa yang akan dicatat, dari view penambahan catatan akan menampilkan form yang berisi jenis poin, hari/tanggal, jumlah poin serta jenis kebaikan/pelanggaran berupa text box. Setelah itu akan muncul tampilan riwayat poin pelanggaran dan kebaikan berupa 2 tabel.

#### Controller :
**Auth Controller** <br>
Controller yang mengatur autentikasi, seperti login pada web tersebut, sehingga tidak sembarang user bisa mengakses fitur dari web tersebut.
Controller untuk Setiap Model

</a>

## Developer
Nama | NIM 
------ | ------ 
Titan Dayu Pratisena | G64170008 
M. Kamil | G64170019 
Cindana Putri Ramadhani | G64170022 
Satria Bayuaji | G64170031
Indah Puspita | G64170035 
Mickael | G64170039 
Mursyid Alhadi | G64170042 
T. Sandra Alyssa | G64170048 
Elia Samuel | G64170060 
Dharmawan Siswanto | G64170061 
Daffa Wicaksono | G64170066 
Usman Abdul Halim | G64170071 
Rafie Fadlurahman | G64170074 
Muhamad Alif Hanif F.  | G64170084 
Haidar Muhammad Yasin | G64170096 
Muhammad Dani Alfaris | G64170104 
Amin Elhan | G64170109 


## Step-Mom
0. php artisan composer install && php artisan composer update
1. php artisan key:generate
2. php artisan migrate
3. php artisan db:seed

email : pembina@gmail.com / siswa@gmail.com
<br>
pass : pembina123 / siswa123
