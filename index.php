            <?php
            if (isset($_GET['x']) && $_GET['x']=='home') {
                $page = "home.php";
                include 'main.php';
            }elseif (isset($_GET['x']) && $_GET['x']=='pesan') {
                $page = "pesan.php";
                include 'main.php';
            }elseif (isset($_GET['x']) && $_GET['x']=='produk') {
                $page = "produk.php";
                include 'main.php';
            }elseif (isset($_GET['x']) && $_GET['x']=='customer') {
                $page = "customer.php";
                include 'main.php';
            }elseif (isset($_GET['x']) && $_GET['x']=='lapor') {
                $page = "lapor.php";
                include 'main.php';
            } elseif (isset($_GET['x']) && $_GET['x']=='signin') {
            include 'signin.php';
        }else{
                include 'main.php';
            }
            ?>