<?php 
session_start();
include "../layout/header.php"; 
?>

<!-- input form -->
<form action="tambah_produk.php" method="post" enctype="multipart/form-data" class="mx-auto my-5 w-50">
  <h2 style="text-align: center;">Input User</h2>
  <div class="mb-3">
    <label for="" class="form-label">Nama Lengkap</label>
    <input type="text" class="form-control border border-dark-subtle border-2" id="" name="fullname">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Kontak</label>
    <input type="number" class="form-control border border-dark-subtle border-2" name="kontak">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
    <textarea class="form-control border border-dark-subtle border-2" id="exampleFormControlTextarea1" rows="3" name="alamat"></textarea>
  </div>
  <div class="mb-3">
    <label for="exampleInput" class="form-label">Username</label>
    <input type="text" class="form-control border border-dark-subtle border-2" id="" name="username">
  </div>
  <div class="mb-3">
    <label for="exampleInput" class="form-label">Email</label>
    <input type="email" class="form-control border border-dark-subtle border-2" id="" name="email">
  </div>
  <div class="row">
    <div class="col mb-3">
      <label for="" class="form-label">Role</label>
      <select class="form-select border border-dark-subtle border-2" aria-label="Default select example" name="role" required>
        <option value="admin" hidden>Admin</option>
        <option value="alumni">Alumni</option>
        <option value="user">Umum</option>
      </select>
    </div>
    <div class="col mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Password</label>
      <input type="password" class="form-control border border-dark-subtle border-2" name="password">
    </div>
  </div>
  <div>
    <button type="submit" class="btn btn-primary" style="background-color:#B0B435; border:none;">Submit</button>
  </div>
</form>
<?php include "../layout/footer.php"; ?>