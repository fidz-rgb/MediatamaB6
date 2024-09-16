<?php 
include "../koneksi.php";
$idkategori = $_POST['id_kategori'];
$jdlBerita = $_POST['jdl_berita'];
$isiBerita = $_POST['isi_berita'];
$nmFile = $_FILES['pic']['name'];
$nmSementara = $_FILES['pic']['tmp_name'];
$trUpload = move_uploaded_file($nmSementara, '../assets/img/upload/' .$nmFile);
$tgl = $_POST['tgl_berita'];
$tambah = mysqli_query($connect,"INSERT INTO tb_berita(id_kategori,jdl_berita,isi_berita,pic,tgl_berita) VALUES ('$idkategori','$jdlBerita','$isiBerita','$nmFile','$tgl')");
if($tambah){
    echo "<script>
    alert('Data berhasil ditambahkan')
    window.location.href='tampil_berita.php'
    </script>";
}else{
    echo "<script>
    alert('Data gagal ditambahkan')
    window.location.href='tambah_berita.php'
    </script>";
}