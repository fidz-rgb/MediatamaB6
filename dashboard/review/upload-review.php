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
<form action="tambah_review.php" method="POST" enctype="multipart/form-data" class="mx-auto my-5 w-50">
  <h2 style="text-align: center;">Input Produk</h2>
  <div class="row">
    <div class="col mb-3">
      <?php
      
      $queryproduk = mysqli_query($connect, "SELECT * FROM products");
      while ($itemproduk = mysqli_fetch_array($queryproduk)) {
      ?>
        <label for="" class="form-label">Product ID</label>
        <input type="text" class="form-control border border-dark-subtle border-2" id="" name="product_id" value="<?= $itemproduk['product_id'] ?>">
      <?php } ?>
    </div>
    <div class="col mb-3">
      <label for="" class="form-label">User ID</label>
      <?php
      $user = $_SESSION['username'];
      $queryuser = mysqli_query($connect, "SELECT * FROM users WHERE username = '$user'");
      while ($itemuser = mysqli_fetch_array($queryuser)) {
      ?>
        <input type="text" class="form-control border border-dark-subtle border-2" id="" name="user_id" value="<?= $itemuser['user_id'] ?>">
      <?php } ?>
    </div>

  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Comment</label>
    <textarea class="form-control border border-dark-subtle border-2" id="exampleFormControlTextarea1" rows="3" name="content"></textarea>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Rating</label>
    <input type="text" class="form-control border border-dark-subtle border-2" id="" name="rating">
  </div>
  <div>
    <button type="submit" class="btn btn-primary" style="background-color:#B0B435; border:none;">Submit</button>
  </div>
</form>
<?php include "../layout/footer.php"; ?>