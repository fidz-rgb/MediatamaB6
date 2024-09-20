<?php include "../layout/header.php"; ?>
<?php
include "../koneksi.php";
$approve = mysqli_query($connect, "SELECT user_id, username FROM users WHERE role = 'alumni' AND is_approved = 0");
//while ($item = mysqli_fetch_array($approve)) {
?>
    <table class="table table-bordered mx-auto" style="width:950px;">
        <div class="list-btn d-flex m-3" style="border-bottom: 2px solid grey;">
            <h1>Users Approval</h1>
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($approve->num_rows > 0) {
                    while ($row = $approve->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['username'] . "</td>";
                        echo "<td><a href='prosApprove.php?userid=" . $row['user_id'] . "' class='btn btn-success'>Setujui</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='2'>Tidak ada akun untuk disetujui.</td></tr>";
                }
                ?>
            </tbody>
        </div>
    </table>
<?php  ?>

<?php include "../layout/footer.php"; ?>