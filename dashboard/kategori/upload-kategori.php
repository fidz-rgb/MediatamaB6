<?php include "../layout/header.php"; ?>

<!-- input form -->
<form action="tambah_kategori.php" method="post" enctype="multipart/form-data" class="mx-auto my-5 w-50">
  <h2 style="text-align: center;">Input Kategori</h2>
  <div class="mb-3">
    <label for="exampleInput" class="form-label">Nama Kategori</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="nm_kategori">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php include "../layout/footer.php"; ?>