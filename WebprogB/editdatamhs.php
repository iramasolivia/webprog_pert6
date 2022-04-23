<?php
    include_once("dbkoneksi2.php");
    include_once("dbbdmhs.php");
    if($h["JK"]=="L"){
        $seLaki = "selected";
        $sePerempuan = "";
    }else{
        $seLaki = "";
        $sePerempuan = "selected";
    }
    if($h["JURUSAN"]=="MTI"){
        $seMTI = "selected";
        $seDGM = "";
    }else{
        $seMTI = "";
        $seDGM = "selected";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
</head>
<body>
    
<h3>Edit Data Mahasiswa</h3>
    <form action="dbupdatedatamhs.php" method="POST">
    
        NIM
        <div>
        <input type="text" name="txNIM" value="<?=$h["NIM"];?>">
        </div>
        NAMA
        <div>
        <input type="text" name="txNAMA"value="<?=$h["NAMA"];?>">
        </div>
        JURUSAN
        <div>
            <select name="txJUR">
                <option value="MTI"<?=$seMTI;?>>MTI</option>
                <option value="DGM"<?=$seDGM;?>DGM></option>
            </select>
        </div>
        TGL lahir
        <div>
        <input type="date" name="txTALAG">
        </div>
        Jenis kelamin
        <div>
        <select name="txJK"> 
            <option value="L"<?=$seLaki;?>>Laki-Laki</option>
            <option value="P"<?=$sePerempuan;?>>Perempuan</option>
        </select>
        </div>
        passcode
        <div>
        <input type="password" name="txPASS" value ="<?=$h["PASSCODE"]?>">
        </div>
        <div>
        <button type="submit">Simpan Data</button>
        </div>
    </form>   
</body>
</html>