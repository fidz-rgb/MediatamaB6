<?php
include "../koneksi.php";

if(isset($_GET['id_produk']))
$id_produk = $_GET['id_produk'];

$hapus = mysqli_query($connect, "DELETE FROM tb_produk WHERE id_produk='$id_produk' ");
if($hapus){
    echo "<script>
    alert('Data berhasil di Hapus')
    window.location.href='tampil_produk.php'
    </script>";
}else{
    echo "<script>
    alert('Data gagal di Hapus')
    window.location.href='tampil_produk.php'
    </script>";
}
?>