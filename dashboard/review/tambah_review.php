<?php 
// var_dump($_POST);
// exit();
include "../koneksi.php";
$produkid = $_POST['product_id'];
$userid = $_POST['user_id'];
$konten = $_POST['content'];
$rating = $_POST['rating'];

$tambah = mysqli_query($connect,"INSERT INTO review
(product_id,user_id,content,rating) VALUES 
('$produkid','$userid','$konten','$rating')");
if($tambah){
    echo "<script>
    alert('Data berhasil ditambahkan')
    window.location.href='tampil_review.php'
    </script>";
}else{
    echo "<script>
    alert('Data gagal ditambahkan')
    window.location.href='tambah_review.php'
    </script>";
}