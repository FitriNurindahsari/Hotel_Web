<?php
    include "koneksi/koneksi.php";
    include "create_message.php";

    //Upload foto
    $namalama = $_FILES['images'] ['name'];
    $asal = $_FILES ['images'] ['tmp_name'];
    $ukuranFile = $_FILES['images']['size']; //ukuran bytes
    $error = $_FILES['images']['error'];
    $target = "uploads/";

    //Pemisah format gambar dengan nama
    $extensiGambarValid = ['jpg','jpeg','png', 'gif', 'jfif']; //file yang akan diupload jpg/jpeg/png/gif
    $extensiGambar = explode ('.', $namalama); // . sebagai pemisah 
    $extensiGambar = strtolower(end($extensiGambar));

    //Untuk memvalidasi ekstensi file yang akan diupload bukan jpg/jpeg/png/gif
    if (!in_array($extensiGambar, $extensiGambarValid)) { 
        $koneksi->close();
        create_message("Extensi Gambar Salah","warning","danger");
        header("location:".$_SERVER['HTTP_REFERER']);
        exit();
    }

    //untuk memvalidasi apakah ukuran file lebih dari 500kb
    if ($ukuranFile > 500000) {
        $koneksi->close();
        create_message("Ukuran Gambar Terlalu Besar","warning","danger");
        header("location:".$_SERVER['HTTP_REFERER']);
        exit();
    }

            
    //File foto yang lolos pengecekan
    //Generate nama baru / AGAR TIDAK DUPLIKAT
    $namabaru = uniqid();
    $namabaru.= '.';
    $namabaru.= $extensiGambar;

    // Lokasi + Namabaru
    $fullpath = $target.$namabaru;

    if(isset($_POST['idkamar'])){
        //Hapus Foto Lama
        $sqlgetfoto = "SELECT images from kamar WHERE idkamar=".$_POST['idkamar'];
        $ambil = $koneksi->query($sqlgetfoto)->fetch_assoc();
        $lokasifoto = $ambil['images'];
        unlink($lokasifoto);

        move_uploaded_file($asal, $fullpath);


        //Kondisi Update
        $sql = "UPDATE kamar SET namakamar = '".$_POST['namakamar']."', harga = '".$_POST['harga']."', images = '$fullpath' WHERE (`idkamar` = '".$_POST['idkamar']."');";
        if ($koneksi->query($sql) === TRUE) {
            $koneksi->close();
            header("location:update_kamar.php");
            create_message("Ubah Data Berhasil","success","check");
            exit();
        }
        else {
            $conn->close();
            header("location:update_kamar.php");
            create_message("Error: " . $sql . "<br>" . $koneksi->error,"danger","warning");
            exit();
        }
    }
    else{
        move_uploaded_file($asal, $fullpath);
        //Kondisi Insert
        $namakamar = $_POST['namakamar'];
        $harga = $_POST['harga'];
        $images = $fullpath;
        $sql = "INSERT INTO kamar (namakamar, harga, images) VALUES ('$namakamar', '$harga', '$images')";
        if ($koneksi->multi_query($sql) === TRUE) {
            $koneksi->close();
            header("location:update_kamar.php");
            create_message("Simpan Data Berhasil","success","check");
            exit();
        }
        else {
            $koneksi->close();
            header("location:add_pupuk.php");
            create_message("Error: " . $sql . "<br>" . $koneksi->error,"danger","warning");
            exit();
        }
    }
?>