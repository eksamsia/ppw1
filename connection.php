<!-- Inisialisasi awal kode PHP -->
<?php
    $servername = "localhost";          // deklarasi nama server
    $username = "root";                 // deklarasi nama pengguna
    $password = "";                     // deklarasi password pengguna
    $database = "marketplace_kopma";    // deklarasi nama database

    // melakukan pembuatan koneksi ke MySQL server
    $connection = mysqli_connect($servername, $username, $password, $database);

    // melakukan kondisi pengecekan apakah koneksi berhasil. Jika gagal maka perintah didalam (if) akan dieksekusi
    // !$connection = tanda-seru(!) sebelum nama variabel diartikan sebagai NOT atau jika variable $connection memberikan return false.
    if (!$connection) {
        die("Connection failed:" . mysqli_connect_error());
    }
?>
<!-- Inisialisasi akhir kode PHP -->