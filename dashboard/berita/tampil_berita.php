<?php include "../layout/header.php"; ?>
<table class="table table-bordered  w-75 mx-auto">
    <div class="list-btn d-flex m-3" style="border-bottom: 2px solid grey;">
        <h1>Berita</h1>
        <!-- <div class="ms-auto">
        <button type="button" class="btn btn-primary"><a href="upload-berita.php" style=" text-decoration: none; color: white;">Tambah</a></button>
        </div> -->
    </div>
    <thead class="table-primary" style="text-align: center;">
        <tr>
            <th scope="col">#</th>
            <th scope="col" >Judul</th>
            <th scope="col" >Kategori</th>
            <th scope="col" >Konten</th>
            <th scope="col" >Foto</th>
            <th scope="col" >Tanggal</th>
            <th scope="col" >Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "../koneksi.php";
        $no = 1;
        $berita = mysqli_query($connect, "SELECT * FROM tb_berita JOIN tb_kategori ON tb_berita.id_kategori=tb_kategori.id_kategori;");
        while ($item = mysqli_fetch_array($berita)) {
        ?>
            <tr>
                <th scope="row"><?= $no++ ?></th>
                <td class="text-break"><?= $item['jdl_berita'] ?></td>
                <td class="text-break"><?= $item['nm_kategori'] ?></td>
                <td class="text-break" style="width:300px; text-align: justify;">
                    <?= $item['isi_berita'] ?>
                </td>
                <td> <img src="../assets/img/upload/<?= $item['pic']?>" style="width: 250px; height:100px;" alt=""></td>
                <td class="" style=" text-align: center;">
                    <?= $item['tgl_berita'] ?>
                </td>
                <td style="text-align: center;">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-primary"><a href="edit_berita.php?id_berita=<?= $item['id_berita'] ?>" style="text-decoration: none; color:white;">Sunting</a></button>
                        <button type="button" class="btn btn-danger"><a href="hapus_berita.php?id_berita=<?= $item['id_berita'] ?>" style="text-decoration: none; color:white;">Hapus</a></button>
                    </div>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<?php include "../layout/footer.php"; ?>