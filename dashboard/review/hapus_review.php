<?php
include "../koneksi.php";

if(isset($_GET['review_id']))
$reviewid = $_GET['review_id'];

$hapus = mysqli_query($connect, "DELETE FROM review WHERE review_id='$reviewid' ");
if($hapus){
    echo "<script>
    alert('Data berhasil di Hapus')
    window.location.href='tampil_review.php'
    </script>";
}else{
    echo "<script>
    alert('Data gagal di Hapus')
    window.location.href='tampil_review.php'
    </script>";
}
?>