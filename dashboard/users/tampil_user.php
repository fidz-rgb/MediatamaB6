<?php include "../layout/header.php"; ?>
<table class="table table-bordered mx-auto" style="width:950px;">
    <div class="list-btn d-flex m-3" style="border-bottom: 2px solid grey;">
        <h1>Users</h1>
        <!-- <div class="ms-auto">
        <button type="button" class="btn btn-primary"><a href="upload-produk.php" style=" text-decoration: none; color: white;">Tambah</a></button>
        </div> -->
    </div>
    <thead class="table-primary" style="text-align: center;">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Kontak</th>
            <th scope="col">Alamat</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "../koneksi.php";
        $no = 1;
        $produk = mysqli_query($connect, "SELECT * FROM users");
        while ($item = mysqli_fetch_array($produk)) {
        ?>
            <tr>
                <th scope="row"><?= $no++ ?></th>
                <td class="text-break"><?= $item['fullnm'] ?></td>
                <td class="text-break"><?= $item['kontak'] ?></td>
                <td class="text-break"><?= $item['alamat'] ?></td>
                <td class="text-break"><?= $item['username'] ?></td>
                <td class="text-break"><?= $item['email'] ?></td>
                <td class="" style="width: fit-content;"><?= $item['role'] ?></td>
                <td class="" style="width: fit-content;">
                    <?= ($item['role'] == 'admin') ? 'Super User' :
                        (($item['is_approved'] == 1) ? 'Approved' : 'Pending'); ?>
                </td>


                <td style="text-align: center;">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <!-- <button type="button" class="btn btn-primary"><a href="edit_user.php?iduser=<?= $item['user_id'] ?>" style="text-decoration: none; color:white;">Sunting</a></button> -->
                        <button type="button" class="btn btn-danger"><a href="hapus_user.php?iduser=<?= $item['user_id'] ?>" style="text-decoration: none; color:white;">Hapus</a></button>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<?php include "../layout/footer.php"; ?>