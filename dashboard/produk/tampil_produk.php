<?php
session_start();
// penambahan authentication ini membuat space tambahan dikepala tampilan,kenapa ? gk tau alasannya
include "../../auth/util.php";
include "../koneksi.php";
include "../layout/header.php";
if (!isset($_SESSION['islogin']) || $_SESSION['islogin'] !== true) {
    echo "<script>
    alert('Anda harus login sebagai Admin/Alumni untuk masuk!');
    window.location.href='../../auth/login.php';
    </script>";
}
?>
<?php
$no = 1;
$id = $_SESSION['user_id'];
$role = $_SESSION['role']; // Mendapatkan role dari session

// Pagination
$limit = 10; // Jumlah data per halaman
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1; // Halaman saat ini, default halaman 1
$start = ($page - 1) * $limit; // Offset data

// Hitung total data
if ($role === 'admin') {
    $result = mysqli_query($connect, "SELECT COUNT(*) AS total FROM products");
} else {
    $result = mysqli_query($connect, "SELECT COUNT(*) AS total FROM products WHERE user_id = $id");
}
$row = mysqli_fetch_assoc($result);
$totalData = $row['total']; // Total jumlah data
$totalPages = ceil($totalData / $limit); // Total halaman yang tersedia

// Ambil data sesuai halaman dan limit
if ($role === 'admin') {
    $produk = mysqli_query($connect, "SELECT * FROM products JOIN categories ON products.category_id=categories.category_id LIMIT $start, $limit");
} else {
    $produk = mysqli_query($connect, "SELECT * FROM products JOIN categories ON products.category_id=categories.category_id WHERE products.user_id = $id LIMIT $start, $limit");
}
?>

<!-- Tabel Produk -->
<table class="table table-bordered mx-auto" style="width: 950px;">
    <div class="list-btn d-flex m-3" style="border-bottom: 2px solid grey;">
        <h1>Produk</h1>
    </div>
    <thead class="table" style="text-align: center; background-color:#B3B575;">
        <tr>
            <th scope="col">#</th>
            <th scope="col">User ID</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Harga</th>
            <th scope="col">Stok</th>
            <th scope="col">Kategori Produk</th>
            <th scope="col">Gambar</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($row = mysqli_fetch_array($produk)) {
        ?>
            <tr>
                <th scope="row"><?= $no++ ?></th>
                <td class="w-2"><?= $row['user_id'] ?></td>
                <td class="text-break"><?= $row['nm_product'] ?></td>
                <td class="text-break" style="width:500px; text-align: justify;">
                    <div style="max-height: 150px; overflow-y: auto;">
                        <?= $row['desc_product'] ?>
                    </div>
                </td>
                <td class="text-break"><?= $row['price'] ?></td>
                <td class="text-break"><?= $row['stock_quantity'] ?></td>
                <td class="text-break"><?= $row['nm_category'] ?></td>
                <td><img src="../assets/img/upload/<?= $row['image'] ?>" style="width: 200px; height:100px;" alt=""></td>
                <td style="text-align: center;">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-primary"><a href="edit_produk.php?id_produk=<?= $row['product_id'] ?>" style="text-decoration: none; color:white;">Sunting</a></button>
                        <button type="button" class="btn btn-danger"><a href="hapus_produk.php?id_produk=<?= $row['product_id'] ?>" style="text-decoration: none; color:white;">Hapus</a></button>
                    </div>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<!-- Pagination -->
<div class="mb-2" style="border-bottom: 2px solid grey;"></div>
<nav aria-label="Page navigation">
    <ul class="pagination justify-content-center">
        <?php if ($page > 1): ?>
            <li class="page-item">
                <a class="page-link" href="?page=<?= $page - 1 ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <li class="page-item <?= ($i == $page) ? 'active' : '' ?>">
                <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
            </li>
        <?php endfor; ?>

        <?php if ($page < $totalPages): ?>
            <li class="page-item">
                <a class="page-link" href="?page=<?= $page + 1 ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        <?php endif; ?>
    </ul>
</nav>

<?php include "../layout/footer.php"; ?>