# Tugas-PWEB-Week9
Nama  : Reza Afzaal Faizullah Taqy
NRP   : 5025241051

<img width="747" height="250" alt="image" src="https://github.com/user-attachments/assets/20e04a65-6442-4c4e-988f-4e056d522170" />

1. Struktur Database <br>
Aplikasi ini terhubung ke database bernama pendaftaran_siswa yang berisi satu tabel utama, yaitu calon_siswa. Tabel ini memiliki kolom-kolom berikut:

id (Primary Key, Auto Increment)

nama

alamat

jenis_kelamin

agama

sekolah_asal

2. Penjelasan Kode per File <br>
Berikut adalah penjelasan singkat fungsionalitas dari masing-masing file:

1. config.php (File Konfigurasi) <br>

Tujuan: Menghubungkan PHP ke database MySQL.

Penjelasan: File ini berisi kredensial database (server, user, password, nama database). File ini menggunakan fungsi mysqli_connect() untuk membuat koneksi ke server MySQL. Koneksi ini disimpan dalam variabel $db yang akan digunakan oleh file-file lain. File ini juga memiliki penanganan error sederhana jika koneksi gagal.

2. index.php (Halaman Utama)<br>

Tujuan: Halaman beranda dan navigasi utama.

Penjelasan: Ini adalah halaman pertama yang dilihat pengguna. Isinya sederhana, hanya menampilkan judul aplikasi dan dua tautan navigasi utama: satu untuk mendaftar siswa baru (form-daftar.php) dan satu lagi untuk melihat daftar semua siswa yang sudah terdaftar (list-siswa.php). File ini juga memiliki logika PHP untuk menampilkan notifikasi "sukses" atau "gagal" yang dikirim melalui URL ($_GET['status']).

3. form-daftar.php (Formulir Pendaftaran - Create 1)<br>

Tujuan: Menyediakan formulir untuk menambah data baru.

Penjelasan: File ini berisi formulir HTML (<form>) untuk menginput data siswa baru (nama, alamat, dll.). Formulir ini diatur untuk mengirim data yang diinput ke proses-pendaftaran.php menggunakan metode POST.

4. proses-pendaftaran.php (Proses Pendaftaran - Create 2)<br>

Tujuan: Menyimpan data baru ke database.

Penjelasan: Skrip ini tidak memiliki tampilan HTML. Tugasnya adalah menerima data yang dikirim dari form-daftar.php melalui $_POST. Skrip ini mengambil data tersebut, menyusun query SQL INSERT INTO, dan menjalankannya. Setelah itu, skrip akan mengalihkan (redirect) pengguna kembali ke index.php sambil mengirim status 'sukses' atau 'gagal'.

5. list-siswa.php (Daftar Siswa - Read)<br>

Tujuan: Menampilkan semua data siswa dari database.

Penjelasan: Halaman ini bertanggung jawab untuk operasi Read. File ini mengambil data semua siswa dari database dengan query SELECT * FROM calon_siswa. Kemudian, data tersebut ditampilkan dalam sebuah tabel HTML menggunakan perulangan while. Di setiap baris data, terdapat juga tautan untuk "Edit" dan "Hapus" yang mengirimkan id siswa melalui URL.

6. form-edit.php (Formulir Edit - Update 1)<br>

Tujuan: Menampilkan formulir untuk mengedit data yang sudah ada.

Penjelasan: Halaman ini mirip dengan form-daftar.php. Skrip ini pertama-tama mengambil id dari URL ($_GET['id']), lalu mengambil data siswa yang bersangkutan dari database (SELECT ... WHERE id=$id). Data tersebut kemudian ditampilkan sebagai nilai default di dalam formulir, sehingga pengguna bisa melihat data lama sebelum mengubahnya.

7. proses-edit.php (Proses Edit - Update 2)<br>

Tujuan: Menyimpan perubahan data ke database.

Penjelasan: Skrip ini menerima data dari form-edit.php (termasuk id yang tersembunyi). Tugasnya adalah menyusun query SQL UPDATE untuk memperbarui data siswa di database berdasarkan id-nya. Setelah query dijalankan, pengguna dialihkan kembali ke halaman list-siswa.php.

8. hapus.php (Proses Hapus - Delete)<br>

Tujuan: Menghapus data siswa dari database.

Penjelasan: Ini adalah skrip untuk operasi Delete. Skrip ini mengambil id dari URL ($_GET['id']) yang dikirim dari halaman list-siswa.php. Berdasarkan id tersebut, skrip ini menjalankan query SQL DELETE untuk menghapus baris data siswa. Setelah selesai, pengguna langsung dialihkan kembali ke list-siswa.php.
