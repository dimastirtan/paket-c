<?php
require_once __DIR__ . "/../app/controllers/pelangganController.php";
require_once __DIR__ . "/../app/controllers/homeController.php";
require_once __DIR__ . "/../app/controllers/produkController.php";

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

if ($page == "home") {
    home();
} else if ($page == "pelanggan") {
    listPelanggan();
} else if ($page == "produk") {
    listProduk();
} else {
    require_once __DIR__ . "/../app/views/404.php";
}
?>
