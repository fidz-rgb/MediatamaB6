<?php
// session_start();
if(!$_SESSION['islogin']){
    echo "<script>
alert('Login terlebih dahulu')
window.location.href='../../auth/login.php';
</script>";
} else if($_SESSION['role'] === "user"){
    echo "<script>
alert('role anda tidak diizinkan!')
window.location.href='../../home/index.php';
</script>";
}
?>