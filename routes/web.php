<?php
require_once __DIR__ . "/../app/controllers/pelangganController.php";
require_once __DIR__ . "/../app/controllers/homeController.php";

if ($_GET['page'] == "home") {
    home();
} else if ($_GET['page'] == "pelanggan") {
    listPelanggan();
} else {
    echo "404 Not Found";
}
?>
