<?php
include "../utility/conn.php";
$nama = $_POST['fullname'];
$kontak = $_POST['kontak'];
$alamat = $_POST['alamat'];
$user = $_POST['username'];
$email = $_POST['email'];
$role = $_POST['role'];
$pass = $_POST['password'];

// Cek apakah username sudah ada di database
$cek_username = mysqli_query($connect, "SELECT * FROM users WHERE username = '$user'");

if (mysqli_num_rows($cek_username) > 0) {
    // Jika username sudah terdaftar, tampilkan pesan kesalahan
    echo "<script>
    alert('Username sudah terdaftar, silakan gunakan username lain!');
    window.location.href='register.php'; // Arahkan kembali ke halaman registrasi
    </script>";
} else {
    // Jika username belum terdaftar, lanjutkan proses penyimpanan
    $hashed_pass = password_hash($pass, PASSWORD_DEFAULT); // Hashing password

$tambah = mysqli_query($connect, "INSERT INTO users(fullnm,kontak,alamat,username,email,role,pwd) VALUES ('$nama','$kontak','$alamat','$user','$email','$role','$hashed_pass')");
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
}
?>