<?php include "../layout/header.php"; ?>
<table class="table table-bordered  w-75 mx-auto">
    <div class="list-btn d-flex m-3" style="border-bottom: 2px solid grey;">
        <h1>Produk</h1>
        <!-- <div class="ms-auto">
        <button type="button" class="btn btn-primary"><a href="upload-produk.php" style=" text-decoration: none; color: white;">Tambah</a></button>
        </div> -->
    </div>
    <thead class="table-primary" style="text-align: center;">
        <tr>
            <th scope="col">#</th>
            <th scope="col" >Nama Produk</th>
            <th scope="col" >Deskripsi</th>
            <th scope="col" >Harga</th>
            <th scope="col" >Stok</th>
            <th scope="col" >ID Kategori</th>
            <th scope="col" >Gambar</th>
            <th scope="col" >Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "../koneksi.php";
        $no = 1;
        $produk = mysqli_query($connect, "SELECT * FROM products JOIN categories ON 
        products.product_id=categories.category_id;");
        while ($item = mysqli_fetch_array($produk)) {
        ?>
            <tr>
                <th scope="row"><?= $no++ ?></th>
                <td class="text-break"><?= $item['name'] ?></td>
                <td class="text-break" style="width:300px; text-align: justify;">
                    <?= $item['isi_produk'] ?>
                </td>
                <td class="text-break"><?= $item['price'] ?></td>
                <td class="text-break"><?= $item['stock_quantity'] ?></td>
                <td class="text-break"><?= $item['category_id'] ?></td>
                <td> <img src="../assets/img/upload/<?= $item['image']?>" style="width: 250px; height:100px;" alt=""></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<?php include "../layout/footer.php"; ?>