# Sekolah Cendekia Baznas

**SMP Cendekia BAZNAS (SCB)** merupakan sekolah tingkat SMP berkonsep asrama, bebas biaya untuk anak dhuafa berprestasi yang lolos seleksi dari berbagai wilayah di Indonesia.

SCB adalah salah satu program pendidikan yang dikelola oleh Badan Amil Zakat Nasional (BAZNAS), memiliki motto membangun karakter-mengoptimalkan potensi. Setiap siswa menempuh pendidikan formal (kurikulum dinas pendidikan), pembinaan karakter islam, qur’an-hadist serta pengembangan potensi sesuai minat dan bakat.

## Sistem Informasi Asrama SMP Cendekia Baznas (SIMAK SCB)
SIMAK SCB dirancang untuk bisa mengolah semua informasi yang ada secara terintegrasi sehingga data yang tersedia selalu terbarukan secara *realtime*. Dengan adanya SIMAK SCB ini harapannya bisa mempermudah pihak sekolah maupun administrator dalam mengolah data dan menyimpan semua data yang ada.

### Amalan Yaumiyah
- **Deskripsi:** Melakukan pendidikan karakter melalui pendataan Ibadah Amaliyah
kepada setiap siswa, sehingga para guru bisa memantau perminggu
perkembangan karakter dari siswa, dan mengajarkan kejujuran siswa dalam
mengisi pendataan tersebut.
- **Stakeholder:** Bagian akademik SCB (untuk data siswa SCB), Pihak SR (untuk
data teknologi-teknologi yang tersedia disana)
- **Fitur:** Dengan menyediakan perangkat komputer di setiap lantai asrama, siswa
melakukan login ke akun masing-masing dan mengisi form kegiatan amaliyah
yang telah dilakukan selama seminggu dalam bentuk option pilihan. Atau solusi
paling mudah dengan menggunakan google form

### Catatan Kebaikan dan Keburukan
- **Deskripsi:** Hampir sama dengan sistem Ibadah amaliyah, tetapi siswa mengisi
dalam bentuk isi curahan hati masing-masing siswa terkait kebaikan dan
keburukan yang telah mereka lakukan setiap harinya
- **Stakeholder:** Pihak SR (untuk data teknologi-teknologi yang tersedia disana)
- **Fitur:** Memberi sarana kepada siswa untuk mencurahkan kebaikan dan
keburukan yang yang telah ia lakukan. Teknisnya kurang lebih mirip dengan
Ibadah Amaliyah

### Poin Pelanggaran
- **Deskripsi:** Dibutuhkan sistem yang bisa mendata pelanggaran yang telah
dilakukan oleh setiap siswa, sehingga para guru bisa memantau poin
pelanggaran yang telah dilakukan oleh setiap siswa, begitupun sebaliknya,
siswa dapat memantau poin pelanggaran yang telah siswa lakukan.
- **Stakeholder:** Bagian akademik SCB (untuk data siswa SCB), Pihak SR (untuk
data teknologi-teknologi yang tersedia disana), Pihak “Komdis” SCB (untuk
data poin pelanggaran).
- **Fitur:** Penginputan data pelanggaran siswa kedalam sistem informasi sekolah, monitoring pelanggaran setiap siswa, dan monitoring siswa terhadap poin yang siswa terima.

### Absen Sholat
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
