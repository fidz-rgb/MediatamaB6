<?php
include "../koneksi.php";
//pembuatan variabel ini diisi dengan nilai 'name' dari element input di html
$nm_kategori = $_POST['nm_kategori'];
$deskripsi = $_POST['deskripsi'];
//ini merujuk langsung sesuai penamaan tabel/field yg dibuat di db
$tambah = mysqli_query($connect,"INSERT INTO categories(nm_category,desc_category) VALUES ('$nm_kategori','$deskripsi')");
if($tambah){
    echo "<script>
    alert('Data berhasil ditambahkan')
    window.location.href='tampil_kategori.php'
    </script>";
}else{
    echo "<script>
    alert('Data gagal ditambahkan')
    window.location.href='tambah_kategori.php'
    </script>";
}