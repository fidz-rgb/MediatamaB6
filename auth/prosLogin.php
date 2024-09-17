<?php 
session_start();
include "../utility/conn.php";

$user = $_POST['username'];
$pass = $_POST['password'];

// Query hanya untuk mengambil data pengguna berdasarkan username
$login = mysqli_query($connect, "SELECT * FROM users WHERE username = '$user'");
$cek = mysqli_num_rows($login);

if ($cek > 0) {
    $data = mysqli_fetch_assoc($login);

    // Verifikasi password input dengan hash yang ada di database
    if (password_verify($pass, $data['pwd'])) {
        // Jika password benar, set session dan arahkan berdasarkan role
        $_SESSION['username'] = $user;
        $_SESSION['role'] = $data['role'];

        if ($data['role'] === "admin") {
            $_SESSION['islogin'] = true;
            echo "<script>
            alert('Login berhasil sebagai ADMIN');
            window.location.href='../home/index.php';
            </script>";
        } else if ($data['role'] === "alumni") {
            // Cek apakah alumni sudah disetujui oleh admin
            if ($data['is_approved'] == 1) {
                $_SESSION['islogin'] = true;
                echo "<script>
                alert('Login berhasil sebagai ALUMNI');
                window.location.href='../home/index.php';
                </script>";
            } else {
                // Jika alumni belum disetujui, tampilkan pesan
                echo "<script>
                alert('Akun Anda belum disetujui oleh admin. Harap tunggu persetujuan.');
                window.location.href='login.php';
                </script>";
            }
        } else if ($data['role'] === "user") {
            $_SESSION['islogin'] = true;
            echo "<script>
            alert('Login berhasil sebagai USER');
            window.location.href='../home/index.php';
            </script>";
        } else {
            echo "<script>
            alert('Login gagal / role tidak ditemukan!');
            window.location.href='login.php';
            </script>";
        }
    } else {
        // Jika password salah, tampilkan pesan kesalahan
        echo "<script>
        alert('Password salah!');
        window.location.href='login.php';
        </script>";
    }
} else {
    // Jika username tidak ditemukan
    echo "<script>
    alert('Login gagal / username tidak ditemukan!');
    window.location.href='login.php';
    </script>";
}
?>

