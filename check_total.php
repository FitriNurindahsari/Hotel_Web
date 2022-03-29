<?php 
require_once('koneksi/koneksi.php');

$id_kamar = $_POST['kamar'];
$breakfast = json_decode($_POST['breakfast']);
$durasi = $_POST['durasi'];

$query = mysqli_query($koneksi, "select * from kamar where idkamar='$id_kamar'");
$kmr = mysqli_fetch_array($query);

$harga = $kmr['harga'] * $durasi;

if($durasi > 3){
    $disc = $harga * 0.1;
    $harga = $harga - $disc;
}

if($breakfast){
    $harga = $harga + (80000 * $durasi);
}

echo number_format($harga, 0, ",", ".");