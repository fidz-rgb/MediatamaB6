<?php
session_start();

// Ambil username dari session jika sudah login
$username = isset($_SESSION['username']) ? $_SESSION['username'] : null;
$role = isset($_SESSION['role']) ? $_SESSION['role'] : null;

// Fungsi untuk menentukan sapaan berdasarkan waktu
function getGreeting()
{
    $hour = date('H'); // Mendapatkan jam dalam format 24 jam (0-23)

    if ($hour >= 0 && $hour < 6) {
        return "Selamat Dini Hari";
    } else if ($hour >= 6 && $hour < 12) {
        return 'Selamat Pagi <i class="fas fa-coffee"></i>';
    } else if ($hour >= 12 && $hour < 15) {
        return 'Selamat Siang <i class="fa-solid fa-sun"></i>';
    } else if ($hour >= 15 && $hour < 18) {
        return 'Selamat Sore <i class="fas fa-cloud-sun"></i>';
    } else {
        return 'Selamat Malam <i class="fa-solid fa-moon"></i>';
    }
}


$greeting = $username ? getGreeting() : ''; // Dapatkan sapaan hanya jika user sudah login
?>

<!-- Start Main Top -->
<div class="main-top">
    <div class="container-fluid">
        <div class="row my-0">
            <!-- Kolom kiri -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex justify-content-start">
                <div class="login-box">
                    <select id="basic" onchange="navigate()" class="selectpicker show-tick form-control" data-placeholder="Sign In">
                        <option value="../auth/login.php" >Log in</option>
                        <option value="../auth/register.php" >Register</option>
                    </select>
                </div>
            </div>
            <!-- Kolom kanan -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex justify-content-end">
                <div class="text-slid-box ml-3">
                    <div id="offer-box" class="carouselTicker">
                        <ul class="offer-box">
                            <li>
                                <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT80
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> 50% - 80% off on Vegetables
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Off 10%! Shop Vegetables
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Off 50%! Shop Now
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Off 10%! Shop Vegetables
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> 50% - 80% off on Vegetables
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT30
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Off 50%! Shop Now
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Main Top -->

<!-- Start Main Top -->
<header class="main-header">
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
        <div class="container">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html"><img src="images/logo.png" class="logo" alt=""></a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <!-- Selamat Datang dan sapaan hanya jika sudah login -->
                <div>
                    <span style="margin:10px; font-weight: bold;">
                        <?php
                        if ($username) {
                            echo "$greeting, <span style='color: #B0B435;'>$username</span>";
                        }
                        ?>
                    </span>
                </div>
                <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown">SHOP</a>
                        <ul class="dropdown-menu">
                            <li><a href="shop.php">Sidebar Shop</a></li>
                            <li><a href="shop-detail.php">Shop Detail</a></li>
                            <li><a href="cart.php">Cart</a></li>
                            <li><a href="checkout.php">Checkout</a></li>
                            <li><a href="my-account.php">My Account</a></li>
                            <li><a href="wishlist.php">Wishlist</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact</a></li>
                    <?php
                    if ($role === 'admin') {
                        echo '<li class="nav-item"><a class="nav-link" href="../dashboard/index.php">Dashboard</a></li>';
                    } else if ($role === 'alumni'){
                        echo '<li class="nav-item"><a class="nav-link" href="../dashboard/index.php">Dashboard</a></li>';
                    } 
                    ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->

            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                    <li class="side-menu">
                        <a href="#">
                            <i class="fa fa-shopping-bag"></i>
                            <span class="badge"></span>
                            <p></p>
                        </a>
                    </li>
                    <?php
                    if ($username) {
                        echo '<li>
                        <a href="../auth/logout.php">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        </a>
                    </li>';
                    } ?>
                </ul>
            </div>
            <!-- End Atribute Navigation -->
        </div>

        <!-- Start Side menu -->
        <div class="side" id="side-menu">
            <a href="#" class="close-side"><i class="fa fa-times"></i></a>
            <li class="cart-box">
                <ul class="cart-list">
                    <li>
                        <a href="#" class="photo"><img src="../components/images/img-pro-01.jpg" class="cart-thumb" alt="" /></a>
                        <h6><a href="#">test1</a></h6>
                        <p>1x - <span class="price">$80.00</span></p>
                    </li>
                    <li>
                        <a href="#" class="photo"><img src="../components/images/img-pro-02.jpg" class="cart-thumb" alt="" /></a>
                        <h6><a href="#">test2</a></h6>
                        <p>1x - <span class="price">$60.00</span></p>
                    </li>
                    <li>
                        <a href="#" class="photo"><img src="../components/images/img-pro-03.jpg" class="cart-thumb" alt="" /></a>
                        <h6><a href="#">test3</a></h6>
                        <p>1x - <span class="price">$40.00</span></p>
                    </li>
                    <li class="total">
                        <a href="#" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                        <span class="float-right"><strong>Total</strong>: $180.00</span>
                    </li>
                </ul>
            </li>
        </div>
        <!-- End Side menu -->
    </nav>
    <!-- End Navigation -->
</header>
<!-- End Main Top -->

<!-- Start Top Search -->
<div class="top-search">
    <div class="container">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-search"></i></span>
            <input type="text" class="form-control" placeholder="Search">
            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
        </div>
    </div>
</div>
<!-- End Top Search -->