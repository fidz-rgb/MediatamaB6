<?php 
include "../../auth/util.php";
include "../layout/header.php"; 
?>
<table class="table table-bordered w-50 mx-auto">
  <div class="list-btn d-flex m-3" style="border-bottom: 2px solid grey;">
    <h1>Kategori Produk</h1>
    <!-- <div class="ms-auto">
      <button type="button" class="btn btn-primary ms-auto"><a href="upload-kategori.php" style="text-decoration: none; color: white;">Tambah</a></button>
    </div> -->
  </div>
  <thead class="table-primary " style="text-align: center;">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Kategori</th>
      <th scope="col">Deskripsi</th>
      <th scope="col-1">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include "../koneksi.php";
    $no = 1;
    $kategori = mysqli_query($connect, "SELECT * FROM categories ORDER BY category_id DESC");
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

<?php include "../layout/footer.php"; ?>