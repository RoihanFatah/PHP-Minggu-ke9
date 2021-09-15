<form action="get-action.php" method="get">
    <label for="nama">Nama : </label>
    <input type="text" name="nama" autocomplete="off">
    <label for="alamat">Alamat : </label>
    <input type="text" name="alamat" autocomplete="off">
    <input type="submit" name="submit" value="kirim">
</form>

<?php 

if (isset ($_GET ['submit'])) {
    $nama = $_GET ['nama'];
    $alamat = $_GET ['alamat'];

    echo $nama;
    echo "<br>";
    echo $alamat;
}

?>