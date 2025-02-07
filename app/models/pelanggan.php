<?php
require_once __DIR__ . "/../../config/conn.php";

function getPelanggan() {
    global $conn;
    $sql = "SELECT * FROM pelanggan";
    $result = mysqli_query($conn, $sql);

    $pelanggan = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $pelanggan[] = $row;
    }
    return $pelanggan;
}
?>
