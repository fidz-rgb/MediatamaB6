<?php
include "../koneksi.php";

if(isset($_GET['id_berita']))
$id_berita = $_GET['id_berita'];

$hapus = mysqli_query($connect, "DELETE FROM tb_berita WHERE id_berita='$id_berita' ");
if($hapus){
    echo "<script>
    alert('Data berhasil di Hapus')
    window.location.href='tampil_berita.php'
    </script>";
}else{
    echo "<script>
    alert('Data gagal di Hapus')
    window.location.href='tampil_berita.php'
    </script>";
}
?>