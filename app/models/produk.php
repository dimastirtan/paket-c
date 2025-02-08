<?php
require_once __DIR__ . "/../../config/conn.php";

function getProduk() {
    global $conn;
    $sql = "SELECT * FROM produk";
    $result = mysqli_query($conn, $sql);

    $produk = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $produk[] = $row;
    }
    return $produk;
}
?>
