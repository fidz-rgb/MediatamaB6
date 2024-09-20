<?php include "../layout/header.php"; ?>

<?php include "../koneksi.php";
$iduser = $_GET['iduser'];
$cari = mysqli_query($connect, "SELECT * FROM users WHERE user_id = '$iduser'");
$itemuser = mysqli_fetch_array($cari);
?>
<!-- input form -->
<form action="prosesEdit_user.php?iduser=<?= $itemuser['user_id'] ?>" method="post" enctype="multipart/form-data" class="mx-auto my-5 w-50">

    <h2 style="text-align: center;">Edit Users</h2>
    <div class="row">
        <div class="col mb-3">
            <label for="" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="" name="fullname" value="<?= $itemuser['fullnm'] ?>">
        </div>
        <div class="col mb-3">
            <label for="" class="form-label">Kontak</label>
            <input type="number" class="form-control" id="" name="kontak" value="<?= $itemuser['kontak'] ?>">
        </div>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat"><?= $itemuser['alamat'] ?></textarea>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Username</label>
        <input type="text" class="form-control" id="" name="username" value="<?= $itemuser['username'] ?>">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Email</label>
        <input type="email" class="form-control" id="" name="email" value="<?= $itemuser['email'] ?>">
    </div>
    <div class="row">
        <div class="col mb-3">
            <label for="" class="form-label">Role</label>
            <select name="kategori" id="" class="form-control">
                <option selected disabled value="">Pilih...</option>
                    <option value="<?= $itemuser['user_id'] ?>" <?php $itemuser['role'] ? 'selected' : '' ?> >
                        <?= $itemuser['role'] ?>
                    </option>
            </select>
        </div>
        <!-- <div class="col mb-3">
            <label for="" class="form-label">Password</label>
            <input type="password" class="form-control" id="" name="password" value="<?= $itemuser['password']?>">
        </div> -->

    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php include "../layout/footer.php"; ?>