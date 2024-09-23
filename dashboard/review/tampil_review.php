<?php
session_start();
include "../koneksi.php";
include "../layout/header.php";

if (!isset($_SESSION['islogin']) || $_SESSION['islogin'] !== true) {
    echo "<script>
    alert('Anda harus login sebagai Admin/Alumni untuk masuk!');
    window.location.href='../../auth/login.php';
    </script>";
}

?>

<table class="table table-bordered mx-auto" style="width: fit-content;">
    <div class="list-btn d-flex m-3" style="border-bottom: 2px solid grey;">
        <h1>Review</h1>
        <!-- <div class="ms-auto">
        <button type="button" class="btn btn-primary"><a href="upload-produk.php" style=" text-decoration: none; color: white;">Tambah</a></button>
        </div> -->
    </div>
    <thead class="table-primary" style="text-align: center;">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Product ID</th>
            <th scope="col">User ID</th>
            <th scope="col">Comment</th>
            <th scope="col">Rating</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        $review = mysqli_query($connect, "SELECT * FROM review");
        while ($row = mysqli_fetch_array($review)) {
        ?>
            <tr>
                <th scope="row"><?= $no++ ?></th>
                <td><?= $row['product_id'] ?></td>
                <td class=""><?= $row['user_id'] ?></td>
                <td class="text-break" style="width:500px; text-align: justify;">
                    <?= $row['content'] ?>
                </td>
                <td class=""><?= $row['rating'] ?></td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-primary"><a href="edit_review.php?review_id=<?= $row['review_id'] ?>" style="text-decoration: none; color:white;">Sunting</a></button>
                        <button type="button" class="btn btn-danger"><a href="hapus_review.php?review_id=<?= $row['review_id'] ?>" style="text-decoration: none; color:white;">Hapus</a></button>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<?php include "../layout/footer.php"; ?>