<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="../assets/dist/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        .intro-section {
            padding: 100px 0;
            background-color: #f8f9fa;
        }

        .intro-section h1 {
            font-weight: bold;
            color: #333;
        }

        .intro-section p {
            font-size: 1.25rem;
            color: #666;
        }

        /* pagination di tampil data dashboard */
        /* Warna teks pagination menjadi putih */
        .pagination .page-link {
            color: #B0B435;
            /* Warna huruf putih */
            background-color: transparent;
            /* Latar belakang transparan untuk tombol default */
            border: 1px solid #B0B435;
            /* Tambahkan garis batas agar sesuai dengan warna aktif */
            transition: background-color 0.3s ease;
            /* Animasi transisi */
        }

        /* Warna latar belakang untuk tombol halaman aktif */
        .pagination .active .page-link {
            background-color: #B0B435;
            /* Warna latar belakang aktif */
            color: #FFFFFF;
            /* Warna teks tetap putih */
            border-color: #B0B435;
            /* Warna batas sama dengan background */
        }

        /* Saat hover di pagination */
        .pagination .page-link:hover {
            background-color: #B0B435;
            /* Background berubah jadi hijau saat dihover */
            color: #FFFFFF;
            /* Tetap putih saat dihover */
        }

        /* end */
    </style>
</head>

<body class="sb-nav-fixed">
    <?php
    include "navbar.php";
    include "sidebar.php";

    ?>