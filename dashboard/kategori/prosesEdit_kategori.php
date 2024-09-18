<?php
include "../koneksi.php";
$id_kategori = $_GET ['id_kategori'];
$nm_kategori = $_POST['nm_kategori'];
$deskripsi = $_POST['deskripsi'];
$update = mysqli_query($connect,"UPDATE categories SET 
nm_category ='$nm_kategori',
desc_category = '$deskripsi' 
WHERE category_id=$id_kategori");
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