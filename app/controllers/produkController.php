<?php
require_once __DIR__ . "/../models/produk.php";

function listProduk() {
    $pelanggan = getProduk();
    require_once __DIR__ . "/../views/produkView.php";
}
?>
