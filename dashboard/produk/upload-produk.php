<?php
session_start();
include "../koneksi.php";
// include "../../auth/util.php";
include "../layout/header.php";
if (!isset($_SESSION['islogin']) || $_SESSION['islogin'] !== true) {
  echo "<script>
  alert('Anda harus login sebagai Admin/Alumni untuk masuk!');
  window.location.href='../../auth/login.php';
  </script>";
}
?>

<!-- input form -->
<form action="tambah_produk.php" method="POST" enctype="multipart/form-data" class="mx-auto my-5 w-50">
  <h2 class="mb-4" style="text-align: center;">Input Produk</h2>
  <div class="row">
    <div class="col-3 mb-3">
      <label for="" class="form-label">User ID</label>
      <?php
      $user = $_SESSION['username'];
      $query = mysqli_query($connect, "SELECT * FROM users WHERE username = '$user'");
      while ($nama = mysqli_fetch_array($query)) {
      ?>
        <input disabled type="text" class="form-control border border-dark-subtle border-2" id="" name="user_id" value="<?= $nama['user_id'] ?>">
        <input hidden type="text" class="form-control border border-dark-subtle border-2" id="" name="user_id" value="<?= $nama['user_id'] ?>">
      <?php } ?>
    </div>
    <div class="col mb-3">
      <label for="" class="form-label">Nama Produk</label>
      <input type="text" class="form-control border border-dark-subtle border-2" id="" name="nm_produk">
    </div>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Kategori Produk</label>
    <select name="kategori" id="" class="form-control border border-dark-subtle border-2">
      <option selected disabled value="">Pilih...</option>
      <?php
      $kategori = mysqli_query($connect, "SELECT * FROM categories ORDER BY category_id DESC");
      while ($item = mysqli_fetch_array($kategori)) {
      ?>
        <option value="<?= $item['category_id'] ?>"><?= $item['nm_category'] ?></option>
      <?php } ?>
    </select>
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
    <textarea class="form-control border border-dark-subtle border-2" id="exampleFormControlTextarea1" rows="3" name="deskripsi"></textarea>
  </div>
  <div class="row">
    <!-- <div class="col mb-3">
      <label for="exampleInput" class="form-label">Harga</label>
      <input type="text" class="form-control border border-dark-subtle border-2" id="" name="harga">
    </div> -->
    <div class="col mb-3">
      <label for="exampleInput" class="form-label">Harga</label>
      <div class="input-group">
        <span class="input-group-text">Rp.</span>
        <input type="text" class="form-control border border-dark-subtle border-2" aria-label="Amount (to the nearest dollar)" name="harga">
        <span class="input-group-text">.00</span>
      </div>
    </div>
    <div class="col-4 mb-3">
      <!-- <label for="exampleInput" class="form-label">Stok</label>
      <input type="text" class="form-control border border-dark-subtle border-2" id="" name="stok"> -->
      <label for="exampleInput" class="form-label">Stok</label>
      <div class="input-group">
        <input type="text" class="form-control border border-dark-subtle border-2" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2" name="stok">
        <span class="input-group-text" id="basic-addon2">Kg</span>
      </div>
    </div>
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