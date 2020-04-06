<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metode Result Array</title>
</head>
<body>
    <h2>Metode Result Array</h2>
    <table border="2">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($resultarray as $row) 
            { ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row['nim'] ?></td>
                    <td><?php echo $row['nama_mhs'] ?></td>
                </tr>
            <?php 
            } ?>
        </tbody>
    </table>
</body>
</html>