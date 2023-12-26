<!DOCTYPE html>
<html>

<head>
    <title>Tambah Data Penulis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container">

        <div class="alert alert-info">Tambah Data Penulis</div>
        <!-- localhost/webdasarpti23/crud/penulis/create.php -->

        <a href="index.php" class="btn btn-warning  mb-2">Kembali</a>

        <?php
        require('../koneksi.php');

        if(isset($_POST['btnsimpan'])){

            $inputnama = htmlspecialchars($_POST['txtnama']);
            $inputalamat = htmlspecialchars($_POST['txtalamat']);
            $inputhp = htmlspecialchars($_POST['txthp']);

            $query = "INSERT INTO penulis VALUES(NULL, '$inputnama',
                        '$inputalamat', '$inputhp')";

            $result = mysqli_query($link, $query);

            if ($result) {
                header("location: index.php");
            } else {
                echo "Data Gagal disimpan !";
            }
        }
        ?>

        <form action="" method="post">

            <label for="">Nama</label>
            <input type="text" class="form-control mb-2" name="txtnama">

            <label for="">Alamat</label>
            <input type="text" class="form-control mb-2" name="txtalamat">

            <label for="">HP</label>
            <input type="text" class="form-control mb-2" name="txthp">

            <input type="submit" name="btnsimpan" class="btn btn-success" value="Simpan">

        </form>

    </div>

</body>

</html>