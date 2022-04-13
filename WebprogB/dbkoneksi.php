<?php
/**
 * membuat koneksi
 * 1.menyiapkan lokasi server, user name dan pasword
 * 2.test koneksi
 */  


include_once("konfigurasi.php");

$cnn = mysqli_connect(DBHOST,DBUSER,DBPASCODE) or die("koneksi ke DBMS Mysql gagal<br>");
echo "koneksi ke DBMS Mysql sukses<br>";