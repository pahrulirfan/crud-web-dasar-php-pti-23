<!DOCTYPE html>
<html lang="en">

<head>
    <title>Belajar Array</title>
</head>

<body>
    <h2>Dasar Array</h2>

    <?php
    $merk = array(
        'Acer',
        'Apple',
        'Toshiba'
    );

    echo $merk[1];

    echo '<br>';

    $merk[] = 'Lenovo';

    print_r($merk);
    echo '<br>';

    // perulangan untuk mencetak array
    foreach ($merk as $key => $isi) {

        echo $isi;

        echo '<br>';

    }

    ?>

</body>

</html>