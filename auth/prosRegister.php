<?php
include "../koneksi.php";
$nama = $_POST['nama'];
$user = $_POST['username'];
$pass = $_POST['password'];
$tgl = $_POST['tgl_lahir']; 

$tambah = mysqli_query($connect, "INSERT INTO tb_user(nm_lengkap,username,pwd,tgl_lahir) VALUES ('$nama','$user','$pass','$tgl')");
if($tambah){
    echo "<script>
    alert('Data berhasil ditambahkan')
    window.location.href='login.php'
    </script>";
}else{
    echo "<script>
    alert('Data gagal ditambahkan')
    window.location.href='register.php'
    </script>";
}
?>