<?php include "../layout/header.php"; ?>

<!-- input form -->
<form action="tambah_produk.php" method="post" enctype="multipart/form-data" class="mx-auto my-5 w-50">
  <h2 style="text-align: center;">Input Produk</h2>
  <div class="mb-3">
    <label for="" class="form-label">Nama Produk</label>
    <input type="text" class="form-control" id="" name="nm_produk">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"></textarea>
  </div>
  <div class="row">
    <div class="col mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Harga</label>
      <input type="text" class="form-control" id="" name="harga">
    </div>
    <div class="col mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Stok</label>
      <input type="text" class="form-control" id="" name="stok">
    </div>
  </div>
  <!-- <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Kategori</label>
    <input type="text" class="form-control" name="kategori">
  </div> -->

  <div class="mb-3">
    <label for="" class="form-label">Kategori Berita</label>
    <select name="kategori" id="" class="form-control">
      <option selected disabled value="">Pilih...</option>
      <?php
      include "../koneksi.php";
      $kategori = mysqli_query($connect, "SELECT * FROM categories ORDER BY category_id DESC");
      while ($item = mysqli_fetch_array($kategori)) {
      ?>
        <option value="<?= $item['category_id'] ?>"><?= $item['name'] ?></option>
      <?php } ?>
    </select>
  </div>
  <div class="mb-3">
    <label for="formFile" class="form-label">Foto</label>
    <input class="form-control" type="file" id="formFile" name="image">
  </div>
  <div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
<?php include "../layout/footer.php"; ?>