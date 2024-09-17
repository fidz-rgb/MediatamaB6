<?php include "../layout/header.php"; ?>

<?php include "../koneksi.php";
$id_produk = $_GET['id_produk'];
$cari = mysqli_query($connect, "SELECT * FROM products WHERE product_id = '$id_produk'");
$item = mysqli_fetch_array($cari);
?>
<!-- input form -->
<form action="prosesEdit_produk.php?id_produk=<?= $item['product_id'] ?>" method="post" enctype="multipart/form-data" class="mx-auto my-5 w-50">

    <h2 style="text-align: center;">Edit Produk</h2>
    <div class="mb-3">
        <label for="" class="form-label">Nama Produk</label>
        <input type="text" class="form-control" id="" name="nm_produk" value="<?= $item['name'] ?>">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"><?= $item['description'] ?></textarea>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Harga</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="harga"><?= $item['price'] ?></textarea>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Stok</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="stok"><?= $item['stock_quantity'] ?></textarea>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Kategori</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="id_kategori"><?= $item['category_id'] ?></textarea>
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">Foto</label>
        <input class="form-control" type="file" id="formFile" name="image" value="<?= $item['image'] ?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php include "../layout/footer.php"; ?>