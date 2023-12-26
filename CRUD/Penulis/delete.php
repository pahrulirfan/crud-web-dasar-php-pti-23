<?php
require('../koneksi.php');
// halaman ini harus diakses dari index.php karna butuh id_penulis mana yg akan dihapus.
// cek apakah ada id_penulis, jika tidak ada, maka kembalikan ke halaman index.php
if (isset($_GET["id_penulis"])) {

    // ambil id_penulis dari url dan masukkan kedalam
    // variable $id
    $id = htmlspecialchars($_GET["id_penulis"]);

    // buat query delete berdasarkan id
    $query = "DELETE FROM penulis WHERE id=$id";

    // jalankan query
    $result = mysqli_query($link, $query);

    // cek apakah proses delete berhasil, jika Ya, maka kembali ke index
    if ($result) {
        header("location: index.php");
    } else {
        echo "Hapus data tidak berhasil.";
    }

} else {
    header("location: index.php");
}