<?php

include("config.php");

if(isset($_POST['daftar'])){

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    $sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUES ('$nama', '$alamat', '$jk', '$agama', '$sekolah')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
    // kalau berhasil alihkan ke halaman index.php dengan status=sukses
    header('Location: index.php?status=sukses');
    } else {
        // kalau gagal, tampilkan pesan error
        die("Query gagal dijalankan: ".mysqli_error($db));
    }


} else {
    die("Akses dilarang...");
}

?>