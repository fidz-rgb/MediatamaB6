<?php include "../layout/header.php"; ?>

<?php include "../koneksi.php";
$id_berita = $_GET['id_berita'];
$cari = mysqli_query($connect, "SELECT * FROM tb_berita WHERE id_berita = '$id_berita'");
$item = mysqli_fetch_array($cari);
?>
<!-- input form -->
<form action="prosesEdit_berita.php?id_berita=<?= $item['id_berita'] ?>" method="post" enctype="multipart/form-data" class="mx-auto my-5 w-50">

    <h2 style="text-align: center;">Edit Berita</h2>
    <div class="mb-3">
        <label for="" class="form-label">Judul Berita</label>
        <input type="text" class="form-control" id="" name="jdl_berita" value="<?= $item['jdl_berita'] ?>">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Kategori Berita</label>
        <select name="id_kategori" id="" class="form-control">
            <option selected disabled value="">Pilih...</option>
            <?php
            include "../koneksi.php";
            $kategori = mysqli_query($connect, "SELECT * FROM tb_kategori");
            while ($itemkategori = mysqli_fetch_array($kategori)) {
            ?>
                <option value="<?= $itemkategori['id_kategori'] ?>"
                    <?= $itemkategori['id_kategori'] == $item['id_kategori'] ? 'selected' : '' ?>>
                    <?= $itemkategori['nm_kategori'] ?>
                </option>
            <?php } ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Konten</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="isi_berita"><?= $item['isi_berita'] ?></textarea>
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">Foto</label>
        <input class="form-control" type="file" id="formFile" name="pic" value="<?= $item['pic'] ?>">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Tanggal Berita</label>
        <input type="date" class="form-control" id="" name="tgl_berita" value="<?= $item['tgl_berita'] ?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php include "../layout/footer.php"; ?>