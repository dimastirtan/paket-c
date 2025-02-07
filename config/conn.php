<?php
try {
$conn = mysqli_connect("localhost","root","","paket-c");
echo "Sip Deh"; 
} catch (exception $e) {
    echo "Tidak Sip" . $e->getMessage();
}

?>