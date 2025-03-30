<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body style="height: 3000px;">
    <?php include "header.php"?>
    <div class="container-lg">
        <div class="row">
            <!-- Sidebar -->
            <?php include "sidebar.php";?>
            <!-- End Sidebar -->
            <?php
            if (isset($_GET['x']) && $_GET['x']=='home') {
                include 'home.php';
            }elseif (isset($_GET['x']) && $_GET['x']=='pesan') {
                include 'pesan.php';
            }elseif (isset($_GET['x']) && $_GET['x']=='produk') {
                include 'produk.php';
            }elseif (isset($_GET['x']) && $_GET['x']=='customer') {
                include 'customer.php';
            }elseif (isset($_GET['x']) && $_GET['x']=='lapor') {
                include 'lapor.php';
            }
            ?>
        </div>
        <div class="fixed-bottom text-center mb-4 "> 
            Copyright 2025 @RaraCookies
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>