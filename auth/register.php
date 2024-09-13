<?php include "../utility/conn.php" ?>
<?php include "../components/header.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg bg-secondary" style="background-image: url('../components/images/bgwall.jpg'); background-size: cover;">
    <div class="container bg-light" style="width: 400px; border-radius:10px; ">
        <form action="prosRegister.php" method="post" enctype="multipart/form-data" class="mx-auto my-5 p-3">
            <h2 style="text-align: center; font-weight:bold; margin-bottom:30px;">REGISTER</h2>

            <!-- pilihan -->
            <div class="container text-center mb-3" role="tablist">
                <div class="row">
                    <div class="col" role="presentation">
                        <a class="nav-link active" id="tab-alum" data-bs-toggle="pill" href="#pills-alumni" role="tab"
                            aria-controls="pills-alumni" aria-selected="true">
                            <button type="button" class="btn btn-primary w-100" style="background-color: #B0B435; border:none;">
                                Alumni
                            </button>
                        </a>
                    </div>
                    <div class="col" role="presentation">
                        <a class="nav-link" id="tab-umum" data-bs-toggle="pill" href="#pills-umum" role="tab"
                            aria-controls="pills-umum" aria-selected="false">
                            <button type="button" class="btn btn-primary w-100" style="background-color: #B0B435; border:none;">
                                Umum
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end -->

            <!--  -->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="pills-alumni" role="tabpanel" aria-labelledby="tab-login">
                    <div class="text-center mb-3">
                        <p>Sign in with:</p>
                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fa-brands fa-facebook"></i>
                        </button>

                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-google"></i>
                        </button>

                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-github"></i>
                        </button>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control border border-dark-subtle border-2" id="" placeholder="Nama Lengkap" name="nama">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control border border-dark-subtle border-2" id="" placeholder="Username" name="username">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control border border-dark-subtle border-2" id="exampleInputPassword1" placeholder="Password" name="password">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control border border-dark-subtle border-2" id="" placeholder="Kontak" name="kontak">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control border border-dark-subtle border-2" id="" placeholder="Alamat" name="alamat">
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary" style="background-color:#B0B435; border:none;">sign in</button>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-umum" role="tabpanel" aria-labelledby="tab-register">
                    <div class="text-center mb-3">
                        <p>Sign in with:</p>
                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fa-brands fa-facebook"></i>
                        </button>

                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-google"></i>
                        </button>

                        <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-github"></i>
                        </button>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control border border-dark-subtle border-2" id="" placeholder="Nama Lengkap" name="nama">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control border border-dark-subtle border-2" id="" placeholder="Username" name="username">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control border border-dark-subtle border-2" id="exampleInputPassword1" placeholder="Password" name="password">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary" style="background-color:#B0B435; border:none;">sign in</button>
                    </div>
                </div>
            </div>



        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>