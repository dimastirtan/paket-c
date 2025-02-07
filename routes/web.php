<?php
require_once __DIR__ . "/../app/controllers/pelangganController.php";

if ($_GET['page'] == "pelanggan") {
    listPelanggan();
} else {
    echo "404 Not Found";
}
?>
