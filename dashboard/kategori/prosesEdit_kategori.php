<?php
include "../koneksi.php";
$id_kategori = $_GET ['id_kategori'];
$nm_kategori = $_POST['nm_kategori'];
$update = mysqli_query($connect,"UPDATE tb_kategori SET nm_kategori ='$nm_kategori' WHERE id_kategori=$id_kategori");
if($update){
    echo "<script>
    alert('Data berhasil di Edit')
    window.location.href='tampil_kategori.php'
    </script>";
}else{
    echo "<script>
    alert('Data gagal di Edit')
    window.location.href='edit_kategori.php?id_kategori=$id_kategori'
    </script>";
}