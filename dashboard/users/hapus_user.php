<?php
include "../koneksi.php";

if(isset($_GET['iduser']))
$iduser = $_GET['iduser'];

$hapus = mysqli_query($connect, "DELETE FROM users WHERE user_id='$iduser' ");
if($hapus){
    echo "<script>
    alert('Data berhasil di Hapus')
    window.location.href='tampil_user.php'
    </script>";
}else{
    echo "<script>
    alert('Data gagal di Hapus')
    window.location.href='tampil_user.php'
    </script>";
}
?>