<?php
session_start();
include "../../auth/util.php"; 
// penambahan authentication ini membuat space tambahan dikepala tampilan,kenapa ? gk tau alasannya
//ternyata alasannya karna di file util.php ada pemanggilan sesi dan krna util.php di includekan ke tampi_user.php yg mana ada sesi yg dimulai jg makanya trjadi error hasil dari sesi yg dobel
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
include "../koneksi.php";
$no = 1;

// Pagination
$limit = 10; // Jumlah data per halaman
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1; // Halaman saat ini, default halaman 1
$start = ($page - 1) * $limit; // Offset data

// Hitung total data
$result = mysqli_query($connect, "SELECT COUNT(*) AS total FROM users");
$row = mysqli_fetch_assoc($result);
$totalData = $row['total']; // Total jumlah data
$totalPages = ceil($totalData / $limit); // Total halaman yang tersedia

// Ambil data sesuai halaman dan limit
$users = mysqli_query($connect, "SELECT * FROM users LIMIT $start, $limit");
?>

<!-- Tabel Users -->
<table class="table table-bordered mx-auto" style="width:950px;">
    <div class="list-btn d-flex m-3" style="border-bottom: 2px solid grey;">
        <h1>Users</h1>
    </div>
    <thead class="table" style=" text-align:center; background-color:#B3B575;">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Kontak</th>
            <th scope="col">Alamat</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($item = mysqli_fetch_array($users)) {
        ?>
            <tr>
                <th scope="row"><?= $no++ ?></th>
                <td class="text-break"><?= $item['fullnm'] ?></td>
                <td class="text-break"><?= $item['kontak'] ?></td>
                <td class="text-break"><?= $item['alamat'] ?></td>
                <td class="text-break"><?= $item['username'] ?></td>
                <td class="text-break"><?= $item['email'] ?></td>
                <td class="" style="width: fit-content;"><?= $item['role'] ?></td>
                <td class="" style="width: fit-content;">
                    <?= ($item['role'] == 'admin') ? 'Super User' : 
                    (($item['role'] == 'user') ? 'User Normal' : 
                    (($item['is_approved'] == 1) ? 'Approved' : 'Pending')); ?>
                </td>

                <td style="text-align: center;">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-danger"><a href="hapus_user.php?iduser=<?= $item['user_id'] ?>" style="text-decoration: none; color:white;">Hapus</a></button>
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