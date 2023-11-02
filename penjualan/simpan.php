<?php
if(isset($_POST['simpan'])) {
    include_once "koneksi.php";
    $nama_penjualan = $_POST['nama_penjualan'];
    $kapasitas    = $_POST['kapasitas'];
    $terisi       = $_POST['terisi'];

    $sql = "INSERT INTO penjualan SET nama_penjualan='$nama_penjualan', kapasitas='$kapasitas', terisi='$terisi'";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        // var_dump($sql);
        header('Location: index.php?m=penjualan');
    } else {
        include 'index.php?m=penjualan';
        echo '<script language="JavaScript">';
        echo 'alert("Data gagal ditambahkan")';
        echo '<script>';
    }
} else {
    echo '<script>window.history.back()</script>';
}