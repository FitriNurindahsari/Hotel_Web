<?php
    include "koneksi/koneksi.php";
    $data = [];

    foreach($_POST['data_form'] as $data_post){
        $data[$data_post['name']] = $data_post['value'];
    }
    $tipe = $data['tipe_kamar'];

    $query = mysqli_query($koneksi, "select * from kamar where idkamar='$tipe'");
    $kmr = mysqli_fetch_array($query);

    $nama = $data['namapemesan'];
    $no_id = $data['no_identitas'];
    $jeniskelamin= $data['jeniskelamin'];
    $kamar = $kmr['namakamar'];
    $durasi = $data['durasi'];
    $tgl_pesan = $data['tgl_pesan'];
    $breakfast = json_decode($data['breakfast']);
    $disc = 0;

    $harga = $kmr['harga'] * $durasi;

    if($durasi > 3){
        $disc = $harga * 0.1;
        $harga = $harga - $disc;
        $disc = 10;
    }

    if($breakfast){
        $harga = $harga + (80000* $durasi);
    }

    $query = "INSERT INTO pemesanan VALUES (NULL, '$nama', '$no_id', '$jeniskelamin', '$kamar', $durasi, $disc, '$harga', '$tgl_pesan', '(boolean)$breakfast')";
    
    $sql = mysqli_query($koneksi, $query);
    if ($sql) {
        $koneksi->close();
        echo "Berhasil menambah data";
    } else {
        $koneksi->close();
        echo "Gagal Menambah data";
    }  
?>