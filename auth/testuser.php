<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user page</title>
</head>

<body>
    <?php
    session_start();

    // cek apakah yang mengakses halaman ini sudah login
    if ($_SESSION['role'] == "") {
        echo "<script>
    alert('Login gagal!')
    window.location.href='login.php'
    </script>";
    }

    ?>
    <h1>Halaman User</h1>
    <p>Halo <b><?= $_SESSION['username']; ?></b> Anda telah login sebagai <b><?= $_SESSION['role']; ?></b>.</p>
    <a href="logout.php">LOGOUT</a>

</body>

</html>