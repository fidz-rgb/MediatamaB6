<?php 
include "../koneksi.php";
$username = $_SESSION['username'];
$name = $_POST['nm_produk'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$kategori = $_POST['kategori'];
$nmFile = $_FILES['image']['name'];
$nmSementara = $_FILES['image']['tmp_name'];
$trUpload = move_uploaded_file($nmSementara, '../assets/img/upload/' .$nmFile);

$tambah = mysqli_query($connect,"INSERT INTO products
(user_id,nm_product,desc_product,price,stock_quantity,category_id,image) VALUES 
('$username','$name','$deskripsi','$harga','$stok','$kategori','$nmFile')");
if($tambah){
    echo "<script>
    alert('Data berhasil ditambahkan')
    window.location.href='tampil_produk.php'
    </script>";
}else{
    echo "<script>
    alert('Data gagal ditambahkan')
    window.location.href='tambah_produk.php'
    </script>";
}