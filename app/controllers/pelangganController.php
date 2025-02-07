<?php
require_once __DIR__ . "/../models/pelanggan.php";

function listPelanggan() {
    $pelanggan = getPelanggan();
    require_once __DIR__ . "/../views/pelangganView.php";
}
?>
