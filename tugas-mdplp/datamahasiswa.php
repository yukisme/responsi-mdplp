<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Dashboard input data</title>
</head>
<style>
    body{
    background: #ffffff;
}
</style>
<body>
    <div class="sidebar">
        <header>Menu</header>
        <ul>
        <li><a href="dosen.php"><i class="fas fa-mouse"></i>Dosen</a></li>
            <li><a href="datadosen.php"><i class="fas fa-mouse"></i>Data Dosen</a></li>
            <li><a href="inputdataMhs.php"><i class="far fa-calendar-check"></i>Mahasiswa</a></li>
            <li><a href="datamahasiswa.php"><i class="far fa-calendar-check"></i></i>Data Mahasiswa</a></li>
            <li><a href="matakuliah.php"><i class="fas fa-database"></i>Mata Kuliah</a></li>
            <li><a href=""><i class="fas fa-database"></i>Jadwal</a></li>
            <li><a href=""><i class="fas fa-database"></i>Administrasi</a></li>
        </ul>
    </div>
    <style>
        .table{
            border-collapse: collapse;
            font-size: 13pt;
            text-align: center;
        }
        .table tr{
            padding: 10px;
            height: 30px;
        }
        .table th{
            background-color: #1e6091;
            color: white;
        }
        .btn-delete{
            border: 1px solid #db5d59;
            background: #db5d59 url(hapus.png) no-repeat 5px 4px;
            height: 22px;
            padding-left: 30px;
        }
        .btn-update{
            border: 1px solid #00b3a8;
            background: #00b3a8 url(edit.png) no-repeat 5px 4px;
            height: 22px;
            padding-left: 30px;
        }
    </style>
    <div class="table">
        <table class="data" border="1">
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>NIM</th>
                <th style="width: 100px;">Jenis Kelamin</th>
                <th>No Handphone</th>
                <th>Alamat</th>
            </tr>
            <?php
            include "koneksi.php";
            $no=1;
            $ambildata = mysqli_query($koneksi, "select * from table_mhs");
            while ($tampil = mysqli_fetch_array($ambildata)){
                $warna = ($no%2==1)?"white":"#eee";
                echo"
                
                <tr bgcolor='$warna'>
                <td>$no</td>
                <td>$tampil[nama_mahasiswa]</td>
                <td>$tampil[nim_mahasiswa]</td>
                <td>$tampil[jenis_kelamin]</td>
                <td>$tampil[no_hp]</td>
                <td>$tampil[alamat]</td>
                </tr>  
                ";
                $no++;
            }
            ?>
        </table>
        <button><a href="printdataMahasiswa.php">PRINT</a></button>
        <style>
            button{
                margin-top: 100px;
                margin-left: -780px;
                width: 70px;
                height: 30px;
            }
        </style>
    </div>
</body>
</html>