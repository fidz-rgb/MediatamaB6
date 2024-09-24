<?php 
session_start();
include "../../auth/util.php";
include "../layout/header.php"; 
?>

<?php
include "../koneksi.php";
$no = 1;

// Pagination
$limit = 10; // Jumlah data per halaman
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1; // Halaman saat ini, default halaman 1
$start = ($page - 1) * $limit; // Offset data

// Hitung total data
$result = mysqli_query($connect, "SELECT COUNT(*) AS total FROM categories");
$row = mysqli_fetch_assoc($result);
$totalData = $row['total']; // Total jumlah data
$totalPages = ceil($totalData / $limit); // Total halaman yang tersedia

// Ambil data sesuai halaman dan limit
$kategori = mysqli_query($connect, "SELECT * FROM categories ORDER BY category_id DESC LIMIT $start, $limit");
?>

<!-- Tabel Kategori -->
<table class="table table-bordered w-75 mx-auto">
  <div class="list-btn d-flex m-3" style="border-bottom: 2px solid grey;">
    <h1>Kategori Produk</h1>
  </div>
  <thead class="table " style=" text-align: center; background-color:#B3B575;">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Kategori</th>
      <th scope="col">Deskripsi</th>
      <th scope="col-1">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while ($item = mysqli_fetch_array($kategori)) {
    ?>
      <tr>
        <th scope="row"><?= $no++ ?></th>
        <td><?= $item['nm_category'] ?></td>
        <td><?= $item['desc_category'] ?></td>
        <td style="text-align: center;">
          <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-primary"><a href="edit_kategori.php?id_kategori=<?= $item['category_id'] ?>" style="text-decoration: none; color:white;">Sunting</a></button>
            <button type="button" class="btn btn-danger"><a href="hapus_kategori.php?id_kategori=<?= $item['category_id'] ?>" style="text-decoration: none; color:white;">Hapus</a></button>
          </div>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>

<!-- Pagination -->
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