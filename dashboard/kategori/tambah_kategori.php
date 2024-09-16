<?php
include "../koneksi.php";
//pembuatan variabel ini diisi dengan nilai 'name' dari element input di html
$nm_kategori = $_POST['nm_kategori'];
//insert into tb_kategori(nm_kategori) : ini merujuk langsung sesuai penamaan tabel/field yg dibuat di db
$tambah = mysqli_query($connect,"INSERT INTO tb_kategori(nm_kategori) VALUES ('$nm_kategori')");
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