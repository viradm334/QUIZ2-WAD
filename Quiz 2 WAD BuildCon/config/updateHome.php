<?php

include 'connector.php';

$kota = '';
$harga = '';
$id_agen = '';
$deskripsi = '';
$thumbnail = '';
$foto_interior = '';
$direktori = 'img/';

if(isset($_GET['op'])){
    $op = $_GET['op'];
}else{
    $op = '';
}

?>