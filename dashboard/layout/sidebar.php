<?php
$username = isset($_SESSION['username']) ? $_SESSION['username'] : null;
$role = isset($_SESSION['role']) ? $_SESSION['role'] : null;
?>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading" style="color: #B0B435;">Home</div>
                    <a class="nav-link" href="../home/index.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading" style="color: #B0B435;">Input Data</div>

                    <!-- users -->
                    <?php
                    if ($role !== 'alumni') {

                        echo '
                    <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#collapseUser" aria-expanded="false" aria-controls="collapseUser">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Users
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseUser" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="../users/approve_user.php">Hak Akses User</a>
                            <a class="nav-link" href="../users/tampil_user.php">Tampil Users</a>
                            <a class="nav-link" href="../users/upload-user.php">Tambah Users</a>
                        </nav>
                    </div>';
                    } ?>
                    <!-- end users -->
                    <!-- produk -->
                    <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#collapseProduk" aria-expanded="false" aria-controls="collapseProduk">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Produk
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseProduk" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="../produk/tampil_produk.php">Tampil Produk</a>
                            <a class="nav-link" href="../produk/upload-produk.php">Tambah Produk</a>
                        </nav>
                    </div>
                    <!-- end produk -->
                    <!-- kategori -->
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
                    <!-- end kategori -->
                    <!-- review -->
                    <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#collapseReview" aria-expanded="false" aria-controls="collapseReview">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Review
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseReview" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="../review/tampil_review.php">Tampil Review</a>
                            <a class="nav-link" href="../review/upload-review.php">Tambah Review</a>
                        </nav>
                    </div>
                    <!-- end review -->
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <?php
                if ($username) {
                    echo "<div class='small'>Logged in as: <b>$role</b></div>";
                } ?>
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">