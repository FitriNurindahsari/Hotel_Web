<?php

//membuat koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "hotel");

$tipekamar = $_GET['idkamar'];

//mengambil data
$query = mysqli_query($koneksi, "select * from kamar where idkamar='$tipekamar'");
$kmr = mysqli_fetch_array($query);
$data = array(
            'tipekamar'      =>  @$kmr['tipekamar'],
            'harga'      =>  number_format(@$kmr['harga'], 0, ",", "."));

//tampil data
echo json_encode($data);
?>
