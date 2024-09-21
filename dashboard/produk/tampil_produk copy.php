<?php
session_start();
include "../koneksi.php";
include "../layout/header.php";

if (isset($_SESSION['role']) && ($_SESSION['role'] === 'admin' || $_SESSION['role'] === 'alumni')) {
    echo "<script>
                alert('Welcome to product page');
        </script>";
} else {
    echo "<script>
    alert('Anda harus login sebagai Admin/Alumni untuk masuk!');
    window.location.href='../../auth/login.php';
    </script>";
}
$no = 1;
$result = $connect->query("SELECT * FROM tb_berita JOIN tb_kategori ON tb_berita.id_kategori=tb_kategori.id_kategori;");
?>

<table class="table table-bordered mx-auto" style="width: fit-content;">
    <div class="list-btn d-flex m-3" style="border-bottom: 2px solid grey;">
        <h1>Produk</h1>
        <!-- <div class="ms-auto">
        <button type="button" class="btn btn-primary"><a href="upload-produk.php" style=" text-decoration: none; color: white;">Tambah</a></button>
        </div> -->
    </div>
    <thead class="table-primary" style="text-align: center;">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Username</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Harga</th>
            <th scope="col">Stok</th>
            <th scope="col">Kategori Produk</th>
            <th scope="col">Gambar</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <th scope="row"><?= $no++ ?></th>
                <td><?= $row['username'] ?> </td>
                <td class="text-break"><?= $row['nm_product'] ?></td>
                <td class="text-break" style="width:500px; text-align: justify;">
                    <?= $row['desc_product'] ?>
                </td>
                <td class="text-break"><?= $row['price'] ?></td>
                <td class="text-break"><?= $row['stock_quantity'] ?></td>
                <td class="text-break"><?= $row['nm_category'] ?></td>
                <td> <img src="../assets/img/upload/<?= $row['image'] ?>" style="width: 200px; height:100px;" alt=""></td>
                <td style="text-align: center;">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-primary"><a href="edit_produk.php?id_produk=<?= $row['product_id'] ?>" style="text-decoration: none; color:white;">Sunting</a></button>
                        <button type="button" class="btn btn-danger"><a href="hapus_produk.php?id_produk=<?= $row['product_id'] ?>" style="text-decoration: none; color:white;">Hapus</a></button>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<?php include "../layout/footer.php"; ?>