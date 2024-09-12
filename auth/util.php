<?php
session_start();
if(!$_SESSION["islogin"]){
    echo "<script>
alert('Login terlebih dahulu')
window.location.href='../auth/login.php'
</script>";
}
?>