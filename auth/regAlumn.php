<?php include "../utility/conn.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg bg-secondary" style="background-image: url('../components/images/bgwall.jpg'); background-size: cover;">
    <div class="container bg-light" style="width: 400px; border-radius:10px;">
        <form action="prosRegister.php" method="post" enctype="multipart/form-data" class="mx-auto my-5 p-3">
            <h2 style="text-align: center; font-weight:bold; margin-bottom:30px;">REGISTER</h2>
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
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>