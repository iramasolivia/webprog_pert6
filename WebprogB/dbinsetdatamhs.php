<?php
    /**
     * menambahkan data ketabel mhs
     * 1.buat koneksi
     * 2.buat script sql untuk insert data ke tabel mhs
     * NIM, NAMA, JURUSAN, Tgl lahir, jk, passcode
     * 3.execute point 2
     * 4.cek status
     * 5.close connection
     */
    if(isset($_POST["txNIM"])){
     include_once("dbkoneksi2.php");

     $nim = $_COOKIE_POST["txNIM"];
     $nama = $_COOKIE_POST["txNAMA"];
     $talag = $_COOKIE_POST["txTALAG"];
     $jk = $_COOKIE_POST["txJK"];
     $jur = $_COOKIE_POST["txJUR"];
     $pass = $_COOKIE_POST["txPASS"];



     $sqlINSERT = "INSERT INTO MHS(NIM, NAMA, JURUSAN, TGLLAHIR,JK, PASSCODE) VALUES
     ('".$nim."','".$nama.'",'"$jur."',"'.$jk.'","'.$talag."','".$pass."');";

     $hsl = mysqli_query($cnn, $sqlINSERT);

     if($hsl){
         echo "Insert Data Sukses<br>";
        
     }else{
         echo "Insert Data gagal<br>";
     }

     mysqli_close($cnn);
    }