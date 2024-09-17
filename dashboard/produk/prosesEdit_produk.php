<?php
include "../koneksi.php";

$idproduk = $_POST['id_produk'];
$name = $_POST['nm_produk'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$kategori = $_POST['kategori'];
$nmFile = $_FILES['pic']['name'];
$nmSementara = $_FILES['pic']['tmp_name'];

// logika jika gambar yg di callback di form edit tidak melakukan pengeditan
$query = mysqli_query($connect, "SELECT * FROM products WHERE product_id='$idproduk'");
$data = mysqli_fetch_assoc($query);

if ($nmFile != "") {
    $pathPIClama = '../assets/img/upload/' . $data['image'];
    $trUpload = move_uploaded_file($nmSementara, '../assets/img/upload/' . $nmFile);

    if ($trUpload) {
        if (!empty($data['image']) && file_exists($pathPIClama)) {
            unlink($pathPIClama);
        }
        $gambar = $nmFile;
    } else {
        echo "<script>
    alert('Data gagal di Edit')
    window.location.href='tambah_produk.php'
    </script>";
        exit;
    }
} else {
    $gambar = $data['pic'];
}

$tambah = mysqli_query($connect, "UPDATE products 
SET  name ='$name',
description = '$deskripsi',
price = '$harga',
stock_quantity = '$stok',
category_id ='$kategori',
image ='$gambar'
WHERE product_id= '$idproduk'");

if ($tambah) {
    echo "<script>
    alert('Data berhasil di Edit')
    window.location.href='tampil_produk.php'
    </script>";
} else {
    echo "<script>
    alert('Data gagal di Edit')
    window.location.href='tambah_produk.php'
    </script>";
}
