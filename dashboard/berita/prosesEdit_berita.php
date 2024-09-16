<?php
include "../koneksi.php";
$idberita = $_GET['id_berita'];
$idkategori = $_POST['id_kategori'];
$jdlBerita = $_POST['jdl_berita'];
$isiBerita = $_POST['isi_berita'];
$tgl = $_POST['tgl_berita'];

$nmFile = $_FILES['pic']['name'];
$nmSementara = $_FILES['pic']['tmp_name'];

// logika jika gambar yg di callback di form edit tidak melakukan pengeditan
$query = mysqli_query($connect, "SELECT * FROM tb_berita WHERE id_berita='$idberita'");
$data = mysqli_fetch_assoc($query);

if ($nmFile != "") {
    $pathPIClama = '../assets/img/upload/' . $data['pic'];
    $trUpload = move_uploaded_file($nmSementara, '../assets/img/upload/' . $nmFile);

    if ($trUpload) {
        if (!empty($data['pic']) && file_exists($pathPIClama)) {
            unlink($pathPIClama);
        }
        $gambar = $nmFile;
    } else {
        echo "<script>
    alert('Data gagal di Edit')
    window.location.href='tambah_berita.php'
    </script>";
        exit;
    }
} else {
    $gambar = $data['pic'];
}

$tambah = mysqli_query($connect, "UPDATE tb_berita 
SET  id_kategori ='$idkategori',
jdl_berita ='$jdlBerita',
isi_berita ='$isiBerita',
pic ='$gambar',
tgl_berita ='$tgl' 
WHERE id_berita= '$idberita'");

if ($tambah) {
    echo "<script>
    alert('Data berhasil di Edit')
    window.location.href='tampil_berita.php'
    </script>";
} else {
    echo "<script>
    alert('Data gagal di Edit')
    window.location.href='tambah_berita.php'
    </script>";
}
