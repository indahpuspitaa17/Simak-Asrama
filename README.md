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
