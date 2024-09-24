<?php
session_start();
include "../../auth/util.php";
include "../layout/header.php";
?>
<?php include "../koneksi.php";

$id_kategori = $_GET['id_kategori'];
$cari = mysqli_query($connect, "SELECT * FROM categories WHERE category_id = '$id_kategori'");
$item = mysqli_fetch_array($cari);
?>
<!-- input form -->
<form action="prosesEdit_kategori.php?id_kategori=<?= $item['category_id'] ?>" method="post" enctype="multipart/form-data" class="mx-auto my-5 w-50">
    <h2 style="text-align: center;">Edit Kategori</h2>
    <div class="mb-3">
        <label for="exampleInput" class="form-label">Nama Kategori</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="nm_kategori" value="<?= $item['nm_category'] ?>">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Kategori</label>
        <textarea class="form-control border border-dark-subtle border-2" id="exampleFormControlTextarea1" rows="3" name="deskripsi"><?= $item['desc_category'] ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php include "../layout/footer.php"; ?>