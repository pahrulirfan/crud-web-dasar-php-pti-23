<!DOCTYPE html>
<html>

<head>
    <title>Data Penulis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container">

        <div class="alert alert-info">Data Penulis</div>
        <!-- localhost/webdasarpti23/crud/penulis/index.php -->

        <a href="create.php" class="btn btn-primary">Tambah Data</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>HP</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php
                require('../koneksi.php');
                $no = 1;
                $query = "SELECT * FROM penulis";
                $result = mysqli_query($link, $query);
                while ($row = mysqli_fetch_object($result)) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $no++; ?>
                        </td>
                        <td>
                            <?php echo $row->nama; ?>
                        </td>
                        <td>
                            <?php echo $row->alamat; ?>
                        </td>
                        <td>
                            <?php echo $row->hp; ?>
                        </td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="edit.php?id_penulis=<?= $row->id; ?>">Update</a>
                            <a class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin ?')"
                                href="delete.php?id_penulis=<?= $row->id; ?>">Delete</a>
                        </td>
                    </tr>

                    <?php
                }
                ?>

            </tbody>

        </table>

    </div>

</body>

</html>