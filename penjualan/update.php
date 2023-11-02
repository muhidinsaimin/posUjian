<?php
if(isset($_POST['update'])) {
    include_once "koneksi.php";
    $id           = $_POST['id'];
    $nama_penjualan = $_POST['nama_penjualan'];
    $kapasitas    = $_POST['kapasitas'];
    $terisi       = $_POST['terisi'];

    $sql = "UPDATE penjualan SET nama_penjualan='$nama_penjualan', kapasitas='$kapasitas', terisi='$terisi' WHERE id='$id'";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        // var_dump($sql);
        header('Location: index.php?m=penjualan');
    } else {
        include 'index.php?m=penjualan';
        echo '<script language="JavaScript">';
        echo 'alert("Data gagal diupdate")';
        echo '<script>';
    }
} else {
    echo '<script>window.history.back()</script>';
}