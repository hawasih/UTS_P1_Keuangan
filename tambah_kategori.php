<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kategori</title>
</head>
<?php
    //Koneksi ke database
    include 'koneksi.php';
    //Menangkap data yang dikirim dari form
    if(!empty($_POST['save'])){
        $Nama = $_POST['nama_kategori'];
        //menginput data ke database
        $a = mysqli_query($koneksi, "INSERT INTO kategori (nama_kategori) VALUES ('$Nama')");
        if($a){
            //mengalihkan ke halaman kembali
            header("location:tampilan_kategori.php");
        }else{
            echo mysqli_error($koneksi);
        }
    }
?>
<body>
    <h2>Pemograman 1 2023</h2>
    <br>
    <a href="http://localhost/keuangan/">Kembali</a>
    <br>
    <h3>TAMBAH DATA KATEGORI</h3>
    <form method="POST">
        <table>
            <tr>
                <td>Nama Kategori</td>
                <td><input type="text" name="nama_kategori"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="save"></td>
            </tr>
        </table>
    </form>
</body>
</html>