<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Sekolah</title>
</head>

<body>
    <h1>Daftar Makanan</h1>

    <table border="1">
        <tr>
            <td>No.</td>
            <td>Nama Makanan</td>
            <td>Harga</td>
            <td>Gambar</td>

        </tr>

        <tbody>
            <?php
                $no = 1;
                foreach ($data as $row) { ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row->nama; ?></td>
                <td><?= $row->harga; ?></td>
                <td><?= $row->gambar; ?></td>
            </tr>

            <?php

                }

            ?>
        </tbody>

    </table>

</body>

</html>