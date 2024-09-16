<?php include "../layout/header.php"; ?>
<table class="table table-bordered w-50 mx-auto">
  <div class="list-btn d-flex m-3" style="border-bottom: 2px solid grey;">
    <h1>Kategori Berita</h1>
    <!-- <div class="ms-auto">
      <button type="button" class="btn btn-primary ms-auto"><a href="upload-kategori.php" style="text-decoration: none; color: white;">Tambah</a></button>
    </div> -->
  </div>
  <thead class="table-primary " style="text-align: center;">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Kategori</th>
      <th scope="col-1">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include "../koneksi.php";
    $no = 1;
    $kategori = mysqli_query($connect, "SELECT * FROM tb_kategori ORDER BY id_kategori DESC");
    while ($item = mysqli_fetch_array($kategori)) {
    ?>
      <tr>
        <th scope="row"><?= $no++ ?></th>
        <td><?= $item['nm_kategori'] ?></td>
        <td style="text-align: center;">
          <div class="btn-group" role="group" aria-label="Basic example">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary"><a data-bs-toggle="modal" data-bs-target="#modaledit?id_kategori=<?= $item['id_kategori'] ?>" href="edit_kategori.php?id_kategori=<?= $item['id_kategori'] ?>" style="text-decoration: none; color:white;">Sunting</a></button>



            <!-- Modal -->
            <div class="modal fade" id="modaledit?id_kategori=<?= $item['id_kategori'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form action="prosesEdit_kategori.php?id_kategori=<?= $item['id_kategori'] ?>" method="post" enctype="multipart/form-data" class="mx-auto my-5 w-50">
                      <h2 style="text-align: center;">Edit Kategori</h2>
                      <div class="mb-3">
                        <label for="exampleInput" class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="nm_kategori" value="<?= $item['nm_kategori'] ?>">
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Understood</button> -->

                  </div>
                </div>
              </div>
            </div>

            <button type="button" class="btn btn-danger"><a href="hapus_kategori.php?id_kategori=<?= $item['id_kategori'] ?>" style="text-decoration: none; color:white;">Hapus</a></button>
          </div>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>

<?php include "../layout/footer.php"; ?>