<?php 

if (isset ($_GET ['submit'])) {
    $nama = $_GET ['nama'];
    $alamat = $_GET ['alamat'];

    echo $nama;
    echo "<br>";
    echo $alamat;
}

?>