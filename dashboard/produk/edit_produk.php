<?php 
include "../koneksi.php";
include "../layout/header.php"; 
$id_produk = $_GET['id_produk'];
$cari = mysqli_query($connect, "SELECT * FROM products WHERE product_id = '$id_produk'");
$itemproduk = mysqli_fetch_array($cari);
?>
<!-- input form -->
<form action="prosesEdit_produk.php?id_produk=<?= $itemproduk['product_id'] ?>" method="post" enctype="multipart/form-data" class="mx-auto my-5 w-50">

    <h2 style="text-align: center;">Edit Produk</h2>
    <div class="mb-3">
        <label for="" class="form-label">Nama Produk</label>
        <input type="text" class="form-control" id="" name="nm_produk" value="<?= $itemproduk['nm_product'] ?>">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"><?= $itemproduk['desc_product'] ?></textarea>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label for="exampleInput" class="form-label">Harga</label>
            <input type="text" class="form-control" id="" name="harga" value="<?= $itemproduk['price'] ?>">
        </div>
        <div class="col mb-3">
            <label for="exampleInput" class="form-label">Stok</label>
            <input type="text" class="form-control" id="" name="stok" value="<?= $itemproduk['stock_quantity'] ?>">
        </div>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Kategori Produk</label>
        <select name="kategori" id="" class="form-control">
            <option selected disabled value="">Pilih...</option>
            <?php
            include "../koneksi.php";
            $kategori = mysqli_query($connect, "SELECT * FROM categories");
            while ($itemkategori = mysqli_fetch_array($kategori)) {
            ?>
                <option value="<?= $itemkategori['category_id'] ?>"
                    <?= $itemkategori['category_id'] == $itemproduk['category_id'] ? 'selected' : '' ?>>
                    <?= $itemkategori['nm_category'] ?>
                </option>
            <?php } ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">Foto</label>
        <input class="form-control" type="file" id="formFile" name="image" value="<?= $itemproduk['image'] ?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php include "../layout/footer.php"; ?>