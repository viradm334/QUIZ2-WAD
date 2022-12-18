<?php

include 'connector.php';

$waktu = '';
$no_request = rand();

if(isset($_POST['simpan'])){
    $waktu = $_POST['waktu'];

    $query = "insert into request (no_request, id_rumah, waktu, id_agen) values ('$no_request', '3', '$waktu', '1')";
    mysqli_query($koneksi, $query);
}

?>