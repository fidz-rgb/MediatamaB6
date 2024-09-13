<?php
include "../utility/conn.php";
$nama = $_POST['nama'];
$user = $_POST['username'];
$pass = $_POST['password'];

$tambah = mysqli_query($connect, "INSERT INTO users(nm_lengkap,username,pwd) VALUES ('$nama','$user','$pass')");
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