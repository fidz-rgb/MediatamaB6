<?php include "../layout/header.php"; ?>

<!-- input form -->
<form action="tambah_berita.php" method="post" enctype="multipart/form-data" class="mx-auto my-5 w-50">
  <h2 style="text-align: center;">Input Berita</h2>
  <div class="mb-3">
    <label for="" class="form-label">Judul Berita</label>
    <input type="text" class="form-control" id="" name="jdl_berita">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Kategori Berita</label>
    <select name="id_kategori" id="" class="form-control">
      <option selected disabled value="">Pilih...</option>
      <?php
      include "../koneksi.php";
      $kategori = mysqli_query($connect, "SELECT * FROM tb_kategori ORDER BY id_kategori DESC");
      while ($item = mysqli_fetch_array($kategori)) {
      ?>
        <option value="<?= $item['id_kategori'] ?>"><?= $item['nm_kategori'] ?></option>
      <?php } ?>
    </select>
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Konten</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="isi_berita"></textarea>
  </div>
  <div class="mb-3">
    <label for="formFile" class="form-label">Foto</label>
    <input class="form-control" type="file" id="formFile" name="pic">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Tanggal Berita</label>
    <input type="date" class="form-control" id="" name="tgl_berita">
  </div>
  <div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
<?php include "../layout/footer.php"; ?>