<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data mahasiswa

    </title>
</head>
<body>
    
<h3>tambah data mahasiswa</h3>
<form action="dbinsetdatamhs.php" method="POST">

    NIM
    <div>
        <input type="text" name="txNIM">
    </div>
    NAMA
    <div>
        <input type="text" name="txNAMA">
    </div>
    JURUSAN
    <div>
        <select name="txJUR">
            <option value="MTI">MTI</option>
            <option value="DGM">DGM</option>
        </select>
    </div>
    TGL lahir
    <div>
        <input type="date" name="txTALAG">
    </div>
    Jenis kelamin
    <div>
        <select name="txJK"> 
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
        </select>
    </div>
    passcode
    <div>
        <input type="password" name="txPASS">
    </div>
</form>
</body>
</html>