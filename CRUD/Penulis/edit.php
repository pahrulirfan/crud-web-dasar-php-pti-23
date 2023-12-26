<!DOCTYPE html>
<html>

<head>
    <title>Edit Data Penulis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container">

        <div class="alert alert-info">Edit Data Penulis</div>

        <!-- halaman ini harus diakses dari index, karna membutuhkan id_penulis -->

        <a href="index.php" class="btn btn-warning float-end mb-3">Kembali</a> <br>

        <?php
        require('../koneksi.php');
        // cek id_penulis, ada atau tidak
        if (isset($_GET["id_penulis"])) {
            // masukkan data id_penulis dari url ke variable $id 
            $id = htmlspecialchars($_GET["id_penulis"]);
            // ambil data penulis yang mau di ubah
            $query = "SELECT * FROM penulis WHERE id=$id";
            // jalankan query
            $result = mysqli_query($link, $query);
            // ambil data dari database, masukkan ke variable row
            $row = mysqli_fetch_object($result);

        } else {
            // jika tidak ada id_penulis, maka harus kembali ke halaman index.php
            header("location: index.php");
        }

        // proses simpan data
        if (isset($_POST['btnsimpan'])) {

            $id_penulis = htmlspecialchars($_POST["txtid"]);

            $inputnama = htmlspecialchars($_POST['txtnama']);
            $inputalamat = htmlspecialchars($_POST['txtalamat']);
            $inputhp = htmlspecialchars($_POST['txthp']);

            // proses update query
            $query =    "UPDATE penulis SET nama='$inputnama', 
                        alamat='$inputalamat', hp='$inputhp' 
                        WHERE id=$id_penulis";

            $result = mysqli_query($link, $query);

            if ($result) {
                header("location: index.php");
            } else {
                echo "Data Gagal disimpan !";
            }
        }
        ?>

        <form action="" method="post">

            <!-- tambahan input id untuk menyimpan id penulis -->
            <input type="hidden" name="txtid" value="<?= $row->id; ?>">


            <label for="">Nama</label>
            <input type="text" class="form-control mb-2" name="txtnama" value="<?= $row->nama; ?>">

            <label for="">Alamat</label>
            <input type="text" class="form-control mb-2" name="txtalamat" value="<?= $row->alamat; ?>">

            <label for="">HP</label>
            <input type="text" class="form-control mb-2" name="txthp" value="<?= $row->hp; ?>">

            <input type="submit" name="btnsimpan" class="btn btn-success" value="Simpan">

        </form>

    </div>

</body>

</html>