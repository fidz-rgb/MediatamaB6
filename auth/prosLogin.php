<?php
include "../utility/conn.php";

$user = $_POST['username'];
$pass = $_POST['password'];
// var_dump($_POST);
// exit(); //cara cek apakah sebuah proses berhasil mengambil nilai atau tidak
mysqli_query($connect, "SELECT * FROM users WHERE username = '$user' AND pwd = '$pass' ");
if(mysqli_affected_rows($connect) > 0)
{
    session_start();
    $_SESSION['islogin'] = true;
    $_SESSION['username'] = $user;
    echo "<script>
    alert('Login berhasil')
    window.location.href='testlogin.php'
    </script>";
} else {
    echo "<script>
    alert('Login gagal/user tidak ada!')
    window.location.href='login.php'
    </script>";
}

?>