<?php 
include "../../auth/util.php";
include "../layout/header.php"; 
$username = isset($_SESSION['username']) ? $_SESSION['username'] : null;
?>
<!-- Main Introduction Section -->
<section class="intro-section text-center">
        <div class="container">
            <h1 class="display-4">Welcome to Dashboard</h1>
            <?php 
            if($username){
                echo "<p><h3>$username</h3></p>";
            }
            ?>
            <a href="#" class="btn btn-primary btn-lg mt-3" style="background-color:#B0B435; border:none;">Learn More</a>
        </div>
    </section>
<?php include "../layout/footer.php"; ?>