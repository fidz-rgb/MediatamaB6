<?php 
include "../../auth/util.php";
include "../layout/header.php"; 
?>

<!-- input form -->
<form action="tambah_produk.php" method="post" enctype="multipart/form-data" class="mx-auto my-5 w-50">
  <h2 style="text-align: center;">Input Produk</h2>
  <div class="mb-3">
    <label for="" class="form-label">Nama Produk</label>
    <input type="text" class="form-control border border-dark-subtle border-2" id="" name="nm_produk">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
    <textarea class="form-control border border-dark-subtle border-2" id="exampleFormControlTextarea1" rows="3" name="deskripsi"></textarea>
  </div>
  <div class="row">
    <div class="col mb-3">
      <label for="exampleInput" class="form-label">Harga</label>
      <input type="text" class="form-control border border-dark-subtle border-2" id="" name="harga">
    </div>
    <div class="col mb-3">
      <label for="exampleInput" class="form-label">Stok</label>
      <input type="text" class="form-control border border-dark-subtle border-2" id="" name="stok">
    </div>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Kategori Produk</label>
    <select name="kategori" id="" class="form-control border border-dark-subtle border-2">
      <option selected disabled value="">Pilih...</option>
      <?php
      include "../koneksi.php";
      $kategori = mysqli_query($connect, "SELECT * FROM categories ORDER BY category_id DESC");
      while ($item = mysqli_fetch_array($kategori)) {
      ?>
        <option value="<?= $item['category_id'] ?>"><?= $item['nm_category'] ?></option>
      <?php } ?>
    </select>
  </div>
  <div class="mb-3">
    <label for="formFile" class="form-label">Foto</label>
    <input class="form-control border border-dark-subtle border-2" type="file" id="formFile" name="image">
  </div>
  <div>
    <button type="submit" class="btn btn-primary" style="background-color:#B0B435; border:none;">Submit</button>
  </div>
</form>
<?php include "../layout/footer.php"; ?>