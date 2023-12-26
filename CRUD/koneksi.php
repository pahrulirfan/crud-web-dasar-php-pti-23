<?php

$host       = 'localhost';
$user       = 'root';
$pass       = '';
$nama_db    = 'web_dasar_pti_23';

$link = mysqli_connect($host, $user, $pass, $nama_db); 

if (!$link) {
    echo 'Koneksi Error ';
}

// localhost/webdasarpti23/crud/koneksi.php

?>