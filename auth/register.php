<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg bg-secondary" style="background-image: url('../components/images/bgwall.jpg'); background-size: cover;">
    <div class="container bg-light" style="width: 500px; border-radius:10px; ">
        <form action="prosRegister.php" method="post" enctype="multipart/form-data" class="mx-auto my-5 p-3">
            <h2 style="text-align: center; font-weight:bold; margin-bottom:30px;">REGISTER</h2>
            <div class="row">
                <div class="col mb-3">
                    <input type="text" class="form-control border border-dark-subtle border-2" id="" placeholder="Nama Lengkap" name="fullname" required>
                </div>
                <div class="col mb-3">
                    <input type="text" class="form-control border border-dark-subtle border-2" id="" placeholder="Kontak" name="kontak" required>
                </div>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control border border-dark-subtle border-2" name="alamat" id="floatingTextarea2" style="height: 100px" required></textarea>
                <label for="floatingTextarea2">Alamat</label>
            </div>
            <div class="flex-column">
                <div class="w-3 mb-3">
                    <input type="text" class="form-control border border-dark-subtle border-2" id="" placeholder="Username" name="username" required>
                </div>
                <div class="ms-auto mb-3">
                    <input type="email" class="form-control border border-dark-subtle border-2" id="" placeholder="Email" name="email" required>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <select class="form-select border border-dark-subtle border-2" aria-label="Default select example" name="role" required>
                            <option selected hidden>Select role :</option>
                            <option value="admin" hidden>Admin</option>
                            <option value="alumni">Alumni</option>
                            <option value="user">Umum</option>
                        </select>
                    </div>
                    <div class="col mb-3">
                        <input type="password" class="form-control border border-dark-subtle border-2" id="exampleInputPassword1" placeholder="Password" name="password" required>
                    </div>
                    <div class="d-flex">
                        <button type="submit" class="btn btn-primary mx-auto mb-3" style="background-color:#B0B435; border:none;">sign in</button>
                    </div>
                    <div class="d-flex">
                        <p class="m-auto">Already have an account? <a href="login.php" style=" text-decoration: none; color:blue;">Login here</a></p>
                    </div>
                </div>
            </div>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>