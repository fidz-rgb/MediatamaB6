<?php
include "../koneksi.php";

if(isset($_GET['id_kategori']))
$id_kategori = $_GET['id_kategori'];

$hapus = mysqli_query($connect, "DELETE FROM tb_kategori WHERE id_kategori='$id_kategori' ");
if($hapus){
    echo "<script>
    alert('Data berhasil di Hapus')
    window.location.href='tampil_kategori.php'
    </script>";
}else{
    echo "<script>
    alert('Data gagal di Hapus')
    window.location.href='tampil_kategori.php'
    </script>";
}
?>