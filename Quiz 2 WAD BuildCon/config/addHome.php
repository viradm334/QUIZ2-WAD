<?php

include 'connector.php';

$kota = '';
$harga = '';
$id_agen = '';
$deskripsi = '';
$thumbnail = '';
$foto_interior = '';
$direktori = 'img/';

if(isset($_POST['simpan'])){
    $kota = $_POST['kota'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $extension = array('jpeg', 'jpg', 'png');
    $thumbnail = $_FILES['thumbnail']['name'];
    move_uploaded_file($_FILES['thumbnail']['tmp_name'],$direktori.$thumbnail);
    foreach($_FILES['foto_interior']['tmp_name'] as $key => $value){
        $foto_interior=$_FILES['foto_interior']['name'][$key];
        $foto_interior_tmp=$_FILES['foto_interior']['tmp_name'][$key];
        move_uploaded_file($foto_interior_tmp, $direktori.$foto_interior);
    }

    $query = "insert into rumah (kota, harga, deskripsi, thumbnail, foto_interior, id_agen) values ('$kota', '$harga', '$deskripsi', '$thumbnail', '$foto_interior', '1')";
    mysqli_query($koneksi, $query);
}

?>