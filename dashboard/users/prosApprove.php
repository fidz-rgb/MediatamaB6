<?php
include "../koneksi.php";
if (isset($_GET['userid'])) {
    $userid = $_GET['userid'];

    // Update status alumni menjadi disetujui
    $sql = "UPDATE users SET is_approved = 1 WHERE user_id = $userid";

    if ($connect->query($sql) === TRUE) {
        // echo "Alumni berhasil disetujui.";
        echo "<script>
    alert('Akun berhasil disetujui!')
    window.location.href='approve_user.php'
    </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}

$connect->close();
?>
