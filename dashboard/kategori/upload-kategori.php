<?php 
include "../../auth/util.php";
include "../layout/header.php"; 
?>

<!-- input form -->
<form action="tambah_kategori.php" method="post" enctype="multipart/form-data" class="mx-auto my-5 w-50">
  <h2 style="text-align: center;">Input Kategori</h2>
  <div class="mb-3">
    <label for="exampleInput" class="form-label">Nama Kategori</label>
    <input type="text" class="form-control border border-dark-subtle border-2" name="nm_kategori">
  </div>
  <div class="mb-3">
    <label for="exampleInput" class="form-label">Deskripsi Kategori</label>
    <input type="text" class="form-control border border-dark-subtle border-2" name="deskripsi">
  </div>
  <button type="submit" class="btn btn-primary" style="background-color:#B0B435; border:none;">Submit</button>
</form>
<?php include "../layout/footer.php"; ?>