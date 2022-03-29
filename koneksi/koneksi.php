<?php

$koneksi = mysqli_connect("localhost", "root", "", "hotel");
if (!$koneksi) {
	echo "koneksi gagal = " . mysqli_connect_error();
}
?>