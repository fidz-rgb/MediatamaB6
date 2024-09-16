<?php
include "../koneksi.php";
$user = mysqli_query($connect, "SELECT * FROM tb_user ");
while ($item = mysqli_fetch_array($user)) {
?>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav" >
                        <div class="sb-sidenav-menu-heading">Home</div>
                        <a class="nav-link" href="../home/index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Input Berita</div>
                        <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#collapseBerita" aria-expanded="false" aria-controls="collapseBerita">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Berita
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseBerita" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="../berita/tampil_berita.php">Tampil Berita</a>
                                <a class="nav-link" href="../berita/upload-berita.php">Tambah Berita</a>
                            </nav>
                        </div>
                        <div class="sb-sidenav-menu-heading">Input Kategori</div>
                        <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#collapseKategori" aria-expanded="false" aria-controls="collapseKategori">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Kategori
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseKategori" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="../kategori/tampil_kategori.php">Tampil Kategori</a>
                                <a class="nav-link" href="../kategori/upload-kategori.php">Tambah Kategori</a>
                            </nav>
                        </div>


                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as: <b><?= $item['username'] ?></b></div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
        <?php } ?>